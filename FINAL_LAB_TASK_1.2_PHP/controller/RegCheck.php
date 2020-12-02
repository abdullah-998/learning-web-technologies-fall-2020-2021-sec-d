<?php
    session_start();
    require_once('../models/employeeService.php');
    
    if(isset($_REQUEST['submit']))
    {
        $name=$_REQUEST['name'];
        $number=$_REQUEST['cno'];
        $pass=$_REQUEST['pass'];
        $type=$_REQUEST['user'];
        $uname=$_REQUEST['uname'];
        

        if(!$name=="" and !$number=="" and !$pass=="" and $type!=="" and $uname!="")
        {
            if(Strlen($name)>2)
            {
                if(strlen($pass)>=8)
                {
                        $user=['name'=>$name,'phone'=>$number,'uname'=>$uname,'pass'=>$pass,'type'=>$type];

                        if(insertEmployee($user))
                        {
                            header('location: ../view/Reg.php?msg=ok');
                        }
                        else
                        {
                            header('location: ../view/Reg.php?msg=wrong'); 
                        }
                   
                }
                else
                {
                    header('location: ../view/Reg.php?msg=short_pass');
                }
            }
            else
            {
                header('location: ../view/Reg.php?msg=inv_name');
            }

        }
        else
        {
            header('location: ../view/Reg.php?msg=null');
        }

    }
    else
    {
        header('location: ../view/Reg.php');
    }
?>