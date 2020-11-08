<?php
session_start();

if(isset($_REQUEST['submit']))
{
    
    if(isset($_REQUEST['img']) || empty($_REQUEST['id']))
    {
        header('location: ProfilePicture.php?msg=null');        
    }
    
    else
    {
        if($_REQUEST['id']<0)
        {
            header('location: ProfilePicture.php?msg=invalid');
        }
        else
        {
            header('location: ProfilePicture.php?msg=ok');
        }
    }
    
    
}

else
{
    
    header('location: ProfilePicture.php?msg=error');
    
}

?>