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
                <form action="CPCheck.php" method="POST">
                    <fieldset>
                       <legend>PROFILE PICTURE</legend>
                        Current Password: <input type="password" name="oldpass"><br><br>
                        New Password: <input type="password" name="npass"><br><br>
                        Retype New Password: <input type="password" name="cnpass"><br><hr>
                        <input type="submit" name="submit">
                    </fieldset>
                    <?php
                        if(isset($_REQUEST['msg']))
                        {
                            if($_REQUEST['msg']=='change')
                            {
                                echo "Password changed...";
                            }
                            if($_REQUEST['msg']=='null')
                            {
                                echo "Null submission...";
                            }
                            if($_REQUEST['msg']=='pass_wrong')
                            {
                                echo "Wrong password...";
                            }
                            if($_REQUEST['msg']=='pass')
                            {
                                echo "Password did not match...";
                            }
                        }
                    ?>
                </form>
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