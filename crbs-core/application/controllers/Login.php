<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();
	}


	function index()
	{
		if ($this->input->post()) {
			$this->handle_submit();
		}

		$this->data['title'] = lang('auth.log_in');

		$this->data['message'] = '';
		if (setting('login_message_enabled')) {
			$this->data['message'] = html_escape(setting('login_message_text'));
		}

		$columns = array(
			'c1' => array(
				'width' => '60%',
				'content' => $this->load->view('login/login_index', $this->data, TRUE),
			),
			'c2' => array(
				'width' => '40%',
				'content' => '',
			),
		);

		$image_url = image_url(setting('logo'));
		$logo_html = (!empty($image_url))
			? img($image_url, FALSE, ["style" => 'max-width:100%;max-height:300px;width:auto;display:block'])
			: '';

		$columns['c2']['content'] = $logo_html;

		$title = sprintf("<h2>%s</h2>", lang('auth.log_in'));
		$body = $this->load->view('columns', $columns, TRUE);

		$auth = (string) $this->session->flashdata('auth');

		$this->data['body'] = $title . $auth . $body;

		return $this->render();
	}


	function forgot()
	{
		if ($this->input->post()) {
			$this->handle_forgot_submit();
		}

		$this->data['title'] = lang('auth.forgot.title');
		$this->data['showtitle'] = $this->data['title'];
		$this->data['body'] = $this->load->view('login/forgot', $this->data, TRUE);

		return $this->render();
	}


	private function handle_forgot_submit()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'lang:user.field.username', 'required|max_length[255]');

		if ($this->form_validation->run() == FALSE) {
			return false;
		}

		$this->load->model('users_model');

		$username = $this->input->post('username');
		$user = $this->users_model->get_by_username($username);

		if ($user && ! empty($user->email)) {

			$this->load->model('password_resets_model');
			$this->load->library('mailer');

			$token = $this->password_resets_model->create_for_user($user->user_id);
			$reset_url = site_url('login/reset/' . $token);

			$this->mailer->send(
				$user->email,
				$user->displayname ?: $user->username,
				lang('email.password_reset.subject'),
				'password_reset',
				[
					'user' => $user,
					'reset_url' => $reset_url,
				]
			);
		}

		// Always show the same message, regardless of whether the username
		// was found, to avoid leaking which usernames exist.
		$this->session->set_flashdata('auth', msgbox('info', lang('auth.forgot.success')));
		redirect('login');
	}


	function reset($token)
	{
		$this->load->model('password_resets_model');

		$reset = $this->password_resets_model->find_valid($token);

		if ( ! $reset) {
			$this->data['title'] = lang('auth.reset.title');
			$this->data['showtitle'] = $this->data['title'];
			$this->data['body'] = msgbox('error', lang('auth.reset.invalid_token'));
			return $this->render();
		}

		if ($this->input->post('password1')) {
			$this->handle_reset_submit($reset);
		}

		$this->data['title'] = lang('auth.reset.title');
		$this->data['showtitle'] = $this->data['title'];
		$this->data['token'] = $token;
		$this->data['body'] = $this->load->view('login/reset', $this->data, TRUE);

		return $this->render();
	}


	private function handle_reset_submit($reset)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password1', 'lang:user.field.password', "required|min_length[8]|is_not_current_password[{$reset->user_id}]");
		$this->form_validation->set_rules('password2', 'lang:user.field.password2', 'required|min_length[8]|matches[password1]');

		if ($this->form_validation->run() == FALSE) {
			return false;
		}

		$this->load->model('users_model');

		$this->users_model->set_password($reset->user_id, $this->input->post('password1'));
		$this->users_model->update($reset->user_id, ['force_password_reset' => 0]);
		$this->password_resets_model->mark_used($reset->reset_id);

		$this->session->set_flashdata('auth', msgbox('info', lang('auth.reset.success')));
		redirect('login');
	}


	private function handle_submit()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'lang:user.field.username', 'required|max_length[255]');
		$this->form_validation->set_rules('password', 'lang:user.field.password', 'required');

		// Run validation
		if ($this->form_validation->run() == FALSE) {
			return false;
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($this->userauth->log_in($username, $password)) {
			// Success
			$uri = '';
			if (isset($_SESSION['post_login_uri'])) {
				$uri = $_SESSION['post_login_uri'];
				unset($_SESSION['post_login_uri']);
			}
			redirect($uri);
		} else {
			$this->data['error'] = msgbox('error', lang('auth.bad_credentials'));
			return false;
		}
	}


}
