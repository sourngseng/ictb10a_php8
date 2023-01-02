<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domo PHP8 with DataType</title>
</head>
<body>
    <?php 
    //Class Definition
    class greeting
    // properties
    public $str = ""
    
    ?>
    <?php
    //កូដខាងក្រោមនេះគឺដើម្បីចាប់តម្លៃពី ​input control តាមឈ្មោះរបស់
    @$fName=$_POST['firstName'];
    @$lName=$_POST['LastName'];
    ?>
 <form action="06_ex02_form.php" method="post">
    <div style="margin-bottom: 15px;">
            <label for="fname">First Name: Name:</label>
            <input type="text" id="fname" name="firstName">
    </div>
    <div style="margin-bottom: 15px;">
            <label for="lname">last Name: Name:</label>
             <input type="text" id="lname" name="lasttName">
    </div>
        <input style="margin: left 120px;"type="submit" value="save">
 </form>
  <h3>
  <?php
  //បង្ហាញតម្លៃចេញពីអថេរដែលបានប្រកាស​ $fName និង $lName
  echo "ឈ្មោះរបស់អ្នកគឺ​ : " . $fName . "" . $lName;
  ?>
  </h3>
</body>
</html>