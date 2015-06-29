<html>
    <head><title>login</title></head>
    <body>
        <div id="container">
            <div id="login">
                <?php echo form::open('login/process_login'); 
                      echo form::open_fieldset(array('for' => 'log_field',
                                                   'class' => ''));   ?>
      
                        <h1>Please Sign In </h1>
                        <label>Username:</label>
                        <?php echo form::input('username','username'); ?>
                        <label>Password:</label>
                        <?php echo form::password('password'); ?>
                        <br/>
                        <p><input type="submit" id="submit" value="Login"></p>
                        
                <?php echo form::close_fieldset();
                      echo form::close(); 
                      echo html::anchor('admin/user/show_create', 'sign up')?>
            </div>
        </div>
    </body>
</html>