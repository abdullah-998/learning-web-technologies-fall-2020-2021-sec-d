<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="700px" colspan="2">
                <img src="logo.png" height="60px" width="100px">
                Logged in as <a href="Profile.php"> <?php if(isset($_REQUEST['msg'])){ if($_REQUEST['msg']=='ok') echo $_SESSION['name'];} ?></a>
                <a href="Log.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td height="400px" width="200px" align="top">
                <b>Account</b><br><hr>
                <ul>
                    <li><a href="Dashboard.php">Dashboard</a><br></li>
                    <li><a href="Profile.php">View Profile</a><br></li>
                    <li><a href="EProfile.php">Edit Profile</a><br></li>
                    <li><a href="CPic.php">Change Profile Picture</a><br></li>
                    <li><a href="CPass.php">Change Password</a><br></li>          
                    <li><a href="Log.php">Log out</a><br></li>          
                </ul>    
            </td>

            <td height="300px" width="500px">
                <h1>Welcome <?php if(isset($_REQUEST['msg'])){ if($_REQUEST['msg']=='ok') echo $_SESSION['name'];} ?></h1>
            </td>
        </tr>
        <tr>
            <td height="60px" width="700px" align="center" colspan="2">Copyrignt &#169 2017</td>
        </tr>
    </table>
</body>
</html>