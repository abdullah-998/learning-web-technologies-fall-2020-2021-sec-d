<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form action="../controller/logCheck.php" method="POST">
        <fieldset>
            <legend>LOGIN</legend>
            User ID<br>
            <input type="text" name="id"><br>
            Password<br>
            <input type="password" name="pass"><br><hr>
            <input type="submit" name="submit">
            <a href="Reg.php">Sign Up</a><br>
        </fieldset>
        <?php
            if(isset($_REQUEST['msg']))
            {
                if($_REQUEST['msg']=='null')
                {
                    echo 'null submission';
                }
                if($_REQUEST['msg']=='inv')
                {
                    echo 'invalid user id or password..';
                }
            }
        ?>

    </form>
    <div id="info"></div>
</body>
</html>