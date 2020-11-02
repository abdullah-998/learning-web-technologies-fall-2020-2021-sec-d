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
            <input type="checkbox" value="SSC" name="degree[]">SSC
            <input type="checkbox" value="HSC" name="degree[]">HSC
            <input type="checkbox" value="BSc" name="degree[]">BSc
            <input type="checkbox" value="MSc" name="degree[]">MSc
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
    <?php
        if(isset($_REQUEST['submit']))
        {
            if($_REQUEST['degree']!=null)
            {
                echo "Your Degrees are,<br>";
                foreach($_REQUEST['degree'] as $deg)
                {
                echo $deg."<br>";
                }
            }
            else
            {
                echo "you no have degree";
            }
        }
?>
</body>
</html>