<?php
    $x = "Hello";
    $y = " World!";
    echo $x . $y; // លទ្ធផលបាន: Hello World!
    echo"<br>";
    $x .= $y;
    echo $x; // លទ្ធផលបាន: Hello World!
    echo"<br>";

    echo $x.=$y;
?>