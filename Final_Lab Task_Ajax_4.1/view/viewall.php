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
    <button onclick="alluser()">See All User</button>
    <div id="info"></div>
    <div>
        <a href="home.php">Go Home</a>
    </div>
    <script src="../controller/script.js"></script>
</body>
</html>
<?php
    }
    else
    {
        header('location: log.php');
    }
?>