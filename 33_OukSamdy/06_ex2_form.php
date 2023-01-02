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
      @$fName=$_POST['firstName'];
      @$lName=$_POST['lastname'];

      //Create Object from class people
      // $objectName ClassName;

      $person=new people();
      $person->setName
    ?>
    <form action="06_ex2_form.php" method="post">
        <div style="margin-buttom: 15px;">
            <label for="fName">First Name:</label>
            <input type="text" id="fName" name="firstname">
        </div>
        <div style="margin-buttom:" 15px;>
          <label for="lName">Last Name:</label>
          <input type="text" id="lName" name="lName">
        </div>
        <input style="margin-left: 120px;" type="submit" value="save">
    </form>
    <h3>
        <?php
          //Display Value @$fname @$lname
          echo "ឈ្មោះរបស់អ្នកគឺ​: ". $fname . " " . $lname;
        ?>
    </h3>
    
</body>
</html>