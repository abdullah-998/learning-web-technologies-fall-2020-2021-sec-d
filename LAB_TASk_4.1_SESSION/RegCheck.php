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
        
        //cookie 
        setcookie('flag',true,time()+3600,'/');
        setcookie('name',$name,time()+3600,'/');
        setcookie('pass',$pass,time()+3600,'/');

        if(!$name=="" and !$email=="" and !$uname=="" and !$pass=="" and !$cpass=="" and !$day=="" and !$month =="" and !$year=="" and !$gender="")
        {
            if(Strlen($name)>2)
            {
                if($pass==$cpass and strlen($pass)>=8)
                {
                    if($day>0 and $day<=31 and $month>0 and $month<=12 and $year<2020 and $year>=1910)
                    {
                        $_SESSION['name']=$name;
                        $_SESSION['pass']=$pass;
                        $_SESSION['email']=$email;
                        $_SESSION['uname']=$uname;
                        $_SESSION['day']=$day;
                        $_SESSION['month']=$month;
                        $_SESSION['year']=$year;
                        $_SESSION['gender']=$gender;

                        header('location: Reg.php?msg=ok');
                    }
                    else
                    {
                        header('location: Reg.php?msg=inv_date');
                    }

                }
                else
                {
                    header('location: Reg.php?msg=pass');
                }

            }
            else
            {
                header('location: Reg.php?msg=inv_name');
            }

        }
        else
        {
            header('location: Reg.php?msg=null');
        }

    }
    else
    {
        header('location: Reg.php');
    }
?>