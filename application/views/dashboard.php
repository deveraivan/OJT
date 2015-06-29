<html>
    <head><title></title></head>
    <body>
        <div id="container">
            <div id="dashboard">
                <?php 
                      echo form::open_fieldset(array('for' => 'dash_field',
                                                   'class' => ''));  
                      echo "<h1> Welcome</h1>";
                      echo html::anchor('../admin/supply', 'view Supply Here');
                      echo "<br>";
                      echo html::anchor('../admin/supply', 'view Users Here');
                      echo "<br>";
                      echo html::anchor('../admin/supply', 'view Requests Here');  
                      echo form::close_fieldset();?>
            </div>
        </div>
    </body>
</html>