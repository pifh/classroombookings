<p><?= sprintf(lang('email.booking_cancelled.hello'), html_escape($user->displayname ?: $user->username)) ?></p>

<p>
<?php if ($cancelled_by_admin): ?>
	<?= lang('email.booking_cancelled.intro_by_admin') ?>
<?php else: ?>
	<?= lang('email.booking_cancelled.intro_self') ?>
<?php endif; ?>
</p>

<table role="presentation" cellpadding="4" cellspacing="0" style="margin:16px 0;">
	<tr><td><strong><?= lang('room.room') ?>:</strong></td><td><?= html_escape($booking->room->name) ?></td></tr>
	<tr><td><strong><?= lang('app.date') ?>:</strong></td><td><?= html_escape(date_output_long($booking->date)) ?></td></tr>
	<tr><td><strong><?= lang('period.period') ?>:</strong></td><td><?= html_escape($booking->period->name) ?> (<?= html_escape(date_output_time($booking->period->time_start)) ?> - <?= html_escape(date_output_time($booking->period->time_end)) ?>)</td></tr>
</table>

<?php if ($scope !== '1'): ?>
	<p><?= lang('email.booking_cancelled.scope_note') ?></p>
<?php endif; ?>
