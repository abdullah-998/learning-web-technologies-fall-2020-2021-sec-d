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
    <form method="POST" action="../controller/RegCheck.php">
        <fieldset>
            <legend><b>REGISTRATRION</b></legend>
            Id<br>
            <input type="text" id="id" name="id" onkeyup="ajax()"><br><br>
            Password<br>
            <input type="password" id="pass" name="pass"><br><br>
            COnfirm Password<br>
            <input type="password" id="cpass" name="cpass" onkeydown="ajax2()"><br><br>
            Name<br>
            <input type="text" id="name" name="name"><br><br>
            <hr>User Type<hr>
                <input type="checkbox" name="type" id="type" value="User">User
                <input type="checkbox" name="type" id="type" value="Admin">Admin
            <hr>
            <input type="submit" name="submit" onclick="insert()"> 
            <a href="log.php">Sign in</a>
        </fieldset>
    </form>
    <div id="info"></div>
    <?php
        if(isset($_REQUEST['msg']))
        {
            if($_REQUEST['msg']=='ok')
            {
                echo 'Account created succesfully..';
            }
            else
            {
                echo 'Something went wrong..';
            }
        }
    ?>
    <script src="../controller/script.js"></script>
</body>
</html>