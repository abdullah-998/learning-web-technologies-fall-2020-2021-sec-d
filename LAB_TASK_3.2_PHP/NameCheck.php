<?php
    session_start();

    if(isset($_REQUEST['submit']))
    {
        $name = $_REQUEST['sname'];

        if(!empty($name))
		{
            if($name[0]==" ")
            {
                header('location: Name.php?msg=invalid');
            }
            else
            {            
                if(strlen($test) >=2)
                {
                
                    $pattern = array('<', ',', '>', '/', '?', '"', "'", ';', ':', ']', '[', '|', '}', '{', '=', '+',
                                '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '`', '~', '0', '1', '2', '3', 
                                '4', '5', '6', '7', '8', '9',);
                    
                    for($i = 0; $i < count($pattern); $i++)
                    {
                    
                        if(strpos($name, $pattern[$i]))
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
        if(strlen($name)<2)
        {
            header('location: Name.php?msg=invalid');
        }
        if(empty($name))
        {
            header('location: Name.php?msg=null');
        }
    }
    else
    {
        header('location: Name.php');
    }

?>
