<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fName =$_POST['FirstName'];
        $lName =$_POST['LastName'];
    ?>
    <form action="06_ex03_data_type.php" method="post"><
        <label for="fName">First Name:</label>
        <input type="text" id="fName" name="FirstName">    
        <br>
        <label for="lName">Last Name:</label>
        <input type="text" id="lName" name="LastName">  
        <br>  
        <input type="submit" value="save">
    /form>
    <h1>
    <?php
        echo"My name is:".$fName. " " .$lName;
    ?>
    </h1>
</body>
</html>