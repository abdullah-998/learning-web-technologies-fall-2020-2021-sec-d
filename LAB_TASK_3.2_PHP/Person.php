<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="PersonCheck.php" method="POST">
    <table border="1" align="center">
        <tr>
            <td height="60px" width="500px" colspan="3" align="center">
                <h1><b>PERSON PROFILE</b></h1>
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="sname"></td>
            <td></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"> <br></td>
            <td></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Others">Others
            </td>
            <td></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>
                <input type="tel" size="2" name="day">/
                <input type="tel" size="2" name="month">/
                <input type="tel" size="4" name="year"> <i>(dd/mm/yyyy)</i>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>Blood Group</td>
            <td>
                <select name="bg[]">
                    <option value=""></option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                    <option value="O-">O-</option>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>DEGREE</td>
            <td>
                <input type="checkbox" value="SSC" name="degree[]">SSC
                <input type="checkbox" value="HSC" name="degree[]">HSC
                <input type="checkbox" value="BSc" name="degree[]">BSc
                <input type="checkbox" value="MSc" name="degree[]">MSc
            </td>
            <td></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>
                <input type="file" name="img">
            </td>
            <td></td>
        </tr>
        <tr>
            <td height="40px" width="500px" colspan="3" align="right">
            </td>
        </tr>
        <tr>
            <td height="40px" width="500px" colspan="3" align="right">
                <input type="submit" name="submit">
                <input type="reset" name="reset">
            </td>
        </tr>
    </table>
    </form>
    <?php
        if(isset($_REQUEST['msg']))
        {
            if($_REQUEST['msg']=='ok')
            {
                $bg=$_SESSION['bg'];
                echo "Registration successful..<br>";
                echo "Your name: ".$_SESSION['name']."<br>";
                echo "Your email: ".$_SESSION['email']."<br>";
                echo "Your DOB: ".$_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year']."<br>";
                echo "Your gender: ".$_SESSION['gender']."<br>";
                echo  "Your Degree's are..<br>";
                foreach($_SESSION['degree'] as $deg)
                {
                    echo $deg."<br>";
                }
                echo "Your blood group: ".$bg[0]."<br>";
            }
            if($_REQUEST['msg']=='null')
            {
                echo "One or more input are null<br>";
            }
            if($_REQUEST['msg']=='invname')
            {
                echo "Invalid name type<br>";
            }
            if($_REQUEST['msg']=='invmail')
            {
                echo "Invalid email<br>";
            }
            if($_REQUEST['msg']=='invdate')
            {
                echo "invlaid birth date<br>";
            }

        }
    ?>
</body>
</html>