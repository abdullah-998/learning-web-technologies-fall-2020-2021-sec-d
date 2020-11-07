<?php
if(isset($_REQUEST['submit']))
    {
		  $gender=$_REQUEST['gender'];
		  echo "Your Gender is ".$gender;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>Gender</b></legend>
            <input type="radio" name="gender" value="Male" <?php if (isset($_POST["submit"])){ if($_REQUEST['gender']=='Male') {echo 'checked="checked"';}} ?> >Male
            <input type="radio" name="gender" value="Female" <?php if (isset($_POST["submit"])){ if($_REQUEST['gender']=='Female') {echo 'checked="checked"';}} ?> >Female
            <input type="radio" name="gender" value="Others" <?php if (isset($_POST["submit"])){ if($_REQUEST['gender']=='Others') {echo 'checked="checked"';}} ?>>Others
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>