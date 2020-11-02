<?php
    if(isset($_POST['submit']))
    {
      if($_POST['bg']!=null)
      {
        foreach($_POST['bg'] as $selected)
        {
          echo 'Blood Group:'.$selected;
        }          
      } 
      else 
      {
        echo 'Please select the value.';
      }
    }  
?>