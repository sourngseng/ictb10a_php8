<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparision Operater</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){  
            if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                $numb1=$_POST['num1'];
                $numb2=$_POST['num2'];
            }  
        } else {  
            echo "Data is not submitted";  
        }  
    ?>
    
        <div>
            <h3>Enter Number then the Number will be </h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div style="padding: 10px;">
                        <label for="num1">Enter Number1</label>
                        <input type="text" id="num1" name="num1">
                    </div>
                    <div style="padding: 10px;">
                        <label for="num2">Enter Number2</label>
                        <input type="text" id="num2" name="num2">
                    </div>
                    <div style="padding: 10px;">
                        <input type="submit" id="result" name="submit" value="Result">
                    </div>
                </form>
        </div>
            <br>
        <div>
                <?php 
                if(isset($_POST['submit'])){
                    echo "Number1 is: " . $numb1 . "<br>";
                    echo "<br>";

                    echo "Number2 is: " . $numb2 . "<br>";
                    echo "<br>";

                    echo "Number1 == Number2 the Answer is";
                    echo var_dump($numb1==$numb2);

                    echo "<br>";
                    echo "Number1 === Number2 the Answer is";
                    echo var_dump($numb1===$numb2);

                    echo "<br>";
                    echo "Number1 != Number2 the Answer is";
                    echo var_dump($numb1!=$numb2);

                    echo "<br>";
                    echo "Number1 !== Number2 the Answer is";
                    echo var_dump($numb1!==$numb2);

                    echo "<br>";
                    echo "Number1 < Number2 the Answer is";
                    echo var_dump($numb1<$numb2);

                    echo "<br>";
                    echo "Number1 > Number2 the Answer is";
                    echo var_dump($numb1>$numb2);

                    echo "<br>";
                    echo "Number1 <= Number2 the Answer is";
                    echo var_dump($numb1<=$numb2);

                    echo "<br>";
                    echo "Number1 >= Number2 the Answer is";
                    echo var_dump($numb1>=$numb2);
                }
                ?>
        </div> 
</body>
</html>