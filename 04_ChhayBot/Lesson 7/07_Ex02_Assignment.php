<?php


    $x = 10;
    echo $x; // Outputs: 10
    echo "<br>";

    $x = 20;
    $x += 30;
    echo $x; // Outputs: 50
    echo "<br>";

    $x = 50;
    $x -= 20;
    echo $x; // Outputs: 30
    echo "<br>";

    $x = 5;
    $x *= 25;
    echo $x; // Outputs: 125
    echo "<br>";

    $x = 50;
    $x /= 10;
    echo $x; // Outputs: 5
    echo "<br>";

    $x = 100;
    $x %= 15;
    echo $x; // Outputs: 10
    echo "<br>";

?>

<?php
    $sum=0;
    if(isset($_POST['submit'])){  
        echo "Submit button is clicked.";  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $sum=$num1+$num2;
        }  
    } else {  
        echo "Data is not submitted";  
    }  
?>

<form action="07_ex02_Assignment.php" method="post">
   <div style="padding: 15px;">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1">
   </div>

   <div style="padding-left: 15px; padding-bottom: 15px;">
        <label for="num1">Number 2:</label>
        <input type="number" name="num2">
   </div>

    <button style="margin-left: 20px;" type="submit" name="submit">Calculate</button>

</form>


<h2>Result of Sum=<?php echo $sum; ?></h2>