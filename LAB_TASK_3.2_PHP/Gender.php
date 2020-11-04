<?php
    session_start();
	if(isset($_REQUEST['msg']))
	{
		if($_REQUEST['msg'] == 'null')
		{
			echo "null submission...";
		}
        if($_REQUEST['msg']=='ok')
        {
            echo "your gneder is ".$_SESSION['gender'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>
    <form method="post" action="GenderCheck.php">
        <fieldset>
            <legend><b>Gender</b></legend>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Others">Others
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>