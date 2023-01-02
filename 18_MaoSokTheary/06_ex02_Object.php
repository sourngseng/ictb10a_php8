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
        // បង្កើតclass 
        class People{
            // បង្ក់ើត properties/ attributes
            private $fName;
            private $lName;

            public function setName($first_name,$last_name)
            {
                $this->fName=$first_name;
                $this->fName=$last_name;
            }

            // បង្កើត​ Methods / function
            public function showfullName()
            {
                return ($this->fName ." ".$this->lName);
            }
            
        }
    ?>
   <?php
    //កូដខាងក្រោមនេះគឺដើម្បីចាប់តម្លៃពី​ input controlតាមឈ្មោះរបស់វា
      @$fName=$_POST['firstName'];
      @$lName=$_POST['lastName'];
    // បង្កើតobjectចេញពីclass People
    // $objectName=new Class People;

      $person=new People();
      $person->setName($fName,$lName);
        
   ?>
   <form action="06_ex02_form.php" method="post">
   <div style="margin-bottom: 15px;">
      <label for="fname">First Name:</label>
      <input type="text" id="fname" name="firstName">
  </div>  
  <div style="margin-bottom: 15px;">  
      <label for="lname">Last Name:</label>
      <input type="text"id="lname" name="lastName">
  </div>    
  <input style="magin-left: 120px;" type="submit" value="save">
</form>
    
<h3>
  <?php
  //បង្ហាញតម្លៃចេញពីអថេរដែលបានប្រកាស​ $fName & $lName
  //echo"ឈ្មោះរបស់អ្នកគឺ: ".$fname . " " .$lName;
    echo"ឈ្មោះរបស់អ្នកគឺ:" .$person->showfullName();
  
   ?>
</h3>
    
</body>
</html>