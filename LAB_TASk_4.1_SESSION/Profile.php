<?php
    session_start();

    $name=$_COOKIE['name'];

    if($_SESSION['flag'])
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="700px" colspan="2">
                <img src="logo.png" height="60px" width="100px">
                Logged in as <a href="Profile.php"><?php echo $name; ?></a> | 
                <a href="Logout.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td height="400px" width="200px" align="top">
                <b>Account</b><br><hr>
                <ul>
                    <?php include 'sidebar.php'; ?>      
                </ul>    
            </td>

            <td height="300px" width="500px">
                <fieldset>
                    <legend>Profile</legend>
                    <img src="user.png" height="200px" width="200px"><br>
                    <a href="CPic.php">Change</a>
                    <hr><br>
                    Name : <?=$_COOKIE['name']; ?><br><hr>
                    Email : <?= $_COOKIE['email']; ?><br><hr>
                    Gender : <?php echo $_COOKIE['gender']; ?><br><hr>
                    Date of Birth : <?php echo $_COOKIE['day']."/".$_COOKIE['month']."/".$_COOKIE['year']; ?><br><hr>
                    <a href="EProfile.php">Edit Profile</a><br>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td height="60px" width="700px" align="center" colspan="2">Copyrignt &#169 2017</td>
        </tr>
    </table>
</body>
</html>
<?php
    }
    else
    {
        header('location: Log.php');
    }
?>