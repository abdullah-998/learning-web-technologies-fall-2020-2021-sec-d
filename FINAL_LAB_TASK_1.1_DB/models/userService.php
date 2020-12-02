<?php
    include_once('db.php');

    function insertUser($user)
    {
        $conn=getConnection();
        $query="insert into users value('','{$user['name']}','{$user['email']}','{$user['pass']}','{$user['type']}','{$user['active']}')";
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

    function userInfo($user)
    {
        $conn=getConnection();
        $query ="select * from users where username='{$user['name']}' and password='{$user['pass']}'";

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

    function getAllUser()
    {
        $conn=getConnection();
        $query = "select * from users";

        $result = mysqli_query($conn,$query);
        $users=[];

        while($data=mysqli_fetch_assoc($result))
        {
            array_push($users,$data);
        }

        return $users;
    }


    function updateUserInfo($user)
    {
        $conn=getConnection();
        $query="update users set username={$user['uname']},email={$user['email']} where id={$user['id']}";

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