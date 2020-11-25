<?php
    session_start();
    if($_SESSION['flag'])
    {
        setcookie('uname',$uname,time()-3600,'/');
        setcookie('pass',$pass,time()-3600,'/');
        setcookie('name',$name,time()-3600,'/');
        setcookie('day',$day,time()-3000,'/');
        setcookie('month',$month,time()-3000,'/');
        setcookie('year',$year,time()-3000,'/');
        setcookie('gender',$gender,time()-3000,'/');
        setcookie('email',$email,time()-3000,'/');
        session_destroy();
        header('location: Log.php');
    }
    else
    {
        header('location: Log.php');
    }
?>