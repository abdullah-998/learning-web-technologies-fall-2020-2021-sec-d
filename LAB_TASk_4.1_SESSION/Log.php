<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="700px">
                <?php include 'header.php' ?>
            </td>
        </tr>
        <tr>
            <?php
            ?>
            <td height="200px" width="700px" align="left">
                <form action="LogCheck.php" method="POST">
                    <fieldset>
                        <legend>Log in</legend>
                        Username: <input type="text" name="name"><br><br>
                        Password: <input type="password" name="pass"><br>
                        <hr>
                        <input type="checkbox">remember me?<br>
                        <input type="submit" name="submit">
                        <a href="Cpass.php">Change password?</a>
                    </fieldset>
                    <?php
                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg']=='null')
                        {
                            echo "null submission..";
                        }
                        if($_REQUEST['msg']=='match')
                        {
                            echo "pasword or username is not valid..";
                        }
                    }
                ?>
                </form>
            </td>
        </tr>
        <tr>
            <td height="60px" width="700px" align="center">Copyrignt &#169 2017</td>
        </tr>
    </table>
</body>
</html>
