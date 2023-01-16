<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $t= date("H");
        if($t< "20"){
            echo strtoupper("have a good day!");
        }
    ?>
   

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
</body>
</html>