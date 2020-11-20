<?php
    session_start();

    if(isset($_REQUEST['submit']))
    {
        $name = $_REQUEST['sname'];

        if(!empty($name))
		{
            if($name[0]==" " || $name[0]==1 || $name[0]==0 || $name[0]==2 || $name[0]==3 || $name[0]==4 || $name[0]==5 || $name[0]==6 || $name[0]==7 || $name[0]==8 || $name[0]==9)
            {
                header('location: Name.php?msg=invalid');
            }
            
            if(strlen($name)<2)
            {
                header('location: Name.php?msg=invalid');
            }
            if(!$name[0]==" " || !$name[0]==1 || !$name[0]==0 || !$name[0]==2 || !$name[0]==3 || !$name[0]==4 || !$name[0]==5 || !$name[0]==6 || !$name[0]==7 || !$name[0]==8 || !$name[0]==9)
            {
                $_SESSION['name']=$name;
                header('location: Name.php?msg=ok');
            }
        }
        else
        {
            header('location: Name.php?msg=null');
        }
    }
    else
    {
        header('location: Name.php');
    }

?>
