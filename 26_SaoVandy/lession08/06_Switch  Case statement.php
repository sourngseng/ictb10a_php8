<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
$today= ("D");
  switch ($today){
    case "Mon":
      echo "Today is Monday . Clean your house.";
       break;
       case "Tue":
        echo "Today is Tuesday . Buy some foot.";
        break;
        case "Wed":
          echo "Today is Wednesday . Visit a doctor.";
        break;
         case "Thu":
            echo "Today is Thursday . Repair your car.";
                break;
                      case "Fri":
                      echo "Today is Friday. Party tonight.";
                          break;
                          case "Sun":
                      echo "Today is Sunday .Do some rest.";
                        break;
                        default:
                        echo "No information available for that day.";
                          
  }
?>
</body>
</html>