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
    if(isset($_POST['submit'])) 
    { 
        $name = $_POST['name'];
        echo "User Has submitted the form and entered this name : <b> $name </b>";
        echo "<br>You can use the following form again to enter a new name."; 
    }
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
    
</body>
</html>