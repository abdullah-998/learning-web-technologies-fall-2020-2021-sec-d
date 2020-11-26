<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="RegCheck.php" method="POST">
        <fieldset>
            <legend><b>REGISTRATRION</b></legend>
            Id<br>
            <input type="text" name="id"><br><br>
            Password<br>
            <input type="password" name="pass"><br><br>
            COnfirm Password<br>
            <input type="password" name="cpass"><br><br>
            Name<br>
            <input type="text" name="name"><br><br>
            <hr>User Type<hr>
                <input type="checkbox" name="type" value="User">User
                <input type="checkbox" name="type" value="Admin">Admin
            <hr>
            <input type="submit" name="submit"> 
            <a href="log.php">Sign in</a>
        </fieldset>
        <?php
            if(isset($_REQUEST['msg']))
            {
                if($_REQUEST['msg']=='ok')
                {
                    echo 'account have created succesfully..';
                }
                if($_REQUEST['msg']=='id')
                {
                    echo 'The id allrady exist..';
                }
                if($_REQUEST['msg']=='short_name')
                {
                    echo "name is invalid";
                }
                if($_REQUEST['msg']=='pshort')
                {
                    echo 'Please chose password size greater than 8 charcter';
                }
                if($_REQUEST['msg']=='pmatch')
                {
                    echo 'password not match';
                }
                if($_REQUEST['msg']=='null')
                {
                    echo 'null submission';
                }
            }
        ?>
    </form>
</body>
</html>