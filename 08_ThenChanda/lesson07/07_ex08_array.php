<?php
    $x = array("a" => "Red", "b" => "Green", "c" => "Blue");
    $y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
    $z = $x + $y; // Union of $x and $y

    var_dump($z);
    var_dump($x == $y); // Output: boolean false
    var_dump($x === $y); // Output: boolean false
    var_dump($x != $y); // Output: boolean true
    var_dump($x <> $y); // Output: boolean true
    var_dump($x !== $y); // Output: boolean true
    
?>