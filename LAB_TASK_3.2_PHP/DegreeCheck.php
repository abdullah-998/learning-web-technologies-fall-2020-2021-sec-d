<?php
	session_start();

    if(isset($_REQUEST['submit']))
    {
        $degree = $_REQUEST['degree'];
        if($degree==null)
        {
            header('location: Degree.php?msg=null');
        }
        else
        {
            $_SESSION['degree']=$degree;
            header('location: Degree.php?msg=ok');
        }

    }

?>
