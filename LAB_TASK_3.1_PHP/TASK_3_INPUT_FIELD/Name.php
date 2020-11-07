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
<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<form method="POST" >
		<fieldset>
            <legend><b>NAME</b></legend>
            <input type="text" name="sname" value="<?php		
    if(isset($_REQUEST['submit']))
    {
        if($_REQUEST['sname']!=null)
        {
            $name = $_REQUEST['sname'];
		    echo htmlentities($name); 	
        }
        else
        {
            echo "null";
        }
    }
?>"> <br>
            <hr>
		    <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>