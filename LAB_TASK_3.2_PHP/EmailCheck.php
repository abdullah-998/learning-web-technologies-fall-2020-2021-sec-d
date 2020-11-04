<?php
	session_start();

	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['email'];
        

		if(empty($email))
		{
			header('location: login.php?msg=null');
        }
        if(strpos($email,'@')=== false && strpos($email,'.')===false)
        {
            header('location: Email.php?msg=invalid');
        }
		else
		{
            $_SESSION['email']=$email;
            header('location: Email.php?msg=ok');
		}

	}
	else
	{
		header('location: login.php');
	}
	

?>
