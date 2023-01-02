<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Datatype</title>
</head>
<body>
    <?php
        $age=27;
        // var_dump($age);
        echo "Your age is :".$age;
        echo "<br>";
        echo "Your age is :$age"; // អថេរ អាចសរសេរក្នុង​ double quote បាន
        echo "<br>";

        echo 'Your age is :$age';  //អថេរមិនអាចសរសេរក្នុង​ single quote បានទេ
    ?>
</body>
</html>