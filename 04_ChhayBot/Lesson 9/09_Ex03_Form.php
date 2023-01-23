<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
    <h3>Your Information</h3>
<?php
// define variables and set to empty values
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Age:  <input type="text" name="email">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form> 
 <h3>Your Input:</h3>
<span> <?php
echo "Your Name :". $name;
echo "<br>";
echo "Your Age :". $email;
echo "<br>";
?></span>

</form>
</body>
</html>