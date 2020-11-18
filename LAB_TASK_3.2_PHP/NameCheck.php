<?php
	session_start();

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['sname'];

        if(empty($name))
		{
			header('location: Name.php?msg=null');
        }
        else
        {
            if(count($name)<2)
            {
                header('location: Name.php?msg=invalid');
            }
            if($name>=2)
        {
            $limit = array('<', ',', '>', '/', '?', '"', "'", ';', ':', ']', '[', '|', '}', '{', '=', '+','_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '`', '~', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',);
            
                for($i = 0; $i < count($limit); $i++)
                {
                
                    if(strpos($name, $limit[$i])==true)
                    {
                        header('location: Name.php?msg=invalid');
                        break;
                    }
                
                }
        }
            else
            {
                $_SESSION['name']=$name;
                header('location: Name.php?msg=ok');
            }

        }
    }

?>
