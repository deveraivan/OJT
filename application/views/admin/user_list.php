<div>
	<div id = "add_facility">
		<!--<a href=""><img src="media/images/add.png"></a> href is for the controller location-->
		<?php echo html::anchor('admin/user/show_create','Add New User'); ?>
	</div>
	<div id = "table">
		<table class = "table_hovered">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>User Type</th>
			</tr>
		<?php
			foreach($users_list as $user)
			{
				echo "<tr>";
				echo "<td>" . $user->firstname . "</td>";
				echo "<td>" . $user->lastname . "</td>";
				echo "<td>" . $user->username . "</td>";
				echo "<td>" . $user->name . "</td>";
				echo "</tr>";
				
			}
		?>
		</table>
	</div>
</div>