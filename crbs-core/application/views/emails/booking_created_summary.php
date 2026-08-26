<p><?= sprintf(lang('email.booking_created_summary.hello'), html_escape($user->displayname ?: $user->username)) ?></p>

<p><?= sprintf(lang('email.booking_created_summary.intro'), (int) $count) ?></p>

<ul>
	<?php foreach ($lines as $line): ?>
	<li><?= html_escape($line) ?></li>
	<?php endforeach; ?>
</ul>

<p><a href="<?= html_escape($view_url) ?>"><?= lang('email.booking_created_summary.view_link') ?></a></p>
