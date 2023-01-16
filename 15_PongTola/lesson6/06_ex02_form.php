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
    @$fname=$_POST['firsname'];
    @$lname=$_POST['lastname'];
    ?>
<form action="06_ex02_form.php" method="post">
    <div>
        <label for="fname">firs name</label>
        <input type="text" id="fname" name="firsname" >
    </div>
    <div>
        <label for="lname">last name</label>
        <input type="text" id="lname" name="lastname">
    </div>
    <input type="submit" value="save">
    
</form>    
<?php
    echo "your name is :".$fname ." ".$lname;
    ?>
    
</body>
</html>

