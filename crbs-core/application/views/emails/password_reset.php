<p><?= sprintf(lang('email.password_reset.hello'), html_escape($user->displayname ?: $user->username)) ?></p>

<p><?= lang('email.password_reset.intro') ?></p>

<table role="presentation" cellpadding="0" cellspacing="0" style="margin:24px auto;">
	<tr>
		<td bgcolor="#2b3e50" align="center" style="background-color:#2b3e50;border-radius:4px;">
			<a href="<?= html_escape($reset_url) ?>" class="force-white" style="display:inline-block;padding:12px 24px;font-size:14px;color:#ffffff;text-decoration:none;">
				<?= lang('email.password_reset.button') ?>
			</a>
		</td>
	</tr>
</table>

<p><?= lang('email.password_reset.fallback') ?></p>
<p style="word-break:break-all;"><a href="<?= html_escape($reset_url) ?>" style="color:#2b3e50;"><?= html_escape($reset_url) ?></a></p>

<p class="hint"><?= lang('email.password_reset.expiry') ?></p>

<p><?= lang('email.password_reset.ignore') ?></p>
