<?php
    $sum=0;
    if(isset($_POST['submit'])){  
        echo "Submit button is clicked.";  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $sum=$num1+$num2;

            $x = $num1;
            $y = $num2;
            $z = $sum;
        }  
    } else {  
        echo "Data is not submitted";  
    }  
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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

<?php
    if(isset($_POST['submit'])){
        echo "<h4>Value $x == $z</h4>";
        var_dump($x == $z); // លទ្ធផលទទួលបានគឺ: boolean true
        echo "<br>";
        echo "<h4>Value $x === $z</h4>";
        var_dump($x === $z); // លទ្ធផលទទួលបានគឺ: boolean false
        echo "<br>";

        echo "<h4>Value x=$x != y=$y</h4>";
        var_dump($x != $y); // លទ្ធផលទទួលបានគឺ: boolean true
        echo "<br>";

        echo "<h4>Value x=$x !== z=$z</h4>";
        var_dump($x !== $z); // លទ្ធផលទទួលបានគឺ: boolean true
        echo "<br>";

        var_dump($x < $y); // លទ្ធផលទទួលបានគឺ: boolean true
        echo "<br>";

        var_dump($x > $y); // លទ្ធផលទទួលបានគឺ: boolean false
        echo "<br>";

        var_dump($x <= $y); // លទ្ធផលទទួលបានគឺ: boolean true
        echo "<br>";

        var_dump($x >= $y); // លទ្ធផលទទួលបានគឺ: boolean false
        echo "<br>";

    }

?>