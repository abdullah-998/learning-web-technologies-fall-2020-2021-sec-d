<?php
    session_start();
	if(isset($_REQUEST['msg']))
	{
		if($_REQUEST['msg'] == 'null')
		{
			echo "Please select your blood group...";
        }
        
        if($_REQUEST['msg']=='ok')
        {
            foreach($_SESSION['bg'] as $bg)
            {
                echo "Your blood Group is ".$bg;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>
<body>
    <form method="post" action="BloodGroupCheck.php">
        <fieldset>
            <legend><b>BLOOD GROUP</b></legend>
            <select name="bg[]">
                <option value=""></option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="O+">O+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
                <option value="O-">O-</option>
            </select>
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>