<?php
    session_start();
	if(isset($_REQUEST['msg']))
	{
		if($_REQUEST['msg'] == 'invalid')
		{
			echo "invalid Date of Birth...";
        }
        
        if($_REQUEST['msg']=='ok')
        {
            echo "Your DOB:".$_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOB</title>
</head>
<body>
    <form method="post" action="DOBCheck.php">
        <fieldset>
            <legend><b>DATE OF BIRTH</b></legend>
            <!--SET UP FORMAT-->
            <pre>  dd        mm      yyyy<br></pre>
            <input type="tel" size="2" name="day">/
            <input type="tel" size="2" name="month">/
            <input type="tel" size="4" name="year">
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>