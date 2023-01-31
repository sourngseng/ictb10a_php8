<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function in PHP8</title>
</head>
<body>
    <h2>Now I'm going to use Function's PHP8.</h2>
    <hr>
    <h3>We going to use all of this operater( -=, +=, *=, /= )</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="num">Enter the Number:</label>
        <input type="text" id="num" name="num" placeholder="Number">
        <input type="submit" name="submit">
    </form>
    <?php 
        if(isset($_POST['submit'])){  
            if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                $numb=$_POST['num'];
            }  
        }
    ?>
    <?php 
         function sum($numb){
            $sum=$numb+=20;
            echo "This Number is the Number the you enter and +=2= and the answer is " . $sum;
        }
        function sub($numb){
            $sub=$numb-=20;
            echo "This Number is the Number the you enter and -=2= and the answer is " . $sub;
        }
        function mul($numb){
            $mul=$numb*=20;
            echo "This Number is the Number the you enter and *=2= and the answer is " . $mul;
        }
        function div($numb){
            $div=$numb/=20;
            echo "This Number is the Number the you enter and /=2= and the answer is " . $div;
        }
        if(isset($_POST['submit'])){
            sum($numb);
            echo "<br>";
            
            sub($numb);
            echo "<br>";

            mul($numb);
            echo "<br>";

            div($numb);
        }
    ?>
</body>
</html>