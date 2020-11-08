<?php
    if(isset($_REQUEST['submit']))
    {
        if(empty($_REQUEST['degree']))
        {
            echo "no degree";
        }
        else
        {
            if(!empty($_REQUEST['degree']))
            {
                echo "Your Degrees are,<br>";
                foreach($_REQUEST['degree'] as $deg)
                {
                    echo $deg."<br>";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" value="SSC" name="degree[]" <?php 
    if(isset($_REQUEST['submit']))
    {
        if(in_array("SSC", $_POST['degree'])) 
        echo "checked='checked'";    
    }
    ?> >SSC
            <input type="checkbox" value="HSC" name="degree[]" <?php 
    if(isset($_REQUEST['submit']))
    {
        if(in_array("HSC", $_POST['degree'])) 
        echo "checked='checked'";    
    }
?> >HSC
            <input type="checkbox" value="BSc" name="degree[]" <?php 
    if(isset($_REQUEST['submit']))
    {
        if(in_array("BSc", $_POST['degree'])) 
        echo "checked='checked'";    
    }
?> >BSc
            <input type="checkbox" value="MSc" name="degree[]" <?php 
    if(isset($_REQUEST['submit']))
    {
        if(in_array("MSc", $_POST['degree'])) 
        echo "checked='checked'";    
    }
?> >MSc
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>