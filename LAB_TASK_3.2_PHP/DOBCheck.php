<?php
	session_start();

	if(isset($_REQUEST['submit'])){
		$day = $_REQUEST['day'];
		$month = $_REQUEST['month'];
		$year = $_REQUEST['year'];

        if((empty($day) || empty($month) || empty($year)) || ($day<0 || $day>31) || ($month<0 || $month>12)|| ($year<1900 || $year>2016))
        {
            header('location: DOB.php?msg=invalid');
        }
		else
		{
            $_SESSION['day']=$day;
            $_SESSION['month']=$month;
            $_SESSION['year']=$year;
            header('location: DOB.php?msg=ok');
		}

    }

?>
