<?php
	session_start();

    if(isset($_REQUEST['submit']))
    {
        $bg = $_REQUEST['bg'];

        if($bg[0]==null)
        {
            header('location: BloodGroup.php?msg=null');
        }
        else
        {
            if(!empty($bg))
            {
                $_SESSION['bg']=$bg;
                header('location: BloodGroup.php?msg=ok');
            }

        }

    }

?>
