<fieldset>

	<legend accesskey="T" tabindex="<?php echo tab_index() ?>"><?= lang('settings.email.test.title') ?></legend>

	<div class="fieldset-description">
		<p><small><?= lang('settings.email.test.hint') ?></small></p>
	</div>

	<?php echo form_open('settings/email/test', array('class' => 'cssform-stacked')); ?>

	<p class="input-group">
		<?php
		echo form_label(lang('settings.email.test.send_to'), 'test_to');
		echo form_input([
			'name' => 'test_to',
			'id' => 'test_to',
			'size' => '30',
			'maxlength' => '255',
			'tabindex' => tab_index(),
			'value' => set_value('test_to', $this->userauth->user->email ?? '', FALSE),
		]);
		?>
	</p>
	<?php echo form_error('test_to') ?>

	<?php
	echo form_submit([
		'value' => lang('settings.email.test.button'),
		'tabindex' => tab_index(),
	]);
	?>

	<?= form_close() ?>

</fieldset>
