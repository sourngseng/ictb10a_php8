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
<body style="padding-left: 25px;">
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
        $score=30;
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
<h4>ការប្រើប្រាស់ </span> Nested if</span>statement</h4>
<?php 
    $a=5;$b=20;$c=10;

    if($a>$b){
        if($a>$c){
            echo "<p>ឥលូវតម្លៃរបស់ a ធំជាងគេគឺ :<span>$a</span></p>";
        }else{
            echo "<p>ឥលូវតម្លៃរបស់ a>b និង a< c គេគឺ :<span>$c</span></p>";
        }
    }else{
        if($b>$c){
            echo "<p>ឥលូវតម្លៃរបស់ b ធំជាងគេគឺ :<span>$b</span></p>";
        }else{
            echo "<p>ឥលូវតម្លៃរបស់ a<b និង b< c គេគឺ :<span>$c</span></p>";
        }
    }
?>

<hr>

<h3>Using <span>Switch</span> Statement</h3>
    <?php
        $favcolor = "blue";
        switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
    ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            <label for="date">Your Day:</label>            
            <input type="date" name="dob">
            <input type="submit" name="checkDay" value="Submit">
        </p>
</form>


    <?php
    // var_dump(!isset($_POST['submit']));
        if(isset($_POST['checkDay'])){

            $slectDay=$_POST['dob'];
            // echo $slectDay;

            $d=strtotime($slectDay);
            echo "Created date is " . date("D,Y-m-d h:i:sa ", $d);
            echo "<br>";
            echo "Short Day : " . date("D", $d);
        
            $slectDay=date("D", $d);
        $slectDay=strtolower($slectDay);
      
        switch($slectDay){
            case "mon":
                $kh_day="ច័ន្ទ";
                break;
            case "tue":
                $kh_day="អង្គារ";
                break;
            case "wed":
                $kh_day="ពុធ";
                break;
            case "thu":
                $kh_day="ព្រហស្បត្តិ៍";
                break;
            case "fri":
                $kh_day="សុក្រ";
                break;
            case "sat":
                $kh_day="សៅរ";
                break;
            case "sun":
                $kh_day="អាទិត្យ";
                break;
            default:
                $kh_day="មិនត្រឹមត្រូវ!";
        }
        echo "<p>អ្នកបានជ្រើសរើសថ្ងៃ :<span>$kh_day</span></p>";
        }
        
    ?>

</body>
</html>

<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . 
    $cars[1] . " and " . $cars[2] . ".";
?>



<?php
    $even="";
    $odd="";

    for($i=1;$i<=50;$i++){
        if($i%2==0){
            $even = $even . " " .$i ;
        }else{
            $odd = $odd . " " .$i;
        }
        echo "The Even no = " . $even."<br/>";
        echo "The Odd no = " . $odd;
    }

   

        
?>

<?php
    $sub = array(
        "name" => "peter park",
        "email" => "peterpark@gmail.com", 
        "age" => 32
    );
    foreach($sub as $key => $value)
        echo $key . " :" .$value . "<br>";
?>



