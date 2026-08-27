<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content="60">
<title><?= html_escape(lang('board.title')) ?> — <?= html_escape(setting('name') ?: 'classroombookings') ?></title>
<style>
	body {
		margin: 0;
		padding: 24px;
		background-color: #f4f4f4;
		font-family: Arial, Helvetica, sans-serif;
		color: #333333;
	}
	h1 {
		margin: 0 0 4px;
		font-size: 20px;
	}
	.updated {
		color: #999999;
		font-size: 13px;
		margin-bottom: 24px;
	}
	.section {
		background-color: #ffffff;
		border-radius: 4px;
		margin-bottom: 20px;
		overflow: hidden;
	}
	.section-header {
		background-color: #2b3e50;
		color: #ffffff;
		padding: 10px 16px;
		font-size: 16px;
		font-weight: bold;
	}
	.section-header .time {
		font-weight: normal;
		font-size: 13px;
		opacity: 0.8;
	}
	.room-row {
		padding: 12px 16px;
		border-bottom: 1px solid #eeeeee;
	}
	.room-row:last-child {
		border-bottom: none;
	}
	.room-name {
		font-size: 16px;
		font-weight: bold;
	}
	.person-name {
		font-size: 14px;
	}
	.notes {
		font-size: 13px;
		color: #666666;
		margin-top: 2px;
	}
	.empty {
		padding: 16px;
		color: #999999;
		font-size: 14px;
	}
</style>
</head>
<body>

	<h1><?= html_escape(setting('name') ?: 'classroombookings') ?></h1>
	<div class="updated"><?= html_escape(date_output_long(new DateTime())) ?> &mdash; <?= html_escape(date('H:i')) ?></div>

	<div class="section">
		<div class="section-header">
			<?= html_escape(lang('board.now')) ?>
			<?php if ($current_period): ?>
				<span class="time">(<?= html_escape($current_period->name) ?>, <?= html_escape(date_output_time($current_period->time_start)) ?> - <?= html_escape(date_output_time($current_period->time_end)) ?>)</span>
			<?php endif; ?>
		</div>
		<?php if (empty($now)): ?>
			<div class="empty"><?= html_escape(lang('board.empty')) ?></div>
		<?php else: ?>
			<?php foreach ($now as $entry): ?>
			<div class="room-row">
				<div class="room-name"><?= html_escape($entry['room_name']) ?></div>
				<div class="person-name"><?= html_escape($entry['user_name']) ?></div>
				<?php if (!empty($entry['notes'])): ?>
				<div class="notes"><?= html_escape($entry['notes']) ?></div>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>

	<div class="section">
		<div class="section-header">
			<?= html_escape(lang('board.next')) ?>
			<?php if ($next_period): ?>
				<span class="time">(<?= html_escape($next_period->name) ?>, <?= html_escape(date_output_time($next_period->time_start)) ?> - <?= html_escape(date_output_time($next_period->time_end)) ?>)</span>
			<?php endif; ?>
		</div>
		<?php if (empty($next)): ?>
			<div class="empty"><?= html_escape(lang('board.empty')) ?></div>
		<?php else: ?>
			<?php foreach ($next as $entry): ?>
			<div class="room-row">
				<div class="room-name"><?= html_escape($entry['room_name']) ?></div>
				<div class="person-name"><?= html_escape($entry['user_name']) ?></div>
				<?php if (!empty($entry['notes'])): ?>
				<div class="notes"><?= html_escape($entry['notes']) ?></div>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>

</body>
</html>
