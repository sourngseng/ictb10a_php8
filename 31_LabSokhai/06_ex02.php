<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test form</title>
</head>
<body>
    <?php
        @$fName=$_POST['firstName'];
        @$lName=$_POST['lastName'];
    ?>
    <form action="06_ex02_form.php" method="post">
        <div style="margin-bottom: 15px;">
        <label for="fname">fist Name:</label>
        <input type="text" ad="fName" name="firstName">
    </div>
    <div style="mardin-bottom: 15px;">
        <label for="lname">last Name:</label>
        <input type="text" ad="lName" name="lastName">
    </div>
    <input style="margin-left: 120px;" type="submit" value="save">
    </form>
    <h3>
        <?php
        echo "ឈ្មោះរបស់អ្នកគឺ​ : ". $fName . " " . $lname;
        ?>
    </h3>
</body>
</html>