<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {
        $name=$_COOKIE['name'];
        $pass=$_COOKIE['pass'];

        $sname=$_SESSION['name'];
        $spass=$_SESSION['pass'];
        if($name=="" || $pass=="")
        {
            header('location: Log.php?msg=null');
        }
        if($name==$sname && $pass==$spass)
        {
            $_SESSION['name']=$name;
            header("location: Dashboard.php?msg=log");
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