<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {
        $name=$_REQUEST['name'];
        $pass=$_REQUEST['pass'];
        if($name=="" || $pass=="")
        {
            header('location: Log.php?msg=null');
        }
        if($name==$pass)
        {
            $_SESSION['name']=$name;
            header("location: Dashborad.php?msg=ok");
        }
        else
        {
            header("location: Log.php?msg=match");
        }
    }
    else
    {
        header('location: Log.php');
    }
?>