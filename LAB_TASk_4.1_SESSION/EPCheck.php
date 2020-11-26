<?php
    session_start();

    if($_REQUEST['submit'])
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $day=$_REQUEST['day'];
        $month=$_REQUEST['month'];
        $year=$_REQUEST['year'];
        $gender=$_REQUEST['gender'];

        if(!$_REQUEST['name']=="")
        {
            setcookie('name',$name,time()+3600,'/');
            header('location: EProfile.php?msg=change');
        }
        if(!$_REQUEST['email']=="")
        {
            setcookie('email',$email,time()+3000,'/');
            header('location: EProfile.php?msg=change');
        }
        if(!$_REQUEST['gender']=="")
        {
            setcookie('gender',$gender,time()+3000,'/');
            header('location: EProfile.php?msg=change');
        }
        if(!$_REQUEST['day']=="")
        {
            setcookie('day',$day,time()+3000,'/');
            header('location: EProfile.php?msg=change');
        }
        if(!$_REQUEST['month']=="")
        {
            setcookie('month',$month,time()+3000,'/');
            header('location: EProfile.php?msg=change');
        }
        if(!$_REQUEST['year']=="")
        {
            setcookie('year',$year,time()+3000,'/');
            header('location: EProfile.php?msg=change');
        }
    }
    else
    {
        header('locaton: Log.php');
    }
?>