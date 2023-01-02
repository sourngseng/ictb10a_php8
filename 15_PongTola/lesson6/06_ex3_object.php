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
        class people{
            private $fname;
            private $lname;
        
        public function setName($firs_name,$last_name){
            $this ->fname=$firs_name;
            $this ->lname=$last_name;
        }
        public function showFullName(){
            return($this->fname." ".$this->lname);
        }
        }
    ?>
   
    
    <?php 
    @$fname=$_POST['firsname'];
    @$lname=$_POST['lastname'];

        $person=new people();
        $person->setName($fname,$lname);
    ?>
<form action="06_ex3_object.php" method="post">
    <div>
        <label for="fname">firs name</label>
        <input type="text" id="fname" name="firsname" >
    </div>
    <div>
        <label for="lname">last name</label>
        <input type="text" id="lname" name="lastname">
    </div>
    <input type="submit" value="save">
    
</form>    
<?php
    // echo "your name is :".$fname ." ".$lname;
    echo "your full name:".$person->showFullName();

    ?>
    
</body>
</html>

