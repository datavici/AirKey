	<div id='contentLeft'>
	</div>
	<div id='contentRight'>
		<?php
			$attributes = array('id' => 'updateGroup', 'class' => 'inline');
			echo form_open('group/updateGroup', $attributes);
		?>
			<fieldset>
				<legend>Modify Group Name or Description</legend>
				<input type="hidden" name="current_group" value="<?php echo 'changeme'?>">
				<br>
				<label for="new_group">New Group Name: </label>
				<input type="text" name="new_group">
				<label for="moveMembers">Move Members? </label>
				<input type="checkbox" name="moveMembers" value="true">
				<br>
				<label for="group_desc">Group Description: </label><br>
				<textarea name="group_desc"></textarea>
				<p><input type="submit" value="submit"></p>
			</fieldset>
		</form>
	</div>
