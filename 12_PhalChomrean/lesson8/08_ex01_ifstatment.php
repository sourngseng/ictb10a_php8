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
    <h2>Control Statement in PHP 8</h2>
    <hr>
    <h3>Now We are going to use If Statemnt.</h3>
    <p>Now if you Enter the Number 12 it will show you<span> "Thank you"</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="num">Enter Number</label>
            <input type="text" id="num" name="number">
        </div>
        <div style="margin-top: 10px;">
            <input type="submit" value="submit">
        </div>
    </form>
    <?php 
      if(isset($_POST['submit'])=="submit"){
        // $number=null;
            $number=$_POST['number'];
            if($number==12){
              echo "<p>Your Number is 12 so <span>Thank you.</span></p>";
            }else{
                echo " Not true!";
            }
        }
    
    ?>
</body>
</html>