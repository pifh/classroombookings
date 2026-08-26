<p><?= lang('auth.reset.intro') ?></p>
<br>

<?php

echo form_open(current_url(), array('class' => 'cssform', 'id' => 'reset_password'));

?>


<fieldset>

	<p>
	  <label for="password1"><?= lang('user.field.password') ?></label>
	  <?php
		echo form_password(array(
			'name' => 'password1',
			'id' => 'password1',
			'size' => '20',
			'tabindex' => tab_index(),
			'value' => '',
		));
		?>
	</p>
	<p class="hint"><?= lang('user.field.password.hint') ?></p>
	<?php echo form_error('password1'); ?>

	<p>
	  <label for="password2"><?= lang('user.field.password2') ?></label>
	  <?php
		echo form_password(array(
			'name' => 'password2',
			'id' => 'password2',
			'size' => '20',
			'tabindex' => tab_index(),
			'value' => '',
		));
		?>
	</p>
	<?php echo form_error('password2'); ?>

</fieldset>


<?php
$this->load->view('partials/submit', array(
	'submit' => array(lang('auth.reset.submit'), tab_index()),
));

echo form_close();
