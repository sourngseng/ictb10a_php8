<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array Form</title>
</head>
<body>
    <?php
        // $persons=array();
    
    ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h2>បញ្ចូលពត៌មានខាងក្រោម</h2>
    <p>
        <label for="lblName">Enter Name:</label>
        <input type="text" name="txtName" for="lblName">
    </p>
    <p>
    <label for="lblAge">Enter Age:</label>
        <input type="text" name="txtAge" for="lblAge">
    </p>
    <p>
        <input type="submit" name="btnSave" value="Save">
    </p>
    <p>
        <input type="submit" name="btnGet" value="Get Data">
    </p>
</form>

<?php
        
    if(isset($_POST['btnSave'])){        
        if(isset($_POST['txtName']) && $_POST['txtAge']){
            $name=$_POST['txtName']??null;
            $age=$_POST['txtAge']??null;            
            $persons[$name]=$age;    
        }
    }
    if(isset($_POST['btnGet'])){
        echo "Result";
        foreach($persons as $name=>$age){
            echo "<h3>Name=$name, Age=$age</h3>";
        }
    }
?>

</body>
</html>