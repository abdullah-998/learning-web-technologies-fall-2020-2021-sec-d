<?php
    session_start();
    if($_SESSION['flag'])
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prfile</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td colspan="3"><h3>Users</h3></td>
        </tr>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>USER Type</td>
        </tr>
        <?php
            $file=fopen('user.txt','r');
            while($data=fgets($file))
            {
                $user1=explode('|',$data);
                echo'<tr>
                <td>'.$user1[0].'</td>
                <td>'.$user1[2].'</td>
                <td>'.$user1[3].'</td>
                </tr>';
            }
            fclose($file);
        ?>
        <tr>
            <td colspan="3"><a href="Home.php">Back</a></td>
        </tr>
    </table>
</body>
</html>
<?php
    }
    else
    {
        header('location: log.php');
    }
?>