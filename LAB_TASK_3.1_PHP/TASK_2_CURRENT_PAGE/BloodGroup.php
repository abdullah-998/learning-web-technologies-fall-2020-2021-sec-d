<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>BLOOD GROUP</b></legend>
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
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
    <?php
    if(isset($_REQUEST['submit']))
    {
      if($_REQUEST['bg']!=null)
      {
        foreach($_REQUEST['bg'] as $selected)
        {
          echo 'Blood Group:'.$selected;
        }          
      } 
      else 
      {
        echo 'Please select one value.';
      }
    }  
?>
</body>
</html>