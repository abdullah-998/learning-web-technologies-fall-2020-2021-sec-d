<?php
    include_once('db.php');

    function insertEmployee($user)
    {
        $conn=getConnection();
        $query="insert into employee value('','{$user['id']}','{$user['password']}','{$user['name']}','{$user['type']}')";
        $status=mysqli_query($conn,$query);

        if($status)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function exist($id)
    {
        $conn=getConnection();
        $query ="select * from employee where id='{$id}'";

        $status=mysqli_query($conn,$query);

        if($status)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function employeeInfo($user)
    {
        $conn=getConnection();
        $query ="select * from employee where id='{$user['id']}' and password='{$user['pass']}'";

        $result=mysqli_query($conn,$query);

        $row=mysqli_fetch_assoc($result);

        //setcookie('type',$row['type'],time()+300,'/');

        if(count($row)>0)
        {
            return $row;
        }
        else
        {
            return -1;
        }
    }

    function getAllEmployee()
    {
        $conn=getConnection();
        $query = "select * from employee";

        $result = mysqli_query($conn,$query);
        $users=[];

        while($data=mysqli_fetch_assoc($result))
        {
            array_push($users,$data);
        }

        return $users;
    }


    function updateEmployeeInfo($user)
    {
        $conn=getConnection();
        $query="update employee set username={$user['uname']},email={$user['email']} where id={$user['id']}";

        $status=mysqli_query($conn,$query);

        if($status)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    

?> 