<?php
    session_start();
    require_once('../models/userService.php');

    if(isset($_REQUEST['submit']))
    {
        $name=$_REQUEST['name'];
        $pass=$_REQUEST['pass'];


        if($name!="" and $pass!="")
        {
            $user=['name'=>$name,'pass'=>$pass];

            $row=userInfo($user);

            if(count($row)>0)
            {
                if($row['active']==1)
                {
                    setcookie('type',$row['type'],time()+3000,'/');
                    header('location: ../view/Home.php');
                }
                else
                {
                    header('location: ../view/Log.php?msg=deactive');
                }
                
            }
            else
            {
                header('location: ../view/Log.php?msg=invalid');
            }
        }
        else
        {
            header('location: ../view/Log.php?msg=null');
        }
    }
    else
    {
        header('location: ../view/Log.php');
    }
?>