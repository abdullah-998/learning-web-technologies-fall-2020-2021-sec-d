<?php
    if(isset($_REQUEST['submit']))
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $uname=$_REQUEST['uname'];
        $pass=$_REQUEST['pass'];
        $cpass=$_REQUEST['cpass'];
        $day=$_REQUEST['day'];
        $month=$_REQUEST['month'];
        $year=$_REQUEST['year'];
        $gender=$_REQUEST['gender'];

        setcookie('flag',true,time()+3600,'/');
        if($name=="" || $email=="" || $uname=="" || $pass=="" || $cpass=="" || $day=="" || $month =="" || $year=="")
        {
            header('location: Reg.php?msg=null');
        }
        if($pass!=$cpass)
        {
            header('location: Reg.php?msg=pmatch');
        }
        if($day>31 || $day <0 || $month<0 || $month>12 || $year>2020 || $year<1910)
        {
            header('location: Reg.php?msg=date');
        }
        else
        {
            setcookie('name',$name,time()+3600,'/');
            setcookie('email',$email,time()+3600,'/');
            setcookie('uname',$uname,time()+3600,'/');
            setcookie('pass',$pass,time()+3600,'/');
            setcookie('cpass',$cpass,time()+3600,'/');
            setcookie('day',$day,time()+3600,'/');
            setcookie('month',$month,time()+3600,'/');
            setcookie('year',$year,time()+3600,'/');
            setcookie('gender',$gender,time()+3600,'/');

            header('location: log.php?msg=ok');
        }

    }
    else
    {
        header('location: Reg.php');
    }
?>