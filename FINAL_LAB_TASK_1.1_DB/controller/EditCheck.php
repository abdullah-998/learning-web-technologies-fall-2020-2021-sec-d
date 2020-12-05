<?php
    session_start();
    require_once('../models/userService.php');

    $id=$_SESSION['id'];

    if($_REQUEST['submit'])
    {
        if($_REQUEST['uname']!='' and $_REQUEST['email']!='')
        {
            $user=['uname'=>$_REQUEST['uname'],'email'=>$_REQUEST['email'],'id'=>$id];

            $status=updateUserInfo($user);

            if($status)
            {
                header('location: ../view/EditUser.php?msgd=updated');
            }
            else
            {
                header('location: ../view/EditUser.php?msgd=wrong');
            }
        }
        else
        {
            header('location: ../view/EditUser.php?msgd=null');
        }
    }
    else
    {
        header('location: ../view/Log.php');
    }

?>