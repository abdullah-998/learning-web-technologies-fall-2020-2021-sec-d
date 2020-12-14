<?php
    session_start();
    if($_SESSION['flag'])
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <form>
    <fieldset>
        <legend>CHANGE PASSWORD</legend>
        Current Password<br>
        <input type="password" id="opass" name="oldpass"><br>
        New Password<br>
        <input type="password" id="pass" name="pass"><br>
        Retype New Password<br>
        <input type="password" id="cpass" name="cpass"><br><hr>
        <input type="submit" name="submit" value="Change" onclick="chngpass()"> <a href="Home.php">Home</a>
    </fieldset>  
    </form>
    <div id="info"></div>
</body>
</html>
<?php
    }
    else
    {
        header('location: log.php');
    }
?>