<?php
// Comparing Integers
echo 1<=> 1; // Output :0
echo 1<=> 2; // Output :2
echo 2<=> 1; // Output :1
// Comparing Floats
echo 1.5<=> 1.5; // Output :0
echo 1.5<=> 2.5; // Output :-1
echo 2.5<=> 1.5; // Output :1
// Comparing String
echo "x"<=> "x"; // Output :0
echo "x"<=> "y"; // Output :-1
echo "y"<=> "x"; // Output :1
?>