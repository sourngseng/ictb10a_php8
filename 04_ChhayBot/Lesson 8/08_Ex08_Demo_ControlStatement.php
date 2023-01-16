<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Statement</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <h3> Using <span>if</span>Statement</h3>
    <?php
        date_default_timezone_set('Asia/Phnom_Penh');
            $t = date("h:i:sa");
            echo "<h3> The time is : <span>$t</span> </h3>";
            if ($t < "20") {
                echo "Have a good day!";
            }
    ?>
    <hr> 
    <h3>Using <span>if else</span>Statement</h3>
    <?php 
        $t = date("H");
        if($t < "10"){
            echo "Have a good morning!";
        }elseif ($t <"20"){
            echo "Have a good day!";
        }else {
            echo "Have a good night!";
        }
    
    ?>
    <hr>
    <h3>Using <span>Nested if or Nested Decision</span> Statement</h3>
    <?php
        $a=10;$b=10;$c=30;;
        if($a>$b){
            if($a>$c){
                echo "Max number is : $a";
            }else {
                echo "Max number is : $c";
            }
        }else{
            if($b>$c){
                echo "Max number is : $b";
            }else{
                echo "Max number is : $c";
            }
        }
    ?>
    <hr> 
    <h3>Using <span>Switch</span>Statement</h3>
    <?php 
        $favcolor = "red";
        switch ($favcolor){
            case "red":
                echo "Your favorite color is red!";break;
                case "blue":
                    echo "Your favorite color is blue!";break;
                    case "green":
                        echo "Your favorite color is green!";break;
                        case "black":
                            echo "Your favorite color is black!";break;
                            default:
                            echo "Your favorite color is neither red, blue, norgreen";
        }
        
    ?>
    <hr>
    <h3>Using <span>Ternary</span>Statement</h3>
    <?php
    $marks=40;
    print ($marks>=40)? "Pass" : "Fail";
    
    
    ?>
</body>
</html>