<?php
    session_start();
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        $_SESSION['id']=$id;
    }
    if(isset($_COOKIE['type']))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT A USER</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="700px">
                <?php include_once('header.php');?> | <a href="../controller/logout.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td height="500px" width="700px">
                <form action="../controller/EditCheck.php" method="POST">
                    <fieldset>
                        <legend><b>Update Info</b></legend>
                        Username&nbsp;&nbsp;&nbsp;:<input type="text" name="uname"><hr>
                        Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="email" name="email"> <button title="sample@example.com"><b>i</b></button><hr>
                        <input type="submit" name="submit"><br>
                        <?php 
                            if(isset($_REQUEST['msgd']))
                            {
                                if($_REQUEST['msgd']=='wrong')
                                {
                                    echo 'Something went wrong.Please try again..';
                                }
                                if($_REQUEST['msgd']=='updated')
                                {
                                    echo 'Account has updated succesfully..';
                                }
                                if($_REQUEST['msgd']=='null')
                                {
                                    echo 'Please enter all values properly..';
                                }

                            }
                        ?>
                    </fieldset>
                </form>
                <form action="../controller/ChangePass.php" method="POST">
                    <fieldset>
                        <legend><b>Change Password</b></legend>
                        Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="password" name="pass"><hr>
                        Confirm Password&nbsp;&nbsp;&nbsp;:<input type="password" name="cpass"><hr>
                        <input type="submit" name="submit"><br>
                        <?php 
                            if(isset($_REQUEST['msg']))
                            {
                                if($_REQUEST['msg']=='wrong')
                                {
                                    echo 'Something went wrong.Please try again..';
                                }
                                if($_REQUEST['msg']=='updated')
                                {
                                    echo 'Password has changed succesfully..';
                                }
                                if($_REQUEST['msg']=='null')
                                {
                                    echo 'Please enter all values properly..';
                                }
                                if($_REQUEST['msg']=='match')
                                {
                                    echo 'Password did not match..';
                                }
                                if($_REQUEST['msg']=='shortpass')
                                {
                                    echo 'Please chose a password that is greater than 7 character..';
                                }

                            }
                        ?>
                    </fieldset>
                </form>
                <a href="AllUser.php">Go Back</a>
            </td>
        </tr>
        <tr>
            <td height="60px" width="700px" align="center">
                <?php include_once('footer.php');?>
            </td>
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