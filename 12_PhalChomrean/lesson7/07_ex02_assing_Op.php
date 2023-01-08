<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assingment Operater</title>
</head>
<body>
<?php
        if(isset($_POST['submit'])){  
            if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            $numb1=$_POST['num1'];
        
                $a=$numb1+=20;
                $b=$numb1-=20;
                $c=$numb1*=20;
                $d=$numb1/=20;
                $e=$numb1%=20;

            }  
        }
    ?>
    
        <div>
            <h3>Enter Number then the Number will additon subtraction multiplicatio division Modulus with 20 all </h3>
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

    
                    echo "The answer of Number +=20 is" . $a . "<br>";
                    echo "<br>";

                    echo "The answer of Number -=20 is" . $b . "<br>";
                    echo "<br>";

                    echo "The answer of Number *=20 is" . $c . "<br>";
                    echo "<br>";

                    echo "The answer of Number /=20 is" . $d . "<br>";
                    echo "<br>";

                    echo "The answer of Number %=20 is" . $e . "<br>";
                }
                ?>
        </div> 
    
</body>
</html>