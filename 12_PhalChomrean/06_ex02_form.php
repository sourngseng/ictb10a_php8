<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: battambong;
            src: url(KHMEROSBATTAMBANG.TTF);
        }
        body{
            font-family:battambong;
        }
        .cl{
        padding:0px 20px 20px;
        border-style:solid;
        border-radius:20px;
        background-color:yellowgreen;
        border-width:0px;
       }
       .css1{
        border-radius:10px;
        height:30px;
        width:40%;
        border-width:0;
       }
       .css2{
        margin-top:10px;
        height:40px; width: 100px;
        background-color:#07efec;
        border-radius:10px;
       }
       .cl1{
        border:solid;
        border-radius:20px;
        background-color:#07efab;
        border-width:0px;
        padding:0px 20px 20px;
       }
    </style>
</head>
<body>
   <?php
   @$fname=$_POST['firstname'];
   @$lname=$_POST['lastname'];
   @$gend=$_POST['gender'];
   ?>
   <div class="cl">
    <form action="06_ex02_form.php" method="post">
       <h3 style="padding-top:15px;">បញ្ជូលព័ត៍មាន</h3>
        <div >
            <label for="fname">នាមត្រកូល</label><br>
            <input class="css1" type="text" id="fname" name="firstname" value="នាមត្រកូល"><br>
            <label for="lname">នាមខ្លូន</label><br>
            <input class="css1" type="text" id="lname" name="lastname" value="នាមខ្លូន"><br>
        </div>
        <div>
            <label>ភេទ</label><br>
            <input type="radio" id="male" name="gender" value="ប្រុស">
            <label for="male">ប្រុស</label><br>
            <input type="radio" id="female" name="gender" value="ស្រី">
            <label for="female">ស្រី</label>
        </div>
        <div>
            <label for="color">ជ្រើសរើសពណ៍</label><br>
            <select class="css1" name="color" id="color" width="200px">
                <option value="color">Red</option>
            </select>
        </div>
        <div>
            <input class="css2" type="submit" value="DisplayData">
        </div>
    </form>
   </div>
   <div class="cl1">
    <h3 style="padding-top:15px;">លទ្ធផលក្រោយSubmit</h3>
    <?php
        echo "Your First Name:" . $fname . "<br>"; 
        echo "Your Last Name:" . $lname . "<br>";
        echo "Your Gender:" . $gend . "<br>";
    ?>
   </div>
</body>
</html>