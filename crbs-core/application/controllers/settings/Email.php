<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();

		$this->require_logged_in();
		$this->require_permission(Permission::SETUP_SETTINGS);

		$this->data['showtitle'] = lang('settings.email');
	}


	public function index()
	{
		$this->data['title'] = lang('settings.email');

		$this->data['settings'] = $this->settings_model->get_all('smtp');

		if ($this->input->post()) {
			$this->save();
		}

		$columns = [
			'c1' => [
				'content' => $this->load->view('settings/email', $this->data, TRUE),
				'width' => '70%',
			],
			'c2' => [
				'content' => $this->load->view('settings/email_test', $this->data, TRUE),
				'width' => '30%',
			],
		];

		$body = (string) $this->session->flashdata('saved');
		$body .= $this->load->view('columns', $columns, TRUE);

		$this->data['body'] = '<h2>' . lang('settings.email') . '</h2>' . $body;

		return $this->render();
	}


	public function test()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('test_to', 'lang:settings.email.test.send_to', 'required|valid_email');

		if ($this->form_validation->run() !== FALSE) {

			$this->load->library('mailer');

			$sent = $this->mailer->send(
				$this->input->post('test_to'),
				null,
				lang('email.test.subject'),
				'test',
				[]
			);

			$msg = $sent
				? msgbox('info', lang('settings.email.test.success'))
				: msgbox('error', lang('settings.email.test.error'));

			$this->session->set_flashdata('saved', $msg);
		}

		redirect('settings/email');
	}


	private function save()
	{
		$this->load->library('form_validation');

		$opt_required = '';
		if ($this->input->post('smtp_enabled') == 1) {
			$opt_required = 'required|';
		}

		$this->form_validation->set_rules('smtp_enabled', 'lang:settings.email.enabled', 'required|is_natural');
		$this->form_validation->set_rules('smtp_host', 'lang:settings.email.host', $opt_required.'max_length[255]');
		$this->form_validation->set_rules('smtp_port', 'lang:settings.email.port', $opt_required.'is_natural_no_zero');
		$this->form_validation->set_rules('smtp_encryption', 'lang:settings.email.encryption', 'max_length[10]');
		$this->form_validation->set_rules('smtp_username', 'lang:settings.email.username', 'max_length[255]');
		$this->form_validation->set_rules('smtp_password', 'lang:settings.email.password', 'max_length[255]');
		$this->form_validation->set_rules('smtp_from_email', 'lang:settings.email.from_email', $opt_required.'valid_email');
		$this->form_validation->set_rules('smtp_from_name', 'lang:settings.email.from_name', 'max_length[255]');

		if ($this->form_validation->run() == FALSE) {
			return FALSE;
		}

		$fields = [
			'smtp_enabled',
			'smtp_host',
			'smtp_port',
			'smtp_encryption',
			'smtp_username',
			'smtp_password',
			'smtp_from_email',
			'smtp_from_name',
		];

		$settings = [];

		foreach ($fields as $field) {

			$value = $this->input->post($field);

			switch ($field) {
				case 'smtp_enabled':
				case 'smtp_port':
					$value = (int) $this->input->post($field);
				break;
			}

			$settings[$field] = $value;
		}

		$this->settings_model->set($settings, 'smtp');

		$this->session->set_flashdata('saved', msgbox('info', lang('settings.email.save.success')));

		redirect('settings/email');
	}


}
