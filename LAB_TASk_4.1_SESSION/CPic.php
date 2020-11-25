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
                        <?php
                            if(isset($_REQUEST['msg']))
                            {
                                echo '<img src="'.'$_SESSION["iname"]'.'" height="200px" width="200px"><br><br>';
                            }
                            else
                            {
                                echo '<img src="user.png" height="200px" width="200px"><br><br>';
                            }
                        ?>    
                        <input type="file" name="img"><br><hr>
                        <input type="submit" name="submit">
                    </fieldset>
                    <?php
                        if(isset($_REQUEST['msg']))
                        {
                            if($_REQUEST['msg']=='change')
                            {
                                echo "Save changed...";
                            }
                            if($_REQUEST['msg']=='wrong')
                            {
                                echo "Something went wrong...";
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