<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Variable</title>
    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
    <h3>Array Variable</h3>
    <p>Array is the variable the allow the user to store a lots of data in a variable.</p>
    <hr>
    <h4>How we create Array in PHP</h4>
    <p>This how we create Array.</p>
    <?php 
        $text='<p><span>$name=array("chomrean","somanita","manghour");</span></p>';
        echo $text;
    ?>
    <hr>
    <h4>How we out put the Array</h4>
    <p>Array in Php we can output by using <span>Loop</span> or <span>Foreach</span>.</p>
    <p>Now we use<span> Loop </span> output the data.</p>
    <p>I am going to create Array variable about color and output the Array by using <span>Loop</span>. </p>
    <p>This is the code of it.</p>
    <pre><span>
        for($i=0;$i<4;$i++){
            echo "This color is" $color[$i];
        }
        </span>
    </pre>
    <?php 
        $color=array("Red","Blue","Yellow","Green");
        for($i=0;$i<4;$i++){
            echo "This color is" . $color[$i];
            echo "<br>";
        }
    ?>
    <hr>
    <p>Now we going to use <span>Foreach</span> to output Array.</p>
    <p>This is the code of it.</p>
    <pre>
        <span>
        foreach($color as $coulor=> $colors){
            echo "This color is " . $colors;
        }
        </span>
    </pre>
    <?php 
        foreach($color as $coulor=> $colors){
            echo "This color is " . $colors;
            echo "<br>";
        }
    ?>
    
</body>
</html>