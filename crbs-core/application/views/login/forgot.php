<p><?= lang('auth.forgot.intro') ?></p>
<br>

<?php

echo $this->session->flashdata('auth');

echo form_open(current_url(), array('class' => 'cssform', 'id' => 'forgot'));

?>


<fieldset>

	<p>
	  <label for="username" class="required"><?= lang('user.field.username') ?></label>
	  <?php
		$value = set_value('username', '', FALSE);
		echo form_input(array(
			'name' => 'username',
			'id' => 'username',
			'size' => '20',
			'maxlength' => '255',
			'tabindex' => tab_index(),
			'value' => $value,
		));
		?>
	</p>
	<?php echo form_error('username'); ?>

</fieldset>


<?php
$this->load->view('partials/submit', array(
	'submit' => array(lang('auth.forgot.submit'), tab_index()),
));

echo form_close();
?>

<p><a href="<?= site_url('login') ?>"><?= lang('auth.log_in') ?></a></p>
