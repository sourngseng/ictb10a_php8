<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Object </title>
</head>
<body>
<?php 
    // Create Class 
    class People{

        // Create Properties / Attributes 
        private $fName;
        private $lName;

        public function setname($first_name,$last_Name){

            $this->fName = $first_name;
            $this->lName = $last_Name;

        }

        // Create Methods / Function 
        public function showFullName(){

            return ($this->fName." ".$this->lName);
        }

    }

?>
<?php

    //THis code create to show input control with Name
    @$fName = $_POST ['firstName'];
    @$lName = $_POST ['lastName'];

    // Create Object from Class People
    // $objectName = new ClassName;

    $person = new People();
    $person->setName($fName,$lName);
?>



<form action="06_ex04_Object.php" method="post" id="Color">

    <div style="margin-bottom: 15px;">
        <label for="fname"> First Name: </label>
        <input type="text" id="fname" name="firstName">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="lname"> Last Name: </label>
        <input type="text" id="lname" name="lastName">
    </div>

    <input style="margin-left: 120px;" type="submit" value="Save">

</form>

<h3>

<?php 

    // Show value that use $fName and $lName
    // echo "ឈ្មោះរបស់អ្នកគឺ : " .$fName ." " .$lName;
    echo "Your FullName is: " .$person->showFullName();

    // Show Data Type for person 
    // var_dump($person);
?>

</h3>
</body>
</html>