<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {
        $id=$_REQUEST['id'];
        $pass=$_REQUEST['pass'];

        $user=['id'=>$id,'pass'=>$pass];
        $count=0;
        if($id!=='' and $pass!=='')
        {
            $row=employeeInfo($user);
            if($row==-1)
            {
                header('location: ../view/log.php?msg=inv');
            }
            else
            {
                $_SESSION['flag']=true;
                $_SESSION['id']=$row['id'];
                $_SESSION['name']=$row['Name'];
                $_SESSION['pass']=$row['password'];
                $_SESSION['type']=$row['Type'];
                header('location: ../view/home.php');
            }
        }
        else
        {
            header('location: ../view/log.php?msg=null');
        }
            
    }
    else
    {
        header('location: ../view/log.php');
    }
?>