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
			echo "invalid name type...";
        }
        if($_REQUEST['msg']=='ok')
        {
            echo "your name is ".$_SESSION['name'];
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<form method="POST" action="NameCheck.php">
		<fieldset>
            <legend><b>NAME</b></legend>
            <input type="text" name="sname"> <br>
            <hr>
		    <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>