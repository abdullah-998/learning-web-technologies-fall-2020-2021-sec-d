<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOB</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>DATE OF BIRTH</b></legend>
            <!--SET UP FORMAT-->
            <pre>  dd        mm      yyyy<br></pre>
            <input type="tel" size="2" name="day">/
            <input type="tel" size="2" name="month">/
            <input type="tel" size="4" name="year">
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
    <?php
    if(isset($_REQUEST['submit']))
    {
        if($_REQUEST['day']!=null && $_REQUEST['month']!=null && $_REQUEST['year']!=null)
        {
            $day=$_REQUEST['day'];
		    $month=$_REQUEST['month'];
		    $year=$_REQUEST['year'];
		    echo "DOB: ".$day."/".$month."/".$year;

        }
        else
        {
            echo "Incomplete Birthday Format!!";
        }
    }
?>
</body>
</html>