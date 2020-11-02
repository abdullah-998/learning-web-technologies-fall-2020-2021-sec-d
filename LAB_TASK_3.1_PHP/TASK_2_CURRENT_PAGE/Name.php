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
        if($_REQUEST['sname']!=null)
        {
            $name = $_REQUEST['sname'];
		    echo $name. "<br>";	
        }
        else
        {
            echo "null";
        }
	}
    ?>
</body>
</html>