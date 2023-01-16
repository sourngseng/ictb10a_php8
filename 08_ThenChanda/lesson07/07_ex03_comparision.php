<?php 
    $x = 25;
    $y = 35;
    $z = "25";

    var_dump($x == $z); //លទ្ធផលទទួលបានគឺ: boolean true
    var_dump($x === $z); //លទ្ធផលទទួលបានគឺ: boolean flase
    var_dump($x != $z); //លទ្ធផលទទួលបានគឺ: boolean true
    var_dump($x !== $z); //លទ្ធផលទទួលបានគឺ: boolean true
    var_dump($x < $y); //លទ្ធផលទទួលបានគឺ: boolean true
    var_dump($x > $y); //លទ្ធផលទទួលបានគឺ: boolean flase
    var_dump($x <= $y); //លទ្ធផលទទួលបានគឺ: boolean true
    var_dump($x >= $y); //លទ្ធផលទទួលបានគឺ: boolean flase
?>
