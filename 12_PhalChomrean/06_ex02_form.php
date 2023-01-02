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
            float:left 90px;
        }
        .cl{
        padding:0px 20px 20px;
        border-style:solid;
        border-radius:20px;
        background-color:yellowgreen;
        border-width:0px;
        float: left;
        width: 47%;
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
        border-width:0;
       }
       .cl1{
        border:solid;
        border-radius:20px;
        background-color:#07efab;
        border-width:0px;
        padding:0px 20px 20px;
        float: right;
        width: 48.6%;
        height: 419px;
        
       }
    </style>
</head>
<body>
   <?php
   @$fname=$_POST['firstname'];
   @$lname=$_POST['lastname'];
   @$gend=$_POST['gender'];
//    @$re=$_POST['red'];
//    @$blu=$_POST['blue'];
//    @$yel=$_POST['yellow'];
//    @$pur=$_POST['purple']
   ?>
   <div class="cl">
    <form action="06_ex02_form.php" method="post">
       <h2 style="padding-top:10px;">បញ្ជូលព័ត៍មាន</h2>
        <div >
            <label for="fname">នាមត្រកូល</label><br>
            <input class="css1" type="text" id="fname" name="firstname" ><br>
            <label for="lname">នាមខ្លូន</label><br>
            <input class="css1" type="text" id="lname" name="lastname" ><br>
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
                <option value="color" id="red" name="red">Red</option>
                <option value="color" id="yellow" name="yellow">Yellow</option>
                <option value="color" id="blue" name="blue">Blue</option>
                <option value="color" id="purple" name="purple">Purple</option>
            </select>
        </div>
        <div>
            <input class="css2" type="submit" value="DisplayData">
        </div>
    </form>
   </div>
   <div class="cl1">
        <h2 style="padding-top:10px;">លទ្ធផលក្រោយSubmit</h2>
        <?php
             echo "Your First Name: " . $fname . "<br>"; 
             echo "Your Last Name: " . $lname . "<br>";
             echo "Your Gender: " . $gend . "<br>";
            // if ($rd=="red"){
            //     echo "Your First name:<p style='background-color:red;'>" . $fname . "</p>";
            //     echo "Your Last name: <p style='background-color:red;'>" . $lname . "</p>" ;
            //     echo "Your Gender: <p style='background-color:red;'>" . $gend . "</p>" ;
            // }elseif($yel){
            //     echo "Your First name:<p style='background-color:yellow;'>" . $fname . "</p>";
            //     echo "Your Last name: <p style='background-color:yellow;'>" . $lname . "</p>" ;
            //     echo "Your Gender: <p style='background-color:yellow;'>" . $gend . "</p>" ;
            // }elseif($blu){
            //     echo "Your First name:<p style='background-color:blue;'>" . $fname . "</p>";
            //     echo "Your Last name: <p style='background-color:blue;'>" . $lname . "</p>" ;
            //     echo "Your Gender: <p style='background-color:blue;'>" . $gend . "</p>" ;
            // }elseif($pur){
            //     echo "Your First name:<p style='background-color:purple;'>" . $fname . "</p>";
            //     echo "Your Last name: <p style='background-color:purple;'>" . $lname . "</p>" ;
            //     echo "Your Gender: <p style='background-color:purple;'>" . $gend . "</p>" ;
            // }
        ?> 
   </div>
</body>
</html>