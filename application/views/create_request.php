
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php echo form::open('request/request_supply') ?>
		<fieldset>
			<legend>Request Information</legend>
			<fieldset>
				<?php echo form::label('date_requested','Date Requested: '); ?>		     		
				<input type="date" id="date_requested" name="date_requested"><br/>
	            <?php echo form::label('date_needed','Date Needed: '); ?>
	            <input type="date" id="date_needed" name="date_needed"><br/>
	     		<?php echo form::label('delivery_address','Delivery Address: '); ?>	     		
	     		<?php echo form::input('delivery_address'); ?><br/>
	     		<?php echo form::submit('submit','submit'); ?>
			</fieldset>
		</fieldset>
		<?php form::close() ?>		
	</body>
</html>
