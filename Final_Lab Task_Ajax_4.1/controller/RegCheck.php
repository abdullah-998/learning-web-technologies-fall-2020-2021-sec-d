<?php
    include('../models/employeeService.php');

    $id=$_POST['id'];
    if($id!==null)
    {
        if(exist($id))
        {
            echo 'Id allready exist';
        }
        else
        {
            echo '';
        }
    }

    if(isset($_REQUEST['submit']))
    {
        $id=$_REQUEST['id'];
        $pass=$_REQUEST['pass'];
        $name=$_REQUEST['name'];
        $type=$_REQUEST['type'];

        $user=['id'=>$id,'name'=>$name,'password'=>$pass,'type'=>$type];

        if(insertEmployee($user))
        {
            header('location: ../view/Reg.php?msg=ok');
        }
        else
        {
            header('location: ../view/Reg.php?msg=wrong');
        }
    }
?>