<?php
    session_start();
    if($_SESSION['flag'])
    {
        session_destroy();
        header('location: ../view/log.php');
    }
    else
    {
        header('location: ../view/log.php');  
    }
?>