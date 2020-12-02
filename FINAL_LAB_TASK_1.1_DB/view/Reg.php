<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="700px">
                <?php include 'header.php'; ?>
            </td>
        </tr>
        <tr>
            <td height="500px" width="700px" align="left">
                <form action="../controller/RegCheck.php" method="POST">
                    <fieldset>
                        <legend><b>REGISTRATION</b></legend>
                        Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<input type="text" name="name"><hr>
                        Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<input type="password" name="pass"><hr>
                        Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<input type="email" name="email"> &nbsp;<button title="sample@example.com"><b>i</b></button><hr>
                        <fieldset>
                            <legend><b>USER TYPE</b></legend>
                            <input type="radio" value="Admin" name="user"> Admin
                            <input type="radio" value="Client" name="user"> Client
                        </fieldset><hr>
                        <input type="submit" name="submit" value="Register">
                        <input type="reset" name="reset">
                    </fieldset>
                </form>
                <?php
                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg']=='null')
                        {
                            echo 'null submission..';
                        }
                        if($_REQUEST['msg']=='inv_name')
                        {
                            echo 'invalid name format..';
                        }                    
                        if($_REQUEST['msg']=='short_pass')
                        {
                            echo 'Password must be 8 character or greater..';
                        }                    
                        if($_REQUEST['msg']=='wrong')
                        {
                            echo 'Sorry, Something went wrong..';
                        }                    
                        if($_REQUEST['msg']=='ok')
                        {
                            echo 'Account have created successfully,Please login..';
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td height="60px" width="700px" align="center"><?php include 'footer.php'; ?></td>
        </tr>
    </table>
</body>
</html>