<?php
$year =2014;  

if ($year % 400==0)||(($year % 100!=0) &&( $year % 4==0)) {
    echo "$year is my leap year.";
}else{
    echo"$year is not my leap year.";
}
?>  