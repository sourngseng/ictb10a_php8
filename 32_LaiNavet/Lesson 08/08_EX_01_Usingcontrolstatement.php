<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Control Structures</title>
    <style>
        span{
            color: red;
        }
        body{
             font-family: 'Courier New', 'Hanuman', monospace;
        }
    </style>
</head>
<body>
    <h4>ការប្រើប្រាស់ <span>if </span>statement</h4>
    <?php
        //ការកំណត់ល្វែងម៉ោងតាមប្រទេស
        date_default_timezone_set('Asia/Phnom_Penh');
        $myTime=date('H');
        $tNow=date('H:i:s a');
    ?>
    <?php         
        echo "ពេលនេះម៉ោង : <span>$tNow</span>";

        if($myTime>5){
            echo "<p>ក្រោកពីគេង</p>";
            echo "<p>អរុណសួស្តី!</p>";
        }    
    ?>
<hr>
    <h4>ការប្រើប្រាស់ <span>if else </span>statement</h4>

    <?php
        if($myTime<5){
            echo "<p>កំពុងគេង</p>";
            echo "<p>រាត្រីសួស្តី!</p>";
        }else{
            echo "<p>ក្រោកពីគេង</p>";
            echo "<p>អរុណសួស្តី!</p>";
        }
    ?>
<hr>
    <h4>ការប្រើប្រាស់ <span>if elseif else </span>statement</h4>
    <?php
        $score=50;
        if($score>=90){            
            $grade='A';
        }elseif($score>=80){
            $grade='B';
        }elseif($score>=70){
            $grade='C';
        }elseif($score>=60){
            $grade='D';
        }elseif($score>=50){
            $grade='E';
        }else{
            $grade='F';
        }    
    ?>
    <p>លទ្ធលសិក្សារបស់អ្នកគឺ 
        បានពិន្ទុ <span><?php echo $score; ?></span> 
        ទទួលបាន និទ្ទេស <span><?php echo $grade; ?></span> 
    </p>
<hr>
    <h4>ការប្រើប្រាស់ <span>Nested Decision </span>statement</h4>
    <?php 
        $a=5;$b=20;$c=10;
        if($a>$b){
            if($a>$c){
                echo "Max number is : $a";
            }else{
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
    <h4>ការប្រើប្រាស់ <span>Switch </span>statement</h4>
    <?php
        $favcolor = "Black";
        switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "Black":
            echo "Your favorite color is black!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
    ?>
<hr> 
    <h4>ការប្រើប្រាស់ <span>Ternary </span>statement</h4>
    <?php
    $marks=50;
    print ($marks<50) ? "pass" : "Fail";
?>
</body>
</html>