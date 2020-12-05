<?php
    session_start();
    require_once('../models/userService.php');

    $id=$_SESSION['id'];

    if($_REQUEST['submit'])
    {
        if($_REQUEST['pass']!='' and $_REQUEST['cpass']!='')
        {
            if(strlen($_REQUEST['pass'])>=8)
            {
                if($_REQUEST['pass'] == $_REQUEST['cpass'])
                {
                    $user=['pass'=>$_REQUEST['pass'],'id'=>$id];

                    $status=changeUserPass($user);

                    if($status)
                    {
                        header('location: ../view/EditUser.php?msg=updated');
                    }
                    else
                    {
                        header('location: ../view/EditUser.php?msg=wrong');
                    }
                }
                else
                {
                    header('location: ../view/EditUser.php?msg=match');
                }
            }
            else
            {
                header('location: ../view/EditUser.php?msg=shortpass');
            }
        }
        else
        {
            header('location: ../view/EditUser.php?msg=null');
        }
    }
    else
    {
        header('location: ../view/Log.php');
    }

?>
/**
$user=['pass'=>$_REQUEST['pass']];

$status=changeUserPass($user);

if($status)
{
    header('location: ../view/EditUser.php?msgd=updated');
}
else
{
    header('location: ../view/EditUser.php?msgd=wrong');
}
 */