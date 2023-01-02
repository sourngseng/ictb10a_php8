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
        @$fName=$_POST['firstName'];
        @$lName=$_POST['lastName'];
    ?>
    <form action="06_ex04_form.php" method="post">
        <div>
        <label for="fName">First Name:</label>
        <input type="text" id="fName" name="firstName">    
        <br>
        <label for="lName">Last Name:</label>
        <input type="text" id="lName" name="lastName">  
        <br>  
        </div>
        <input type="submit" value="save">
    </form>
    <h1>
    <?php
        echo "Your name:". $fName . " " . $lName;
    ?>
    </h1>
</body>
</html>