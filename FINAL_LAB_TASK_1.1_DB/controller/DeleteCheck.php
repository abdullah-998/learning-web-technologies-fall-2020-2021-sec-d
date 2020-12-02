<?php
    session_start();
    require_once('../models/userService.php');

    $id=$_SESSION['id'];

    if($_REQUEST['submit'])
    {
        $query="update users set active=0 where id='{$id}'";

        $status=updateUserInfo($query);

        if($status)
        {
            header('location: ../view/DeleteUser.php?msgd=deleted');
        }
        else
        {
            header('location: ../view/DeleteUser.php?msgd=wrong');
        }
    }
    else
    {
        header('location: ../view/Log.php');
    }

?>