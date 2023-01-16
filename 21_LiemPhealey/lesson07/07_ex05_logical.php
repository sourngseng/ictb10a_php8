<?php
$year = 2016;
if(($year%400==0)||(($year%100!=0)&&($year%4==0))){
    echo "$year is a Leap year.";
}else{
    echo "$year is not a Leap year.";
}
?>