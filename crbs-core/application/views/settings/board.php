<p><?= lang('settings.board.intro') ?></p>

<?php

echo form_open(current_url(), array('class' => 'cssform'));

?>

<?php foreach ($rooms_by_group as $group_key => $rooms): ?>

	<fieldset>
		<legend>
			<?php
			$group_name = ($group_key !== 'ungrouped' && isset($room_groups[$group_key]))
				? $room_groups[$group_key]->name
				: lang('room_group.rooms.ungrouped');
			echo html_escape($group_name);
			?>
		</legend>

		<?php foreach ($rooms as $room): ?>
			<?php
			$field_id = 'room_' . $room->room_id;
			$checked = in_array((int) $room->room_id, $selected_room_ids, TRUE);
			?>
			<p>
				<?php
				$input = form_checkbox([
					'name' => 'room_ids[]',
					'id' => $field_id,
					'value' => $room->room_id,
					'checked' => $checked,
					'tabindex' => tab_index(),
				]);
				echo "<label for='{$field_id}' class='ni'>{$input} " . html_escape($room->name) . "</label>";
				?>
			</p>
		<?php endforeach; ?>

	</fieldset>

<?php endforeach; ?>

<?php if (empty($rooms_by_group)): ?>
	<p class="hint"><?= lang('settings.board.no_rooms') ?></p>
<?php endif; ?>

<?php
$this->load->view('partials/submit', array(
	'submit' => array(lang('app.action.save'), tab_index()),
));

echo form_close();
