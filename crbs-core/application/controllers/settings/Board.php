<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();

		$this->require_logged_in();
		$this->require_permission(Permission::SETUP_SETTINGS);

		$this->load->model(['rooms_model', 'room_groups_model']);

		$this->data['showtitle'] = lang('settings.board');
	}


	public function index()
	{
		$this->data['title'] = lang('settings.board');

		if ($this->input->post()) {
			$this->save();
		}

		$this->data['selected_room_ids'] = $this->settings_model->get('room_ids', 'now') ?: [];
		$this->data['rooms_by_group'] = $this->rooms_model->get_all_grouped();
		$this->data['room_groups'] = $this->room_groups_model->get_all();

		$body = (string) $this->session->flashdata('saved');
		$body .= $this->load->view('settings/board', $this->data, TRUE);

		$this->data['body'] = '<h2>' . lang('settings.board') . '</h2>' . $body;

		return $this->render();
	}


	private function save()
	{
		$room_ids = array_map('intval', (array) $this->input->post('room_ids'));

		$this->settings_model->set(['room_ids' => $room_ids], 'now');

		$this->session->set_flashdata('saved', msgbox('info', lang('settings.board.save.success')));

		redirect('settings/board');
	}


}
