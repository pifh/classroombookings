<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Public "now / next" board: shows which of an admin-selected set of rooms
 * are occupied right now, and in the next period today. No login required.
 *
 */
class Now extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		// Public kiosk page: always use the admin-configured default language,
		// ignoring any language cookie/session the visiting device happens to carry.
		$this->load_language(setting('default_language', 'lang') ?: 'english');

		// The Dates library (used by date_output_long()) reads the language
		// once in its constructor, so it must be rebuilt after switching above.
		$this->load->library('dates');
		$this->dates = new Dates();

		$this->load->helper('date');
		$this->load->model([
			'rooms_model',
			'sessions_model',
			'schedules_model',
			'periods_model',
			'bookings_model',
		]);

		$room_ids = $this->settings_model->get('room_ids', 'now') ?: [];

		$this->data['now'] = [];
		$this->data['next'] = [];
		$this->data['current_period'] = null;
		$this->data['next_period'] = null;

		if (!empty($room_ids)) {
			$this->build_board($room_ids);
		}

		return $this->load->view('now/index', $this->data);
	}


	private function build_board(array $room_ids)
	{
		$session = $this->sessions_model->get_current();
		if (!$session) return;

		$rooms = $this->rooms_model->get_by_ids($room_ids);
		if (empty($rooms)) return;

		$rooms_by_group = [];
		foreach ($rooms as $room) {
			$group_key = $room->room_group_id ?: 0;
			$rooms_by_group[$group_key][] = $room;
		}

		$today = date('Y-m-d');
		$weekday = date('N');
		$now_time = date('H:i:s');

		$now_list = [];
		$next_list = [];
		$current_period = null;
		$next_period = null;

		foreach ($rooms_by_group as $group_room_ids => $group_rooms) {

			$schedule = $this->schedules_model->get_applied_schedule($session->session_id, $group_room_ids);
			if (empty($schedule) || empty($schedule->schedule_id)) continue;

			$periods = $this->periods_model->filtered([
				'schedule_id' => $schedule->schedule_id,
				'day' => $weekday,
				'bookable' => 1,
			]);
			if (empty($periods)) continue;

			$group_current_period = null;
			$group_next_period = null;

			foreach ($periods as $period) {
				if ($now_time >= $period->time_start && $now_time < $period->time_end) {
					$group_current_period = $period;
				}
			}
			foreach ($periods as $period) {
				if ($period->time_start > $now_time) {
					$group_next_period = $period;
					break;
				}
			}

			if ($group_current_period && ! $current_period) $current_period = $group_current_period;
			if ($group_next_period && ! $next_period) $next_period = $group_next_period;

			$period_ids = array_filter([
				$group_current_period->period_id ?? null,
				$group_next_period->period_id ?? null,
			]);
			if (empty($period_ids)) continue;

			$room_ids_in_group = array_map(fn($r) => $r->room_id, $group_rooms);

			$bookings = $this->bookings_model->find_occupying($room_ids_in_group, $period_ids, $today);

			foreach ($bookings as $booking) {

				$entry = [
					'room_name' => $booking->room->name,
					'user_name' => $booking->user->displayname ?: $booking->user->username,
					'notes' => $booking->notes,
				];

				if ($group_current_period && (int) $booking->period_id === (int) $group_current_period->period_id) {
					$now_list[] = $entry;
				}
				if ($group_next_period && (int) $booking->period_id === (int) $group_next_period->period_id) {
					$next_list[] = $entry;
				}
			}
		}

		$this->data['now'] = $now_list;
		$this->data['next'] = $next_list;
		$this->data['current_period'] = $current_period;
		$this->data['next_period'] = $next_period;
	}


}
