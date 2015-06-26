<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php echo form::open('user/create_user'); ?> 
		<?php echo form::open_fieldset(array('id' => 'form_field'));?><br/>
			<?php echo form::open_fieldset(array('id' => 'acct_field'));?><br/>
			<?php echo form::legend('Account Information',array('id' => 'acct_legend'));?>
				<?php echo form::label('label1','Username: ');?>
				<?php echo form::input('username');?><br/>
				<br/>
				<?php echo form::label('label2', 'Password: ');?>
				<?php echo form::password('password','00000');?><br/>
				<br/>
			<?php echo form::close_fieldset();?><br/>		
	
			<?php echo form::open_fieldset(array('id' => 'user_field'));?><br/>
			<?php echo form::legend('User Information',array('id' => 'user_legend'));?>
				<?php echo form::label('label3','First Name: ');?>
				<?php echo form::input('firstname');?><br/>
				<br/>
				<?php echo form::label('label4','Last Name: ');?>
				<?php echo form::input('lastname');?><br/>
				<br/>
				<?php echo form::label('label5','Address: ');?>
				<?php echo form::input('address');?><br/>
				<br/>
				<?php echo form::label('label6','Country: ');?>
				<?php 
					  $sample = array('philippines' => 'Philippines', 'japan' => 'Japan');
					  echo form::dropdown('country',$sample,'philippines'); 
				?><br/>
				<br/>
				<?php echo form::label('label7','Town/City: ');?>
				<?php 
					  $sample2 = array('baguio' => 'Baguio', 'manila' => 'Manila');
					  echo form::dropdown('town_city',$sample2,'baguio'); 
				?><br/>				
				<br/>
				<?php echo form::label('label8','Postal Code: ');?>
				<?php echo form::input('postalcode');?><br/>			
				<br/>
				<?php echo form::close_fieldset();?><br/>
			
			<?php echo form::open_fieldset(array('id' => 'comp_field'));?><br/>
  			<?php echo form::legend('Company Information',array('id' => 'comp_legend'));?>
  				  <?php echo form::label('label9','Company Name: ');?>
  				  <?php echo form::input('comp_name');?><br/>
  				  <br/>
				  <?php echo form::label('label10','Company Address: ');?>
  				  <?php echo form::input('comp_address');?><br/>
  				  <br/>
  				  <?php echo form::label('label11','Contact Number: ');?>
  				  <?php echo form::input('contact_no');?><br/>
  				  <br/>
  				  <?php echo form::label('label12','Email Address: ');?>
  				  <input type="email" id="email" name="email"><br/>
  				  <br/>
			<?php echo form::close_fieldset();?><br/>
			<?php echo form::submit('submit','submit'); ?>
		<?php echo form::close_fieldset();?>
		<?php form::close() ?>		
	</body>
</html>
