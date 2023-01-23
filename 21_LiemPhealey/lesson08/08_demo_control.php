<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structure</title>
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
    <h1>សួស្ដី <span>បុប្ផា</span>តោះស្ដាប់គ្រូពន្យល់  !!!!!</h1>
    
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
            echo  "<p>អរុណសួស្តី!</p>";
        }    
    ?>
<hr>
<h2>ការប្រើប្រាស់ <span>if else </span>statement</h2>

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
<h2>ការប្រើប្រាស់ <span>if elseif else </span>statement</h2>
    <?php
        $score=99;
        if($score<=60){            
            $grade='F';
        }elseif($score<=70){
            $grade='E';
        }elseif($score<=80){
            $grade='D';
        }elseif($score<=90){
            $grade='C';
        }elseif($score<=95){
            $grade='B';
        }else{
            $grade='A';
        }    
    ?>
    <p>លទ្ធលសិក្សារបស់អ្នកគឺ 
        បានពិន្ទុ <span><?php echo $score; ?></span> 
        ទទួលបាន និទ្ទេស <span><?php echo $grade; ?></span> 
    </p>
<hr>



</body>
</html>