<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
    <h3>Now we going to practice more about <span>Array</span></h3>
    <hr>
    <h4>Now we are going to use <span>Array</span> to show cuntry and its Capital city.</h4>
    <?php 
        $capitals = [
            'Japan' => 'Tokyo',
            'France' => 'Paris',
            'Germany' => 'Berlin',
            'United Kingdom' => 'London',
            'United States' => 'Washington D.C.'
        ];
        foreach ($capitals as $country => $capital) {
            echo "The capital city of {$country} is $capital" . '<br>';
        }
    ?>
</body>
</html>