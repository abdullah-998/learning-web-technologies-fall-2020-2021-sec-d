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
            <td colspan="2"><h3>Profile</h3></td>
        </tr>
        <tr>
            <td>ID</td>
            <td><?=$_SESSION['id'];?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?=$_SESSION['name'];?></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><?=$_SESSION['type'];?></td>
        </tr>
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