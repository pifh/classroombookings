<?php

echo form_open(current_url(), array('class' => 'cssform', 'id' => 'email_settings'));

?>


<fieldset>

	<legend accesskey="E" tabindex="<?php echo tab_index() ?>"><?= lang('settings.email') ?></legend>

	<?php
	$field = 'smtp_enabled';
	$value = set_value($field, element($field, $settings, '0'), FALSE);
	?>
	<p>
		<label for="<?= $field ?>"><?= lang('settings.email.enabled') ?></label>
		<?php
		echo form_hidden($field, '0');
		echo form_checkbox(array(
			'name' => $field,
			'id' => $field,
			'value' => '1',
			'tabindex' => tab_index(),
			'checked' => ($value == '1'),
		));
		?>
	</p>
	<?php echo form_error($field) ?>

	<?php
	$field = 'smtp_host';
	$value = set_value($field, element($field, $settings), FALSE);
	?>
	<p>
		<label for="<?= $field ?>"><?= lang('settings.email.host') ?></label>
		<?php
		echo form_input(array(
			'name' => $field,
			'id' => $field,
			'size' => '40',
			'maxlength' => '255',
			'tabindex' => tab_index(),
			'value' => $value,
		));
		?>
	</p>
	<?php echo form_error($field) ?>

	<?php
	$field = 'smtp_port';
	$value = set_value($field, element($field, $settings, '587'), FALSE);
	?>
	<p>
		<label for="<?= $field ?>"><?= lang('settings.email.port') ?></label>
		<?php
		echo form_input(array(
			'type' => 'number',
			'name' => $field,
			'id' => $field,
			'size' => '5',
			'maxlength' => '5',
			'tabindex' => tab_index(),
			'value' => $value,
			'style' => 'max-width:70px',
		));
		?>
	</p>
	<?php echo form_error($field) ?>

	<?php
	$field = 'smtp_encryption';
	$value = set_value($field, element($field, $settings, ''), FALSE);
	?>
	<p>
		<label for="<?= $field ?>"><?= lang('settings.email.encryption') ?></label>
		<?php
		echo form_dropdown([
			'name' => $field,
			'id' => $field,
			'options' => [
				'' => lang('settings.email.encryption.none'),
				'tls' => 'TLS',
				'ssl' => 'SSL',
			],
			'selected' => $value,
			'tabindex' => tab_index(),
		]);
		?>
	</p>
	<?php echo form_error($field) ?>

	<?php
	$field = 'smtp_username';
	$value = set_value($field, element($field, $settings), FALSE);
	?>
	<p>
		<label for="<?= $field ?>"><?= lang('settings.email.username') ?></label>
		<?php
		echo form_input(array(
			'name' => $field,
			'id' => $field,
			'size' => '40',
			'maxlength' => '255',
			'tabindex' => tab_index(),
			'value' => $value,
		));
		?>
	</p>
	<?php echo form_error($field) ?>

	<?php
	$field = 'smtp_password';
	$value = set_value($field, element($field, $settings), FALSE);
	?>
	<p>
		<label for="<?= $field ?>"><?= lang('settings.email.password') ?></label>
		<?php
		echo form_password(array(
			'name' => $field,
			'id' => $field,
			'size' => '40',
			'maxlength' => '255',
			'tabindex' => tab_index(),
			'value' => $value,
		));
		?>
	</p>
	<?php echo form_error($field) ?>

	<?php
	$field = 'smtp_from_email';
	$value = set_value($field, element($field, $settings), FALSE);
	?>
	<p>
		<label for="<?= $field ?>"><?= lang('settings.email.from_email') ?></label>
		<?php
		echo form_input(array(
			'name' => $field,
			'id' => $field,
			'size' => '40',
			'maxlength' => '255',
			'tabindex' => tab_index(),
			'value' => $value,
		));
		?>
	</p>
	<?php echo form_error($field) ?>

	<?php
	$field = 'smtp_from_name';
	$value = set_value($field, element($field, $settings), FALSE);
	?>
	<p>
		<label for="<?= $field ?>"><?= lang('settings.email.from_name') ?></label>
		<?php
		echo form_input(array(
			'name' => $field,
			'id' => $field,
			'size' => '40',
			'maxlength' => '255',
			'tabindex' => tab_index(),
			'value' => $value,
		));
		?>
	</p>
	<?php echo form_error($field) ?>

</fieldset>


<?php

$this->load->view('partials/submit', array(
	'submit' => array(lang('app.action.save'), tab_index()),
));

echo form_close();
