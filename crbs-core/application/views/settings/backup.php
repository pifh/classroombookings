<fieldset>
	<legend><?= lang('settings.backup.local.title') ?></legend>

	<p><?= lang('settings.backup.local.intro') ?></p>

	<p>
		<a href="<?= site_url('settings/backup/download') ?>">
			<?= lang('settings.backup.local.download') ?>
		</a>
	</p>
</fieldset>

<fieldset>
	<legend><?= lang('settings.backup.restore.title') ?></legend>

	<div class="fieldset-description">
		<p><strong><?= lang('settings.backup.restore.warning') ?></strong></p>
	</div>

	<?php echo form_open_multipart('settings/backup/restore'); ?>

	<p>
		<label for="backup_file"><?= lang('settings.backup.restore.file') ?></label>
		<input type="file" name="backup_file" id="backup_file" accept=".zip">
	</p>

	<p>
		<label for="confirm"><?= sprintf(lang('settings.backup.restore.confirm_label'), html_escape(setting('name'))) ?></label>
		<?php
		echo form_input([
			'name' => 'confirm',
			'id' => 'confirm',
			'size' => '30',
			'tabindex' => tab_index(),
		]);
		?>
	</p>

	<?php
	echo form_submit([
		'value' => lang('settings.backup.restore.button'),
		'tabindex' => tab_index(),
	]);

	echo form_close();
	?>
</fieldset>

<fieldset>
	<legend><?= lang('settings.backup.drive.title') ?></legend>

	<div class="fieldset-description">
		<p><?= lang('settings.backup.drive.intro') ?></p>
		<p class="hint">
			<?= lang('settings.backup.drive.redirect_uri_label') ?>:
			<code><?= html_escape($redirect_uri) ?></code>
		</p>
	</div>

	<?php echo form_open('settings/backup/drive_save_credentials'); ?>

	<p>
		<label for="client_id"><?= lang('settings.backup.drive.client_id') ?></label>
		<?php
		echo form_input([
			'name' => 'client_id',
			'id' => 'client_id',
			'size' => '50',
			'value' => set_value('client_id', $drive_settings['client_id'] ?? ''),
			'tabindex' => tab_index(),
		]);
		?>
	</p>
	<?php echo form_error('client_id') ?>

	<p>
		<label for="client_secret"><?= lang('settings.backup.drive.client_secret') ?></label>
		<?php
		echo form_password([
			'name' => 'client_secret',
			'id' => 'client_secret',
			'size' => '50',
			'value' => set_value('client_secret', $drive_settings['client_secret'] ?? ''),
			'tabindex' => tab_index(),
		]);
		?>
	</p>
	<?php echo form_error('client_secret') ?>

	<?php
	echo form_submit([
		'value' => lang('app.action.save'),
		'tabindex' => tab_index(),
	]);

	echo form_close();
	?>

	<?php if ($drive_connected): ?>

		<p class="hint"><?= lang('settings.backup.drive.status.connected') ?></p>

		<p>
			<a href="<?= site_url('settings/backup/drive_backup_now') ?>">
				<?= lang('settings.backup.drive.backup_now') ?>
			</a>
			<a href="<?= site_url('settings/backup/drive_disconnect') ?>">
				<?= lang('settings.backup.drive.disconnect') ?>
			</a>
		</p>

		<?php if (!empty($drive_files)): ?>

			<h3><?= lang('settings.backup.drive.files.title') ?></h3>

			<table>
				<tr>
					<th><?= lang('settings.backup.drive.files.name') ?></th>
					<th><?= lang('settings.backup.drive.files.date') ?></th>
					<th></th>
				</tr>
				<?php foreach ($drive_files as $file): ?>
				<tr>
					<td><?= html_escape($file['name']) ?></td>
					<td><?= html_escape(date_output_long(new DateTime($file['createdTime']))) ?></td>
					<td>
						<?php echo form_open('settings/backup/drive_restore', ['class' => 'ni']); ?>
						<?php echo form_hidden('file_id', $file['id']); ?>
						<?php
						echo form_input([
							'name' => 'confirm',
							'size' => '20',
							'placeholder' => setting('name'),
						]);
						echo form_submit([
							'value' => lang('settings.backup.restore.button'),
						]);
						echo form_close();
						?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>

		<?php else: ?>
			<p class="hint"><?= lang('settings.backup.drive.files.empty') ?></p>
		<?php endif; ?>

	<?php else: ?>

		<p>
			<a href="<?= site_url('settings/backup/drive_connect') ?>">
				<?= lang('settings.backup.drive.connect') ?>
			</a>
		</p>

	<?php endif; ?>

</fieldset>
