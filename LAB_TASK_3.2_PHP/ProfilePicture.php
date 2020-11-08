<?php
    session_start();
    if(isset($_REQUEST['msg']))
    {
        if($_REQUEST['msg']=='null')
        {
            echo 'null submission';
        }
        if($_REQUEST['msg']=='invalid')
        {
            echo 'id is invalid';
        }
        if($_REQUEST['msg']=='ok')
        {
            echo 'image uploaded succesfully';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Form - Profile</title>
</head>
<body>
    
    <form method="post" action="ProfilePictureCheck.php">
        
        <fieldset>
            
            <legend><b>Profile Picture</b></legend>
            User Id <input type="number" name="id"><br><br>
            Picture <input type="file" name="img">  
               <hr>
                
        <input type="submit" name="submit" value="Submit">
        </fieldset>
        
        
        
    </form>
    
</body>
</html>