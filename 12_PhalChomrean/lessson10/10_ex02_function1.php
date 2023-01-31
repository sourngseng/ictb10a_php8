<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function in PHP8 2</title>
</head>
<body>
    <h3>Now you going to enter the Number two time.</h3>
    <hr>
    <form action="10_ex02_function1.php" method="post">
        <div style="margin-top: 20px;">
            <label for="num1">Enter the Number:</label>
            <input type="text" id="num1" name="num1" placeholder="Number1">
        </div>
        <div style="margin-top: 20px;">
            <label for="num2">Enter the Number:</label>
            <input type="text" id="num2" name="num2" placeholder="Number2">
        </div>
        <div style="margin-top: 20px;">
            <button type="submit">Calculate</button>
        </div>
    </form>
    <?php  
        @$numb1=$_POST['num1'];
        @$numb2=$_POST['num2'];
    ?>
    <?php 
        function sum($numb1,$numb2){
            $sum=$numb1+$numb2;
            echo $numb1 . "+" . $numb2 . "=" .$sum;
        }
        function sub($numb1,$numb2){
            if($numb1>$numb2){
                $sub=$numb1-$numb2;
                echo $numb1 . "-" . $numb2 . "=" .$sub;
            }else{
                $sub=$numb2-$numb1;
                echo $numb2 . "-" . $numb1 . "=" .$sub;
            }
            
        }
        function mul($numb1,$numb2){
            $mul=$numb1*$numb2;
            echo $numb1 . "*" . $numb2 . "=" .$mul;
        }   
        function div($numb1,$numb2){
            if($numb1>$numb2){
                $div=$numb1/$numb2;
                echo $numb1 . "/" . $numb2 . "=" .$div;
            }else{
                $div=$numb2/$numb1;
                echo $numb2 . "/" . $numb1 . "=" .$div;
            }
        }
        echo "<br>";
        sum($numb1,$numb2);
        echo "<br>";
        sub($numb1,$numb2);
        echo "<br>";          
        mul($numb1,$numb2);
        echo "<br>";          
        div($numb1,$numb2);
        
    ?>
    
</body>
</html>