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
      @ $fName=$_POST['firstname'];
      @ $lName=$_POST['lastname'];
    ?>
    <form action="06_ex01_form.php" method="post">
        <div>
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="firstname">
        </div>
        <div>
            <label for="lname">Last Name:<label>
            <input type="text" id="lname" name="lastname">
            <br>
        </div>
        <input type="submit" value="submit">
    </form>
    <?php
       echo "Your name:". $fName . " " . $lName;
    ?>
</body>
</html>