<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Statement</title>
    <style>
        span{
            color:red;
        }

    </style>
</head>
<body>
    <?php 
    @$number=$_POST['number'];
    ?>
    <h2>Control Statement in PHP 8</h2>
    <hr>
    <h3>Now We are going to use <span> elseif else Statemnt</span>.</h3>
    <p>The <span> elseif else Statement</span> is the control structure that has a lot of options.</p>
    <p>Now you going to input the password like<span> 123,456,789 </span>if you input the different password it will show you <span>Please try again later!!!<span>.</p>
    <form action="08_ex03_ifelseifelsestament.php" method="post">
        <div>
            <label for="num">Enter Number</label>
            <input type="text" id="num" name="number">
        </div>
        <div style="margin-top: 10px;">
            <input type="submit" value="submit">
        </div>
    </form>
    <?php 
        if($number==123){
            echo "<p>Your password is right.</p>";
        }elseif($number==456){
            echo "<p>Your password is right.</p>";
        }elseif($number==789){
            echo "<p>Your passward is right.</p>";
        }else{
            echo "<p><span>Please try again later!!!</span></p>";
        }
    ?>
</body>
</html>