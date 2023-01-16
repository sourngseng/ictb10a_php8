<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operater</title>
</head>
<body>
        <div>
            <?php 
                   echo "<h3>There are two kinds of string operater in php. There are Concatenation\" . \" and  Conatenation Assignment\" .= \" </h3>";
            
            ?>
            <h3>Enter the first word and the second word than it will be together</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div style="padding: 20px;">
                        <label for="letter1">Enter the first word</label>
                        <input type="text" id="letter1" name="letter1">
                    </div>
                    <div style="padding: 20px;">
                        <label for="letter2">Enter the second word</label>
                        <input type="text" id="letter2" name="letter2">
                    </div>
                    <div style="padding: 20px;">
                        <input type="submit" id="result" name="submit" value="Submit">
                    </div>
                </form>
        </div>
            <br>
            <?php
        if(isset($_POST['submit'])){  
            if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                $let1=$_POST['letter1'];
                $let2=$_POST['letter2'];

            }
        }
    ?>
        <div>
                <?php 
                if(isset($_POST['submit'])){
                   echo "The first word is" . $let1 .".<br>";
                   echo "The Second word is" . $let2 .".<br>";

                   echo "<p style='color:red;'>This line we are going to use Concatenation \" . \". </p>";
                   echo $let1 . $let2;

                   echo "<p style='color:red;'>This line we are going to use Concatenation Assignment \" .= \". </p>";
                   echo $let1 .= $let2;
                }
                ?>
        </div> 
</body>
</html>