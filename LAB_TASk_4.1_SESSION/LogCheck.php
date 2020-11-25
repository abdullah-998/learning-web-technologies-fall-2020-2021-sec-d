<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {
        $uname=$_COOKIE['uname'];
        $pass=$_COOKIE['pass'];

        $sname=$_REQUEST['name'];
        $spass=$_REQUEST['pass'];


        if(!$sname=="" and !$spass=="")
        {
            if($uname==$sname and $pass==$spass)
            {
                $_SESSION['flag']=true;
                header("location: Dashboard.php");
            }
            else
            {
                header("location: Log.php?msg=match");
            }
        }
        else
        {
            header('location: Log.php?msg=null');
        }
    }
    else
    {
        header('location: Log.php');
    }
?>