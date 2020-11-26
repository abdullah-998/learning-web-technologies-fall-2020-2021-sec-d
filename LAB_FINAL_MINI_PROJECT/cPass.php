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
    <fieldset>
        <legend>CHANGE PASSWORD</legend>
        Current Password<br>
        <input type="password" name=""><br>
        New Password<br>
        <input type="password" name=""><br>
        Retype New Password<br>
        <input type="password" name=""><br><hr>
        <input type="submit" name="submit" value="Change"> <a href="Home.php">Home</a>
    
    </fieldset>  
</body>
</html>
<?php
    }
    else
    {
        header('location: log.php');
    }
?>