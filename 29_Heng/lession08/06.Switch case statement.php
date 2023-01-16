<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $today = date ("D");
    switch ($today) {
        case 'Mon':
            echo "Today is Monday. Clean your house .";
            break;
        
        case "Wes":
            echo "Today is Tuesday. Buy some food.";
            break;
        case "Wed":
            echo "Today is Wedneaday. Visit a doctor.";
            break;
        case "Thu":
            echo "Today is Thursday. Repair your car.";
            break;
        case "Fri":
            echo "Today is Friday. Party tonight.";
            break;
        case "Sat":
            echo "Today is Saturday. Its movie time.";
            break;
        case "Sun":
            echo "Today is Sunday. Do some rest.";
            break;
        default:
        echo"No information available for that day.";
        break;
    }
    ?>
</body>
</html>