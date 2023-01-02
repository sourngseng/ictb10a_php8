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
    <form actoin="06_ex02_form.php" method="post">
        <div style="margin-bottom: 15px;">
             <label for="fname">First Name:</label>
             <input type="text" id="fname" name="firstName">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="lname">last Name:</label>
            <input type="text" id="lname" name="lastName">
        </div>
        <input style="margin-left: 120px;" type="submit" value="Save";>
    </form>
    <h3>
        <?php 
        echo "ឈ្មោះរបស់អ្នកគឺ​ : " . $fName . " " . $lName;
        ?>
    </h3>
</body>
</html>