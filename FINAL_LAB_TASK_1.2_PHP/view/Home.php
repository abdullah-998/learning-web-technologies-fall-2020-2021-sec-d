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
    <title>HOME</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="700px">
                <?php include_once('header.php');?> | <a href="../controller/logout.php">Logout</a> |
                <?php if($_COOKIE['type']!='Employee')
                {
                    echo '<a href="Reg.php">Registration</a>';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td height="500px" width="700px">
                <?php 
                    if($_COOKIE['type']=='Employee')
                    {
                        echo '<h1>Welcome, Employee</h1>';
                    }
                    else
                    {
                        echo '<h1>Welcome, Admin</h1>';
                        echo '<a href="Alluser.php">All Users</a>';
                    }
                ?>
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