<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Data type with form</title>
</head>
<body>
   <?php
        //code khang krom nis ker dermbey brab pi domlai Input control Tam name robos vea
    @$fName=$_POST['firstName'];
    @$lName=$_POST['lastName'];
    ?>

    <form action="06_ex_form.php" methord="post">

         <label for="fname">First Name : </label>
         <input type="text" id="fname" name="firstName">
        <br>
         <label for="lname">last Name : </label>
         <input type="text" id="lname" name="lastName">
         <br>
    <input type="submit" value="submit">
</form>

    <h3>
        ​​
         <?php
        echo "ឈ្មោះរបស់អ្នកគឺ​  :  ". $fName . " " . $lName;
        ?>
</h3>
</body>
</html>