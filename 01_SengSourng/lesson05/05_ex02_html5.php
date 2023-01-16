<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Echo with HTML5 Tags</title>
    <style>
        h1{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        echo "Hello , Sourng!";
        echo "<h1>Hello Heading 1!</h1>";        
        echo "<img src='../images/img_avatar1.png' width='150'>";
    ?>

    <?php
        print "<h2>Hello , Sourng!</h2>";
        print "<h1>Heading with Print()!</h1>";        
        print "<img src='../images/img_avatar1.png' width='150'>";
    ?>

    <?php
        // Displaying HTML code
        print "<h4>This is a simple heading.</h4>";
        print "<h4 style='color: red;'>
        This is heading with style.</h4>";
    ?>

</body>
</html>