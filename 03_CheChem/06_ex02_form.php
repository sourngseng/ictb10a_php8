<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesing DataType with Form</title>
</head>
<body>
    <?php
        
        @$fName=$_POST['firstName'];
        @$lName=$_POST['lastName'];
    ?>

    <form action="06_ex02_form.php" method="post">
        <div style="margin-bottom: 10px;">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="firstName">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lastName">
        </div>
        <input type="submit" value="Save">;
    </form>
    <h3>
        <?php
        echo "Your Name is :". $fName . " " . $lName;
        ?>
    </h3>
    
</body>
</html>