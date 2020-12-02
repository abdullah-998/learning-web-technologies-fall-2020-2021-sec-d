<?php
    session_start();
    require_once('../models/employeeService.php');
    $users=getAllEmployee();

    if(isset($_COOKIE['type']))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="700px">
                <?php include_once('header.php');?> | <a href="../controller/logout.php">Logout</a> | <a href="Home.php">Home</a>
            </td>
        </tr>
        <tr>
            <td height="500px" width="700px">
                <h1 align='center'>ALL USERS</h1>
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Contact Number</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                <?php 
                    for($i=0;$i<count($users);$i++)
                    {
                ?>
                <tr align="center">
                    <td><?=$users[$i]['id']?></td>
                    <td><?=$users[$i]['username']?></td>
                    <td><?=$users[$i]['name']?></td>
                    <td><?=$users[$i]['pass']?></td>
                    <td><?=$users[$i]['contact number']?></td>
                    <td><?=$users[$i]['type']?></td>
                    <td>
                        <a href="EditUser.php?id='<?$users[$i]['id']?>'">EDIT</a> | 
                        <a href="DeleteUser.php?id='<?$users[$i]['id']?>'"> DELETE</a>
                    </td>
                </tr>
                <?php } ?>
                </table>
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