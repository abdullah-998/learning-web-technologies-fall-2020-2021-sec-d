<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<form method="POST" >
		<fieldset>
            <legend><b>NAME</b></legend>
            <input type="text" name="sname"> <br>
            <hr>
		    <input type="submit" name="submit">
        </fieldset>
    </form>
    <?php
		
    if(isset($_REQUEST['submit']))
    {
		$name = $_REQUEST['sname'];
		echo $name. "<br>";	
	}
    ?>
</body>
</html>