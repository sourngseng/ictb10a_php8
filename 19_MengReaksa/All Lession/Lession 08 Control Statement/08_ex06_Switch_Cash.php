<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Switch...Case Statement </title>
</head>
<body>
    <?php
    
        $today = date("D");
        switch($today){
            case "Mon":
                echo "Today is Monday. Clean your House!";
                break;
            case "Tue":
                echo "Today is Tuesday. Buy some Food!";
                break;
            case "Wed":
                echo "Today is Wednesday. Visit a Doctor!";
                break;
            case "Thu":
                echo "Today is Thursday. Repair your Car!";
                break;
            case "Fri":
                echo "Today is Friday. Party tonight!";
                break;
            case "Sat":
                echo "Today is Saturday. It's movie Time!";
                break;
            case "Sun":
                echo "Today is Sunday. Do some Rest!";
                break;
            default:
                echo "No information avaiable for that day.";
                break;
        }
    
    ?>
</body>
</html>