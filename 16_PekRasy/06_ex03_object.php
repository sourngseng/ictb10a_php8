<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesing DataType with From</title>
</head>
<body>
    <?php
        class people{
            private $fName;
            private $lName;
            
            public function setName($first_name,$last_name)
            {
                $this->fName=$first_name;
                $this->lName=$last_name;
            }

            public function showFullName()
            {
                return ($this->fName ." ".$this->lName);
            }
        }
    ?>
    <?php 
        @$fName=$_POST['firstName'];
        @$lName=$_POST['lastName'];

        @$person=new people();
        @$person->setName($fName,$lName);

    ?>
    <form actoin="06_ex03_object.php" method="post">
        <div style="margin-bottom: 15px;">
             <label for="fname">First Name:</label>
             <input type="text" id="fname" name="firstName">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="lname">last Name:</label>
            <input type="text" id="lname" name="lastName">
        </div>
        <input style="margin-left: 120px;" type="submit" value="Save";>
    </form>
    <h3>
        <?php 
        echo "ឈ្មោះពេញរបស់អ្នកគឺ​ : ". $person->showFullName();

        ?>
    </h3>
</body>
</html>