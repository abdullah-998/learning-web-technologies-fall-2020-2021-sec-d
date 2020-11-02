<?php
    if(isset($_POST['submit']))
    {
      if($_POST['degree']!=null)
      {
        echo "Your Degrees are,<br>";
        foreach($_POST['degree'] as $deg)
        {
          echo $deg."<br>";
        }
      }
      else
      {
        echo "you no have degree";
      }
    }
?>