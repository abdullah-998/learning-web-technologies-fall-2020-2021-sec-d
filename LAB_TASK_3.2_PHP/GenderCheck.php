<?php
	session_start();

	if(isset($_REQUEST['submit'])){
		$gender = $_REQUEST['gender'];

		if(empty($gender) && $gender!="Male" && $gender!="Female" && $gender!="Others")
		{
			header('location: Gender.php?msg=null');
		}
		else
		{
            $_SESSION['gender']=$gender;
            header('location: Gender.php?msg=ok');
		}

    }

?>
