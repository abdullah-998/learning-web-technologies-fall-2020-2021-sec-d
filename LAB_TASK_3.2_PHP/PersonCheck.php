<?php
    session_start();

    if(isset($_REQUEST['submit']))
    {
        $name = $_REQUEST['sname'];
        $email = $_REQUEST['email'];

        $day = $_REQUEST['day'];
		$month = $_REQUEST['month'];
        $year = $_REQUEST['year'];

        $gender = $_REQUEST['gender'];

        $degree = $_REQUEST['degree'];

        $bg = $_REQUEST['bg'];
        
        if(empty($name) || empty($email) || empty($day) || empty($month) || empty($year) || (empty($gender) && $gender!="Male" && $gender!="Female" && $gender!="Others") || $degree==null || empty($bg) || !isset($_REQUEST['img']))
		{
			header('location: Person.php?msg=null');
        }
        if(strlen($name)<2)
        {
            header('location: Person.php?msg=invname');
        }
        if($name[0]==" " || $name[0]==1 || $name[0]==0 || $name[0]==2 || $name[0]==3 || $name[0]==4 || $name[0]==5 || $name[0]==6 || $name[0]==7 || $name[0]==8 || $name[0]==9)
        {
            header('location: Name.php?msg=invname');
        }
        if(strpos($email,'@')=== false && strpos($email,'.')===false)
        {
            header('location: Person.php?msg=invmail');
        }
        if(($day<0 || $day>31) || ($month<0 || $month>12)|| ($year<1900 || $year>2016))
        {
            header('location: Person.php?msg=invdate');
        }
        else
        {
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['day']=$day;
            $_SESSION['month']=$month;
            $_SESSION['year']=$year;
            $_SESSION['gender']=$gender;
            $_SESSION['degree']=$degree;
            $_SESSION['bg']=$bg;
            header('location: Person.php?msg=ok');
        }   
    }
?>
