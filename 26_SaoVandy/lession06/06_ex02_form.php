<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Testing DataType with Form</title>
</head>
<body>
<?php
@$fName=$_POST['firstName'];
@$lName=$_POST['lastName'];
?>
       <form action="06_ex02_form.php" method="post">
           <label for="fname">First Name:</label>
           <input type="text" id="fname"name="firstName">
           <br> 
           <label for="fname">Last Name:</label>
           <input type="text" id="lname"name="lastName"> 
           <br>
           <input type="submit" value="Submit">
       </form>  
       
<h3>
        <?php
           echo "ឈ្មោះរបស់អ្នកគឺ​ : ".$fName." ".$lName;
         ?>
</h3>                
</body>
</html>