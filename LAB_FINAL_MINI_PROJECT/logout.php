<?php
    session_start();
    if($_SESSION['flag'])
    {
        session_destroy();
        header('location: log.php');
    }
    else
    {
        header('location: log.php');  
    }
?>