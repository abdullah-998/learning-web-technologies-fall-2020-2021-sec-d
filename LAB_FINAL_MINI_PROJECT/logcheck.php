<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {
        $id=$_REQUEST['id'];
        $pass=$_REQUEST['pass'];

        $count=0;
        if($id!=='' and $pass!=='')
        {
            $file=fopen('user.txt','r');
            while($data=fgets($file))
            {
                $user1=explode('|',$data);
                if($user1[0]==$id and $user1[1]==$pass)
                {
                    $_SESSION['id']=$user1[0];
                    $_SESSION['pass']=$user1[1];
                    $_SESSION['name']=$user1[2];
                    $_SESSION['type']=$user1[3];
                    $_SESSION['flag']=true;

                    $count=$count+1;
                }
            }
            if($count==0)
            {
                header('location: log.php?msg=inv');   
            }
            else
            {
                header('location: Home.php');
            }

                    
        }
        else
        {
            header('location: log.php?msg=null');
        }

    }
    else
    {
        header('location: log.php');
    }
?>