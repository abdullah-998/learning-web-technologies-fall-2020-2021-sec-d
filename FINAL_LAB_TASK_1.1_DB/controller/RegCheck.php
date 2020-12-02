<?php
    session_start();
    require_once('../models/userService.php');
    
    if(isset($_REQUEST['submit']))
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['pass'];
        $type=$_REQUEST['user'];
        

        if(!$name=="" and !$email=="" and !$pass=="" and $user!=="")
        {
            if(Strlen($name)>2)
            {
                if(strlen($pass)>=8)
                {
                    if(strpos($email,'@') and strpos($email,'.'))
                    {
                        $user=['name'=>$name,'email'=>$email,'pass'=>$pass,'type'=>$type,'active'=>1];

                        if(insertUser($user))
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
                        header('location: ../view/Reg.php?msg=inv_email');
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