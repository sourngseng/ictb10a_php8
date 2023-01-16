<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>object form</title>
</head>
<body>
<?php 
    // បង្កើត class
        class People{
            // បង្កើត properties / attributes
            private $fName;
            private $lName;

            public function setName($first_name,$last_name)
            {
                $this->fName=$first_name;
                $this->lName=$last_name;
            }

            //បង្កើត Methods / functions
            public function showFullName()
            {
                return ($this->fName ." ".$this->lName);
            }
        }
    ?>

    <?php
        //កូដខាងក្រោមនេះគឺដើម្បីចាប់​តម្លៃពី input control តាមឈ្មោះរបស់វា
        @$fName=$_POST['firstName'];
        @$lName=$_POST['lastName'];    

        // បង្កើត Object ចេញពី class People
        // $objectName=new ClassName;

        $person=new People();
        $person->setName($fName,$lName);

    ?>
    <form action="06_ex03_object.php" method="post">
        <div style="margin-bottom: 15px;">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="firstName">
        </div>        
        <div style="margin-bottom: 15px;">
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lastName">
        </div>        
        <input style="margin-left: 120px;" type="submit" value="Save">
    </form>
    <h3>
        <?php
        //បង្ហាញតម្លៃចេញពីអថេរដែលបានប្រកាស $fName និង $lName
        // echo "ឈ្មោះរបស់អ្នកគឺ : ". $fName . " " . $lName;
        echo "Your Name is : ". $person->showFullName();

        var_dump($person);
        ?>
    </h3>
    </body>
    </html>




 