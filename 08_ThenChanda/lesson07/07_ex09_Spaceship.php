<?php
    // Comparing Integers
    echo 1 <=> 1; // Output: 0
    echo "<br>";
    echo 1 <=> 2; // Output: -1
    echo "<br>";
    echo 2 <=> 1; // Output: 1
    echo "<br>";
    
    // Comparing Floats
    echo 1.5 <=> 1.5; // Output: 0
    echo "<br>";
    echo 1.5 <=> 2.5; // Output: -1
    echo "<br>";
    echo 2.5 <=> 1.5; // Output: 1
    echo "<br>";

    // Comparing Strings
    echo "x" <=> "x"; // Output: 0
    echo "<br>";
    echo "x" <=> "y"; // Output: -1
    echo "<br>";
    echo "y" <=> "x"; // Output: 1
?>
