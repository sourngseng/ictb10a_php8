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
        $name ="hello cambodia";
        function customfont(){
            global $name;
            echo $name; 
        }
        customfont();
        echo "<br>";
        echo $name; 
        echo "<br>";
        
        
        $animal ="i have 5cow";
        function animal(){
            global $animal;
            echo $animal;
        }
        animal();
        echo "<br>";
        echo $animal;

        echo "<br>";//ការផ្ដល់តម្លៃថ្មី
        $animal="dog 5";
        animal();
        echo "<br>";
        echo $animal;

        
        
        // $cow="my cow name kaka";
        // function animal(){
        //     echo $cow;
        // }
        // //aninmal();//កូដនេះមិនដំណើរការ ព្រោះ$cow មិនបានប្រកាសក្នុងfunctionទេ
        // echo $cow;
    ?>
   
</body>
</html>