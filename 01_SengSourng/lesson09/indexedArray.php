<?php 
// Normal Declaration
    $color1="Blue";
    $color2="Green";
    $color3="Yellow";
    echo "<h2>$color1</h2>";
    echo "<h2>$color2</h2>";
    echo "<h2>$color3</h2>";    

    // Now, declare with Array(indexed)
    $color=array("Blue","Green","Yellow","Black");
    foreach($color as $key => $value){
        echo "Array index=". $key .", value =".$value;
        echo "<br>";
    }
    echo "<br>";

    $color[9]="Color 9";
    foreach($color as $key => $value){
        echo "Array index=". $key .", value =".$value;
        echo "<br>";
    }



?>