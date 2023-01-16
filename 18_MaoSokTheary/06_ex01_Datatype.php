<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=width_device-width, initial-scale=1.0">
    <title>Tesing DataType with Form</title>
</head>
<body>
    <?php
    @fname=$_POST ['firstName'];
    @lname=$_POST ['lastName'];
    ?>
    <?php
     <form action="06_ex02_form.php" method="post">
         <div style="margin-bottom: 15px;">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="firstName">
        </div>  
        <div style="margin-bottom: 15px;">  
            <label for="lname">Last Name:</label>
            <input type="text"id="lname" name="lastName">
        </div>    
        <input style="magin-left: 120px;" type="submit" value="save">
    </form>
    <h3>
        <?php
        echo "ឈ្មោះរបស់អ្នកគឺ  :". $fName." ".$lName;
        ?>        
    ?>

   
</body>
</html>