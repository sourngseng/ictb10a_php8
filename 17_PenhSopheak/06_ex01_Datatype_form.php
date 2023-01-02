<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Testing Datatype Witlh form</title>
</head>
<body>
    <?php
    @$fname=$_POST['firstnName'];
    @$lName=$_POST['lastName'];
    ?>
   <form action="06_ex01_Datatype_form.php" method="post">
    <div style="margin-bottom: 15px;">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="Firstname"
   </form>
          
</body>
</html>
