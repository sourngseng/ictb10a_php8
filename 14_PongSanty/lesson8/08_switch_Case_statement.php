<?php
$today =date ("D");
switch ($today){
    case "Mon":
        echo "Today is Monday .Clean your house.";break;
    case "Tue":
        echo "Today is Tueseday .Buy some food.";break;
    case"Wed":
        echo "Today is Wednesday. visit a doctor.";break;    
    case"Thu":
        echo "Today is Thursday. Repair your car";break;
    case "Fri":
        echo "Today is Friday. party tonight.";break;   
    case "Sat":
        echo "Today is Saturday. Its movie time.";break;
    case "Sun":
        echo "Today is sunday. Do some  rest.";break;
    default:
       echo "No informtion availble for that day.";break;        
}
?>