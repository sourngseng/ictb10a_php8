<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test form php"></form></title>
</head>
<body>
    <?php
    @fName=$_POST['FirstName'];
    @lName=$_POST['LastName'];
    ?>
     <form action="06_ex1_form.php" method="post">
        <div style="margin-bottom: 15px;">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="FirstName">
        </div>        
        <div style="margin-bottom: 15px;">
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="LastName">
        </div>        
        <input style="margin-left: 120px;" type="submit" value="Save">
    </form>
  <h1>  
    <?php
    echo "YOUR NAME is:" ".$fName." ".$lName.";
    ?>
  </h1>
    
</body>
</html>