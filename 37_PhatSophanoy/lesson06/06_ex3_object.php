<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
 <?php>   
    $a=NULL;
    var_dump($a);
    echo "<br>";

    $b="Hello Would";
    $b=NULL
    var_dump($b);

//កូដខាងក្រោមនេះគឺដើម្បីចាប់​តម្លៃពី input control តាមឈ្មោះរបស់វា
@$fName=$_POST['firstName'];
@$lName=$_POST['lastName'];    

// បង្កើត Object ចេញពី class People
// $objectName=new ClassName;

$person=new People();
$person->setName($fName,$lName);
<?>
<h2>Using resouce in PHP8</h2>

<?php>
    // open a file for reading
    $handle=fopen("note.txt","r");
    var_dupm="handle";
    echo "<br>";
    //connect to my SQL database server with default setting
    $link = mysqli_connect("localhost", "root");
        var_dump($link);
    
<?>

 <form action="06_ex03_object.php" method="post">
        <div style="margin-bottom: 15px;">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="firstName">
        </div>        
        <div style="margin-bottom: 15px;">
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lastName">
        </div>        
        <input style="margin-left: 120px;" type="submit" value="Save">
    </form>
</body>
</html>