<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Sends booking-related emails, triggered via the Events pub/sub system.
 *
 * Registered automatically by the post_controller_constructor hook (see
 * config/hooks.php), which autoloads any *_events.php file under
 * application/events/.
 *
 */
class Booking_events
{


	private $CI;


	public function __construct($CI)
	{
		$this->CI = $CI;

		Events::register(EventType::BOOKING_CREATED, [$this, 'on_created']);
		Events::register(EventType::BOOKING_CANCELLED, [$this, 'on_cancelled']);
		Events::register(EventType::BOOKING_UPDATED_BY_ADMIN, [$this, 'on_updated_by_admin']);
	}


	/**
	 * A booking (or several, for the same owner) was created.
	 *
	 * Payload is one of:
	 *   ['booking_id' => int]                        Single booking.
	 *   ['repeat_id' => int, 'summary' => true]       Single recurring series.
	 *   ['booking_ids' => [int, ...]]                 Multiple bookings, same owner.
	 *   ['repeat_ids' => [int, ...], 'summary' => true]  Multiple recurring series, same owner.
	 *
	 */
	public function on_created($data)
	{
		try {

			$this->CI->load->model(['bookings_model', 'bookings_repeat_model']);
			$this->CI->load->library('mailer');
			$this->CI->load->helper('date');

			if (isset($data['booking_id'])) {
				$this->send_booking_created($data['booking_id']);
			} elseif (isset($data['repeat_id'])) {
				$this->send_recurring_created($data['repeat_id']);
			} elseif (!empty($data['booking_ids'])) {
				$this->send_bookings_created_grouped($data['booking_ids']);
			} elseif (!empty($data['repeat_ids'])) {
				$this->send_recurring_created_grouped($data['repeat_ids']);
			}

		} catch (Throwable $e) {
			log_message('error', 'Booking_events::on_created() - ' . $e->getMessage());
		}
	}


	/**
	 * A booking was cancelled, either by its owner or by an administrator.
	 *
	 * Payload: ['booking_id' => int, 'actor_user_id' => int, 'scope' => '1'|'future'|'all']
	 *
	 */
	public function on_cancelled($data)
	{
		try {

			$this->CI->load->model('bookings_model');
			$this->CI->load->library('mailer');
			$this->CI->load->helper('date');

			$booking = $this->CI->bookings_model->include(['user', 'room', 'period'])->get($data['booking_id']);

			if ( ! $booking || empty($booking->user) || empty($booking->user->email)) {
				return;
			}

			$cancelled_by_admin = ((int) $data['actor_user_id'] !== (int) $booking->user_id);

			$this->CI->mailer->send(
				$booking->user->email,
				$booking->user->displayname ?: $booking->user->username,
				lang('email.booking_cancelled.subject'),
				'booking_cancelled',
				[
					'booking' => $booking,
					'user' => $booking->user,
					'cancelled_by_admin' => $cancelled_by_admin,
					'scope' => $data['scope'] ?? '1',
				]
			);

		} catch (Throwable $e) {
			log_message('error', 'Booking_events::on_cancelled() - ' . $e->getMessage());
		}
	}


	/**
	 * An administrator modified a booking belonging to another user.
	 *
	 * Payload: ['booking_id' => int, 'notify_user_id' => int, 'notify_email' => string, 'actor_user_id' => int]
	 *
	 */
	public function on_updated_by_admin($data)
	{
		try {

			if (empty($data['notify_email'])) {
				return;
			}

			$this->CI->load->model(['bookings_model', 'users_model']);
			$this->CI->load->library('mailer');
			$this->CI->load->helper('date');

			$booking = $this->CI->bookings_model->include(['room', 'period'])->get($data['booking_id']);
			if ( ! $booking) return;

			$notify_user = $this->CI->users_model->get_by_id($data['notify_user_id']);
			$name = $notify_user ? ($notify_user->displayname ?: $notify_user->username) : $data['notify_email'];

			$this->CI->mailer->send(
				$data['notify_email'],
				$name,
				lang('email.booking_updated_by_admin.subject'),
				'booking_updated_by_admin',
				[
					'booking' => $booking,
					'user' => (object) ['displayname' => $name, 'username' => $name],
					'view_url' => site_url('bookings/view/' . $booking->booking_id),
				]
			);

		} catch (Throwable $e) {
			log_message('error', 'Booking_events::on_updated_by_admin() - ' . $e->getMessage());
		}
	}


	private function send_booking_created($booking_id)
	{
		$booking = $this->CI->bookings_model->include(['user', 'room', 'period'])->get($booking_id);

		if ( ! $booking || empty($booking->user) || empty($booking->user->email)) {
			return;
		}

		$this->CI->mailer->send(
			$booking->user->email,
			$booking->user->displayname ?: $booking->user->username,
			lang('email.booking_created.subject'),
			'booking_created',
			[
				'booking' => $booking,
				'user' => $booking->user,
				'view_url' => site_url('bookings/view/' . $booking->booking_id),
			]
		);
	}


	private function send_recurring_created($repeat_id)
	{
		$repeat = $this->CI->bookings_repeat_model->include(['user', 'room', 'period'])->get($repeat_id);

		if ( ! $repeat || empty($repeat->user) || empty($repeat->user->email)) {
			return;
		}

		$count = (int) $this->CI->db
			->where('repeat_id', $repeat_id)
			->where('status', Bookings_model::STATUS_BOOKED)
			->count_all_results('bookings');

		$this->CI->mailer->send(
			$repeat->user->email,
			$repeat->user->displayname ?: $repeat->user->username,
			lang('email.booking_created_summary.subject'),
			'booking_created_summary',
			[
				'user' => $repeat->user,
				'count' => $count,
				'lines' => [
					sprintf('%s - %s', $repeat->room->name, $repeat->period->name),
				],
				'view_url' => site_url('bookings/view_series/' . $repeat_id),
			]
		);
	}


	private function send_bookings_created_grouped(array $booking_ids)
	{
		$user = null;
		$lines = [];

		foreach ($booking_ids as $booking_id) {

			$booking = $this->CI->bookings_model->include(['user', 'room', 'period'])->get($booking_id);
			if ( ! $booking) continue;

			if ( ! $user) $user = $booking->user;

			$lines[] = sprintf('%s - %s - %s', $booking->room->name, date_output_long($booking->date), $booking->period->name);
		}

		if ( ! $user || empty($user->email)) return;

		$this->CI->mailer->send(
			$user->email,
			$user->displayname ?: $user->username,
			lang('email.booking_created_summary.subject'),
			'booking_created_summary',
			[
				'user' => $user,
				'count' => count($lines),
				'lines' => $lines,
				'view_url' => site_url('bookings'),
			]
		);
	}


	private function send_recurring_created_grouped(array $repeat_ids)
	{
		$user = null;
		$lines = [];

		foreach ($repeat_ids as $repeat_id) {

			$repeat = $this->CI->bookings_repeat_model->include(['user', 'room', 'period'])->get($repeat_id);
			if ( ! $repeat) continue;

			if ( ! $user) $user = $repeat->user;

			$lines[] = sprintf('%s - %s', $repeat->room->name, $repeat->period->name);
		}

		if ( ! $user || empty($user->email)) return;

		$this->CI->mailer->send(
			$user->email,
			$user->displayname ?: $user->username,
			lang('email.booking_created_summary.subject'),
			'booking_created_summary',
			[
				'user' => $user,
				'count' => count($lines),
				'lines' => $lines,
				'view_url' => site_url('bookings'),
			]
		);
	}


}
