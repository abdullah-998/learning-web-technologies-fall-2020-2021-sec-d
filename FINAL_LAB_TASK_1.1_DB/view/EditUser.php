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
    <title>DELETE A USER</title>
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
                        <input type="submit" name="submit">
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

                            }
                        ?>
                    </fieldset>
                </form>
                <form action="../controller/ChangePass.php" method="POST">
                    <fieldset>
                        <legend><b>Change Password</b></legend>
                        Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="password" name="pass"><hr>
                        Confirm Password&nbsp;&nbsp;&nbsp;:<input type="password" name="cpass"><hr>
                        <input type="submit" name="submit">
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