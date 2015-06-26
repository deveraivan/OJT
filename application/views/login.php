<html>
    <body>
        <div id="container">
            <div id="login">
                <?php echo form::open('login'); ?>
                <fieldset>
                        <p><input type="text" id="username" required value="Username"></p>
                        <p><input type="password" id="password" required value="Password"></p>
                        <p><input type="submit" id="login" value="Login"></p>
                </fieldset>
                <?php echo form::close(); ?>
            </div>
        </div>
    </body>
</html>