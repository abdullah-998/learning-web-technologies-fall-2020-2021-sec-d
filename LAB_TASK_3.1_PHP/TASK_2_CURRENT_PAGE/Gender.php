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
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Others">Others
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
    <?php
    if(isset($_REQUEST['submit']))
    {
		  $gender=$_REQUEST['gender'];
		  echo "Your Gender is ".$gender;
    }
?>
</body>
</html>