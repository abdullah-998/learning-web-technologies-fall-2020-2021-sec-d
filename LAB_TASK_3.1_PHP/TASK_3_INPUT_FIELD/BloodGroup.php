<?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
            if($selected==null)
            {
                echo 'Please select one value.';
            }
            else
                echo 'Blood Group:'.$selected;
        }          
      } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>BLOOD GROUP</b></legend>
            <select name="bg[]">
                <option value="" <?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
            if($selected=="")
            {
                echo 'selected="selected"';
            }
        }          
      } 
    }
?>></option>
                <option value="A+" <?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
            if($selected=="A+")
            {
                echo 'selected="selected"';
            }
        }          
      } 
    }
?>>A+</option>
                <option value="B+" <?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
            if($selected=="B+")
            {
                echo 'selected="selected"';
            }
        }          
      } 
    }
?>>B+</option>
                <option value="AB+" <?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
            if($selected=="AB+")
            {
                echo 'selected="selected"';
            }
        }          
      } 
    }
?>>AB+</option>
                <option value="O+" <?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
            if($selected=="O+")
            {
                echo 'selected="selected"';
            }
        }          
      } 
    }
?>>O+</option>
                <option value="A-" <?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
            if($selected=="A-")
            {
                echo 'selected="selected"';
            }
        }          
      } 
    }
?>>A-</option>
                <option value="B-" <?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
            if($selected=="B-")
            {
                echo 'selected="selected"';
            }
        }          
      } 
    }
?>>B-</option>
                <option value="AB-" <?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
            if($selected=="AB-")
            {
                echo 'selected="selected"';
            }
        }          
      } 
    }
?>>AB-</option>
                <option value="O-" <?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
            if($selected=="O-")
            {
                echo 'selected="selected"';
            }
        }          
      } 
    }
?>>O-</option>
            </select>
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>  
</body>
</html>