<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php 
        class People{
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
    //កូដខាងក្រោមនេះគឺដើម្បីចាប់តម្លៃពី input control តាមឈ្មោះរបស់វា
    @$fName=$_POST['firstName'];
    @$lName=$_POST['lastName'];

    $person=new People();
    $person->setName($fName,$lName);
    ?>
    <form action="06_Ex3_Object.php" method="post">
        <div style="margin-bottom: 15px;">
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lastname">
    </div>
        <div style="margin-bottom: 15px;">
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lastname ">
    <input style="margin-left: 10px;" type="submit"value ="Save">
    </form>
    <h3>
        <?php 
    //បង្ហាញតម្លៃចេញពីអថេរដែលបានប្រកាស​ $fName​​ និង $lName
    // echo "ឈ្មោះរបស់អ្នកគឺ :". $fName ." ". $lName;   
    echo " ឈ្មោះរបស់អ្នកគឺ : ". $person->showFullName(); 
        
        
        ?>
    </h3>

</body>
</html>