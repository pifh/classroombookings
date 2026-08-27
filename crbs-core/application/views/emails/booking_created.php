<p><?= sprintf(lang('email.booking_created.hello'), html_escape($user->displayname ?: $user->username)) ?></p>

<p><?= lang('email.booking_created.intro') ?></p>

<table role="presentation" cellpadding="4" cellspacing="0" style="margin:16px 0;">
	<tr><td><strong><?= lang('room.room') ?>:</strong></td><td><?= html_escape($booking->room->name) ?></td></tr>
	<tr><td><strong><?= lang('app.date') ?>:</strong></td><td><?= html_escape(date_output_long($booking->date)) ?></td></tr>
	<tr><td><strong><?= lang('period.period') ?>:</strong></td><td><?= html_escape($booking->period->name) ?> (<?= html_escape(date_output_time($booking->period->time_start)) ?> - <?= html_escape(date_output_time($booking->period->time_end)) ?>)</td></tr>
	<?php if (!empty($booking->notes)): ?>
	<tr><td><strong><?= lang('booking.notes') ?>:</strong></td><td><?= html_escape($booking->notes) ?></td></tr>
	<?php endif; ?>
	<?php if (!empty($created_by_name)): ?>
	<tr><td><strong><?= lang('email.booking_created.by') ?>:</strong></td><td><?= html_escape($created_by_name) ?></td></tr>
	<?php endif; ?>
</table>

<p><a href="<?= html_escape($view_url) ?>"><?= lang('email.booking_created.view_link') ?></a></p>
