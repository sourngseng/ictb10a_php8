<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Information</title>
    <style>
        body{
            text-align: center;
        }
        .php{
            border: solid;
            width: fit-content;
            border-radius: 20px;
            border-color: green;
            padding: 20px;
            float: right;
            margin-right: 810px;
        }
    </style>
</head>
<body>
    <h2>Students Information</h2>
    <hr>
    <h3>This is a student information.</h3>
    <hr>
    <div class="php">
        <?php 
            include_once('cls_students.php');

            $objStu = new students;
            
            $id=$_POST['stuid'];
            $name=$_POST['stuname'];
            $gender=$_POST['stugender'];
            $age=$_POST['stuage'];
            
            $objStu->initialData($id, $name, $gender,$age);

            $objStu->getStudentData();
        ?>
    </div>
    
</body>
</html>