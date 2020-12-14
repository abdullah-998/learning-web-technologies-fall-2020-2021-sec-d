<?php
    include('../models/employeeService.php');

    $users=getAllEmployee();


    echo '<table border="1">
    <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Password</td>
    <td>Type</td>
    </tr>';
    for($i=0;$i<count($users);$i++)
    {
        echo '<tr>
        <td>'.$users[$i]["id"].'</td>
        <td>'.$users[$i]["Name"].'</td>
        <td>'.$users[$i]["password"].'</td>
        <td>'.$users[$i]['Type'].'</td>
        </tr>';
    }
    echo '</table>'

?>