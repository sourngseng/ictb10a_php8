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
        //understanding variable scope
        
        function customfont(){
            $name ="tola";
            echo $name; 
        }
        customfont();
        //echo $name;  //កូដនេះនិងerror ពីព្រោះvariable $nameប្រកាសក្នុងfunctionគឺប្រើបានតែក្នុងfuntion
        //មិនអាចប្រើខាងក្រៅបានទេ ប្រចង់ដំណើរការត្រូវប្រកាសក្រៅfuntion
        echo "<br>";
        
        
        $cow="my cow name kaka";
        function animal(){
            echo $cow;
        }
        //aninmal();//កូដនេះមិនដំណើរការ ព្រោះ$cow មិនបានប្រកាសក្នុងfunctionទេ
        echo $cow;
    ?>
   
</body>
</html>