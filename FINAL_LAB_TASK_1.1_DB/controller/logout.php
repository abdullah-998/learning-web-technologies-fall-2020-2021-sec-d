<?php
    session_destroy();
    setcookie('type',$row['type'],time()-3000,'/');
    header('location: ../view/Log.php');
?>