<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="06_ex03_object.php"method="post">
    <div style="margin-bottom: 15px;">
    <label for= "fname">First Name:</label>
    <input type="text" id ="fname" name="fistname">
</div>
<div style="margin-bottom: 15px;">
<label for="lname">Last Name:</label>
<input type="text" id="lname" name="lastName">
</div>
<input style="margin-left: 120px;" type="Submit" value="Save">
</form>
<h3> 
    <?php
        echo "ឈ្មោះពេញរបស់អ្នកគឺ​​ :".$person->showFullName();
        var_dump($person);
    ?>
</h3>
</body>
</html>