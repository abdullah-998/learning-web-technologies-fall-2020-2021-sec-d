<?php
    session_start();
	if(isset($_REQUEST['msg']))
	{
		if($_REQUEST['msg'] == 'null')
		{
			echo "must select atleast one degree...";
        }
        
        if($_REQUEST['msg']=='ok')
        {
            echo "your Degree's are,<br>";
            foreach($_SESSION['degree'] as $deg)
            {
                echo $deg."<br>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>
<body>
    <form method="post" action="DegreeCheck.php">
        <fieldset>
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" value="SSC" name="degree[]">SSC
            <input type="checkbox" value="HSC" name="degree[]">HSC
            <input type="checkbox" value="BSc" name="degree[]">BSc
            <input type="checkbox" value="MSc" name="degree[]">MSc
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>