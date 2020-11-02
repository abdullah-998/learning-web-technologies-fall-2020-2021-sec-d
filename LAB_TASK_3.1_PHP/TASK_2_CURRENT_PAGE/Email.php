<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<form method="POST" >
		<fieldset>
            <legend><b>EMAIL</b></legend>
            <input type="email" name="ename"> <br>
            <hr>
		    <input type="submit" name="submit">
        </fieldset>
    </form>
    <?php
		
    if(isset($_REQUEST['submit']))
    {
        if($_REQUEST['ename']!=null)
        {
            $email = $_REQUEST['ename'];
		echo "email:".$email. "<br>";
        }
        else
        {
            echo "null";
        }	
    }
    ?>
</body>
</html>