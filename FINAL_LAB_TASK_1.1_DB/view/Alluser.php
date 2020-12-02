<?php
    session_start();
    require_once('../models/userService.php');
    $users=getAllUser();

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
                        <th width='50px'>ID</th>
                        <th width='140px'>User Name</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th width='70px'>Type</th>
                        <th width='70px'>Status</th>
                        <th width='200px'>Action</th>
                    </tr>
                <?php 
                    for($i=0;$i<count($users);$i++)
                    {
                ?>
                <tr align="center">
                    <td><?=$users[$i]['id']?></td>
                    <td><?=$users[$i]['username']?></td>
                    <td><?=$users[$i]['password']?></td>
                    <td><?=$users[$i]['email']?></td>
                    <td><?=$users[$i]['type']?></td>
                    <?php
                        if($users[$i]['active']==1)
                        {
                            echo '<td>Active</td>';
                        }
                        else
                        {
                            echo '<td>Deleted</td>';
                        }
                    ?>
                    <td>
                        <a href="EditUser.php?id=<?= $users[$i]['id']  ?>"> EDIT</a>
                        <?php 
                            if($users[$i]['active']==1)
                            echo ' | <a href="DeleteUser.php?id="'.$users[$i]['id'].'"> DELETE</a>';
                        ?>
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