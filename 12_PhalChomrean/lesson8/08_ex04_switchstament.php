<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Statement</title>
    <style>
        span{
            color:red;
        }

    </style>
</head>
    <body>
        <?php 
            @$brand=$_POST['number'];
        ?>
        <h2>Control Statement in PHP 8</h2>
        <hr>
        <h3>Now We are going to use Switch Statement.</h3>
        <p>The,<span> Switch Statement</span> is the statement the allow the user to choose one of the options</p>
        <hr>
        <p>Now you going to choose of one of these Brand car and it will show you the detail of the Brand car.</p>
        <p>-Toyota<br>-Mazda<br>-Ferrari <br>-Lamborghini</p>
        <form action="08_ex04_switchstament.php" method="post">
            <div>
                <label for="num">Enter Number</label>
                <input type="text" id="num" name="number">
            </div>
            <div style="margin-top: 10px;">
                <input type="submit" value="submit">
            </div>
        </form>
        <br>
        <?php
            echo "<p><span>These letters will tell you about the detail of these brand car.</span></p>";
            switch($brand){
                case("Toyota"):echo "It was founded by Kiichiro Toyoda and incorporated on August 28, 1937. Toyota is one of the largest automobile manufacturers in the world, producing about 10 million vehicles per year.";break;

                case("Mazda"):echo "In 2015, Mazda produced 1.5 million vehicles for global sales, the majority of which (nearly one million) were produced in the company's Japanese plants, with the remainder coming from a variety of other plants worldwide. During this time, Mazda was the 15th-largest automaker in terms of production globally.";break;

                case("Ferrari"):echo "Ferrari NV is a holding company. It manufactures luxury sports cars. The firm's models include the F12Berlinetta, 488GTB, 488 Spider, 458 Speciale, California T, the LaFerrari Hybrid, LaFerrari and the FF four-wheel drive. It participates in car racing such as Formula One.";break;

                case("Lamborghini"): echo "Automobili Lamborghini S.p.A.  is an Italian brand and manufacturer of luxury sports cars and SUVs based in Sant'Agata Bolognese.";break;

                default: echo "There is no kind of this brand car Sorry.";break;
            }
        ?>
    </body>
</html>