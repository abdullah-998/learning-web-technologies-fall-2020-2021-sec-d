<?php
    session_start();
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
               <form action="../controller/DeleteCheck.php">
                   <fieldset>
                        <?php 
                            if(isset($_REQUEST['msgd']))
                            {

                            }
                            else
                            {
                                echo '<legend>Are you sure you want to <b>DELETE</b>? </legend>';
                                $id = $_REQUEST['id'];
                                $_SESSION['id']=$id;
                                echo '<b>USER ID = '.$id.'</b><br><hr>';
                                echo '<input type="submit" name="submit" value="Delete Account">';
                            }
                        ?> 
                        <a href="Alluser.php">Go Back</a>
                   </fieldset>
                   <?php
                        if(isset($_REQUEST['msgd']))
                        {
                            if($_REQUEST['msgd']=='deleted')
                            {
                                echo 'Account has been deleted successfully..';
                            }
                            if($_REQUEST['msgd']=='wrong')
                            {
                                echo 'Something went wrong.Please try again..';
                            }
                        }
                    ?>
               </form>
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