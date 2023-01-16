<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment and Decrement Operater</title>
</head>
<body>
    <?php
        $t='$x';
        if(isset($_POST['submit'])){  
            if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                $numb1=$_POST['num1'];
            }  
        }
         echo "<h3>In Increment and Decrement Operater there are four kinds of operater. There are :</h3>";

         echo "1.Pre-increment \"++$t\"";
         echo "<br>";

         echo "2.Post-increment \"$t++\"";
         echo "<br>";

         echo "3.Pre-decrement \"--$t\"";
         echo "<br>";

         echo "4.Post-decrement \"$t--\"";

    ?>
    
        <div>
            <h3>Enter Number then the Number will be access with all of Increment and Decrement Operaters</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div style="padding: 20px;">
                        <label for="num1">Enter Number</label>
                        <input type="text" id="num1" name="num1">
                    </div>
                    <div style="padding: 20px;">
                        <input type="submit" id="result" name="submit" value="Result">
                    </div>
                </form>
        </div>
            <br>
        <div>
                <?php 
                if(isset($_POST['submit'])){
                    echo "Number is: " . $numb1 . "<br>";
                    echo "<br>";
                    
                    echo "<p style='color:red;'>This Number is accese with Pre-increment \"--$t\"</p>";
                    echo --$numb1;
                    // echo "<br>";
                    // echo $numb1;


                    echo "<p style='color:red;'>This Number is accese with Pre-decrement \"$t--\"</p>";
                    echo $numb1--;
                    echo "<br>";
                    echo $numb1;


                    echo "<p style='color:red;'>This Number is accese with Pre-increment \"++$t\"</p>";
                    echo ++$numb1;
                    // echo "<br>";
                    // echo $numb1;

                    echo "<p style='color:red;'>This Number is accese with Post-increment \"$t++\"</p>";
                    echo  $numb1++;
                    echo "<br>";
                    echo $numb1;
                }
                ?>
        </div> 
</body>
</html>