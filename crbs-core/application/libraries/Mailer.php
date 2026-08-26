<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Wraps CodeIgniter's native Email library, reading SMTP configuration
 * from the 'smtp' settings group and rendering HTML bodies through
 * the emails/layout view.
 *
 * Sending never throws: failures are logged and send() returns FALSE,
 * so a mail problem can never break a booking action.
 *
 */
class Mailer
{


	protected $CI;


	public function __construct()
	{
		$this->CI =& get_instance();
	}


	/**
	 * Render an email view (wrapped in emails/layout) and send it.
	 *
	 * @param  string $to_email
	 * @param  string $to_name
	 * @param  string $subject
	 * @param  string $view     View name under application/views/emails/, without extension.
	 * @param  array  $data     Data passed to the view.
	 * @return  bool
	 *
	 */
	public function send($to_email, $to_name, $subject, $view, array $data = [])
	{
		if (empty($to_email)) {
			log_message('debug', 'Mailer::send() - No recipient email address, skipping.');
			return FALSE;
		}

		$settings = $this->CI->settings_model->get_all('smtp');

		$config = $this->build_config($settings);

		if ($config === FALSE) {
			log_message('debug', 'Mailer::send() - SMTP is not enabled/configured, skipping.');
			return FALSE;
		}

		try {

			$content = $this->CI->load->view("emails/{$view}", $data, TRUE);
			$body = $this->CI->load->view('emails/layout', ['content' => $content] + $data, TRUE);

			$this->CI->load->library('email', $config);
			$this->CI->email->clear(TRUE);
			$this->CI->email->initialize($config);

			$from_email = !empty($settings['smtp_from_email']) ? $settings['smtp_from_email'] : $config['smtp_user'];
			$from_name = !empty($settings['smtp_from_name']) ? $settings['smtp_from_name'] : '';

			$this->CI->email->from($from_email, $from_name);
			$this->CI->email->to($to_email, $to_name ?: '');
			$this->CI->email->subject($subject);
			$this->CI->email->message($body);

			$sent = $this->CI->email->send();

			if ( ! $sent) {
				log_message('error', 'Mailer::send() - Failed to send email: ' . $this->CI->email->print_debugger(['headers']));
			}

			return $sent;

		} catch (Throwable $e) {
			log_message('error', 'Mailer::send() - Exception: ' . $e->getMessage());
			return FALSE;
		}
	}


	/**
	 * Build a CI Email-compatible config array from stored (or overridden) settings.
	 *
	 * @param  array $settings Values as returned by Settings_model::get_all('smtp').
	 * @return  array|FALSE FALSE when SMTP is not enabled/configured.
	 *
	 */
	public function build_config(array $settings)
	{
		if (empty($settings['smtp_enabled'])) {
			return FALSE;
		}

		if (empty($settings['smtp_host'])) {
			return FALSE;
		}

		$config = [
			'protocol' => 'smtp',
			'smtp_host' => $settings['smtp_host'],
			'smtp_port' => !empty($settings['smtp_port']) ? (int) $settings['smtp_port'] : 587,
			'smtp_user' => $settings['smtp_username'] ?? '',
			'smtp_pass' => $settings['smtp_password'] ?? '',
			'smtp_crypto' => $settings['smtp_encryption'] ?? '',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'wordwrap' => TRUE,
			'newline' => "\r\n",
			// CI_Email uses 'crlf' (separate from 'newline') to decide how it
			// quoted-printable-encodes the HTML body. Left at its "\n" default,
			// it soft-wraps long lines with a non-RFC-compliant "=\n" instead of
			// "=\r\n", which some mail transports (seen with Office 365) mangle
			// into a stray literal "=" wherever a URL happens to wrap.
			'crlf' => "\r\n",
		];

		if (empty($config['smtp_crypto'])) {
			unset($config['smtp_crypto']);
		}

		return $config;
	}


}
