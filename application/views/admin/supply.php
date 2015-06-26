<div>
	<div id = "add_facility">
		<!--<a href=""><img src="media/images/add.png"></a> href is for the controller location-->
	</div>
	<div id = "table">
		<table class = "table_hovered">
			<tr>
				<th>ID</th>
				<th>Item</th>
				<th>Hardware Type</th>
				<th>Manufacturer</th>
				<th>Available Stocks</th>
				<th>price</th>
			</tr>
		<?php
			foreach($supplies_list as $supply)
			{
				echo "<tr>";
				echo "<td>" . $supply->id . "</td>";
				echo "<td>" . $supply->item . "</td>";
				echo "<td>" . $supply->hardware_type . "</td>";
				echo "<td>" . $supply->manufacturer . "</td>";
				echo "<td>" . $supply->number_of_supply . "</td>";
				echo "<td>" . $supply->price . "</td>";
				echo "</tr>";
				
			}
		?>
		</table>
	</div>
</div>