<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Ternary Operator</title>
</head>
<body>
<?php
$num1=$num2=null;
    if(isset($_POST['submit']))
    {
        $num1 = isset($_POST['num1']) ? $_POST['num1'] : null;
        $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
        
        $max_value=$num1>$num2?$num1:$num2;
    }
?> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>
        <label>លេខទី១ : <input type="text" name="num1" value="<?php echo $num1?:null; ?>"></label>
    </p>
    <p>
        <label>លេខទី២ : <input type="text" name="num2" value="<?php echo $num2?:null; ?>"></label>
    </p>
    <p>
        <input type="submit" name="submit" value="Find Max">
    </p>
</form>

<?php
    if(isset($_POST['submit']))
    {
        echo "<p>Your Max Number is : $max_value</p>";            
    }
?>
</body>
</html>