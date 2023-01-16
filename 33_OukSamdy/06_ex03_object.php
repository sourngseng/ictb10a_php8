<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oject PHP8</title>
</head>
<body>
<?php 
       //កូដខាងក្រោមនេះគឺដើម្បីចាប់តម្លៃពី Input Control តាមឈ្មោះរបស់វា
       $fName=$_POST['firstName'];
       $lName=$_POST['lastName'];

       // បង្កើត Object ចេញពី Class people
       // $objectName=new ClassName;

       $person=new People();
       $person->setname($fName,$lName);
    
    
    
    ?>
    <?php 
    // បង្កើត Class
     class People{
        //បង្កើត properties / Attributes
        private $fName;
        private $lName;

        public function setName($first_name,$last_name)
        {
            this->fName=$first_name;
            this->lName=$last_name;
        }

        //​បង្កើត Method / function
        public function showFullName()
        {
            return ($this->fName ." ".this$->lName);
        }
     }
    ?>
    <form action="06_ex03_object.php" method="post">
       <div style="margin-buttom: 15px;">
        <label for="fanme">First Name:</label>
        <input type="text" id="fname" name="firstName"> 
       </div>
       <div style="margin-buttom: 15px;">
        <label for="lanme">Last Name:</label>
        <input type="text" id="lname" name="lastName"> 
       </div>
       <input style="margin-left: 120px" type="submit" value="Save">
    </form>
    <?php 
      //បង្ហាញតម្លៃចេញពីអថេ​ដែលបានប្រកាស $fname និង​ $lName
      // echo "ឈ្មោះរបស់អ្នកគឺ​ : ". $fName . " " .$lName;
      echo "ឈ្មោះពេញរបស់អ្នកគឺ : ".$person->showfullName();
      
      var_dump($person);
    
    ?>
    
</body>
</html>