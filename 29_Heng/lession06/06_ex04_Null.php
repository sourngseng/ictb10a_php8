<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="06_ex02_form.php" method="post">
    <div style="margin-bottom: 15px;">
            <label for="fname">First Name: Name:</label>
            <input type="text" id="fname" name="firstName">
    </div>
    <div style="margin-bottom: 15px;">
            <label for="lname">last Name: Name:</label>
             <input type="text" id="lname" name="lasttName">
    </div>
        <input style="margin: left 120px;"type="submit" value="save">
 </form>
    <h2>Using Resource in PHP8</h2>

    <?php
    $a=NULL;
    var_dump($a);
    echo "<br>";

    $b="Hello World";
    $b=NULL;
    var_dump($b);
 ?>
 <h2>Using Resource in PHP8</h2>
 <?php
 // open a file for reading
 $handle = fopen("note.txt", "r");
 var_dump($handle);
 echo "<br>";
 // connect to MySQL database server with default setting
 $link = mysqli_connect("localhost", "root","");
 var_dump($link);
 ?>
</body>
</html>