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
<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<form method="POST" >
		<fieldset>
            <legend><b>EMAIL</b></legend>
            <input type="email" name="ename" value="<?php
		
        if(isset($_REQUEST['submit']))
        {
            if($_REQUEST['ename']!=null)
            {
                $email = $_REQUEST['ename'];
                 echo htmlentities($email);
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