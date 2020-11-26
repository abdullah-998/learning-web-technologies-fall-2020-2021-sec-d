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
    <title>Home</title>
</head>
<body>
    <fieldset>
        <h1>Welcome <?= $_SESSION['name'];?></h1>
        <a href="Profile.php">Profile</a><br>
        <a href="cPass.php">Change Password</a><br>
        <?php
            if($_SESSION['type']=='Admin')
            {
                echo '<a href="viewall.php">View User</a>';
            }
        ?>
        <a href="logout.php">Log out</a>
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