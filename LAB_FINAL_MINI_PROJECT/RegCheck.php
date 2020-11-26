<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {
        $id=$_REQUEST['id'];
        $pass=$_REQUEST['pass'];
        $cpass=$_REQUEST['cpass'];
        $name=$_REQUEST['name'];
        $type=$_REQUEST['type'];

        $count=0;

        if($id!=='' and $pass!=='' and $cpass!=='' and $name!=='' and $type!=='')
        {
            if($pass==$cpass)
            {
                if(strlen($pass)>=8)
                {
                    if(strlen($name)>=2)
                    {
                        $file=fopen('user.txt','r');
                        while($data=fgets($file))
                        {
                            $user1=explode('|',$data);
                            if($user1[0]==$id)
                            {
                                $count=$count+1;
                            }
                        }
                        fclose($file);
                        if($count==0)
                        {
                            $file=fopen('user.txt','a');
                            $data=$id."|".$pass."|".$name."|".$type." \r\n";
                            fwrite($file,$data);
                            fclose($file);

                            header('location: Reg.php?msg=ok');
                        }
                        else
                        {
                            header('location: Reg.php?msg=id');
                        }

                    }
                    else
                    {
                        header('location: Reg.php?msg=short_name');
                    }
                }
                else
                {
                    header('location: Reg.php?msg=pshort');
                }
            }
            else
            {
                header('location: Reg.php?msg=pmatch');
            }

        }
        else
        {
            header('location: Reg.php?msg=null');
        }
    }
?>