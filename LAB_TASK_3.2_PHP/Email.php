<?php
    session_start();
	if(isset($_REQUEST['msg']))
	{
		if($_REQUEST['msg'] == 'null')
		{
			echo "null submission...";
		}

		if($_REQUEST['msg'] == 'invalid')
		{
			echo "invalid email";
        }
        if($_REQUEST['msg']=='ok')
        {
            echo "your mail is ".$_SESSION['email'];
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<form method="POST" action="EmailCheck.php">
		<fieldset>
            <legend><b>EMAIL</b></legend>
            <input type="email" name="email"> <br>
            <hr>
		    <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>