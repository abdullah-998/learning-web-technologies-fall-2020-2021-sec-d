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
                <img src="logo.png" height="60px" width="100px">
                <a href="Home.php">Home|</a>
                <a href="Log.php">Login|</a>
                <a href="Reg.php">Registration</a>
            </td>
        </tr>
        <tr>
            <?php
                if($_COOKIE['flag'])
                {
                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg']=='null')
                        {
                            echo "one or more input value is missing..";
                        }
                        if($_REQUEST['msg']=='pmatch')
                        {
                            echo "password not matching..";
                        }
                        if($_REQUEST['msg']=='date')
                        {
                            echo "invalid date format";
                        }
                    }
                }
            ?>
            <td height="500px" width="700px" align="left">
                <form action="RegCheck.php" method="POST">
                    <fieldset>
                        <legend><b>REGISTRATION</b></legend>
                        Name <input type="text" name="name"><hr>
                        Email <input type="email" name="email"><hr>
                        Username <input type="text" name="uname"><hr>
                        Password <input type="password" name="pass"><hr>
                        Confirm Password <input type="password" name="cpass"><hr>
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" value="Male" name="gender"> Male
                            <input type="radio" value="Female" name="gender"> Female
                            <input type="radio" value="Others" name="gneder"> Others
                        </fieldset><hr>
                        <fieldset>
                            <legend>Date of birth</legend>
                            <input type="tel" name="day" size="1">/
                            <input type="tel" name="month" size="1">/
                            <input type="tel" name="year" size="1">
                            <i>(dd/mm/yyyy)</i>
                        </fieldset><hr>
                        <input type="submit" name="submit">
                        <input type="reset" name="reset">
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td height="60px" width="700px" align="center">Copyrignt &#169 2017</td>
        </tr>
    </table>
</body>
</html>