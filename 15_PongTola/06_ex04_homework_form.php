<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .body{
            background-color:red;
            width :50%;
            height: 380px;
            float: left;
        }
        .foot{
             background-color:blue;
            width :50%;
            height: 380px;
            float :right;
        }
        .alight1{
            margin-left: 10px;
            color:white; 
        }
        .alight2{
            margin-left: 10px;
            color:white;
        }
       .lengtext{
        width:400px;
       }
       .colordisplay{
        background-color:blue;
        color:white;
       }
       .lengcolor{
        width:400px;
       } 
    </style>

    <?php 
        @$fname=$_POST['firsname'];
        @$lname=$_POST['lastname'];
        @$forgender=$_POST['gender'];
        @$colors=$_POST['color'];
    ?>
    <form action="06_ex04_homework_form.php" method="post">
        
        <div class="body">
            <div class="alight1">
                     <h2>បញ្ចូលពណ៍មាន</h2>
                <label for="fname">នាមេត្រកូល</label><br>
                <input type="text" id="fname" name="firsname"  placeholder="នាមេត្រកូល" class="lengtext" required> <br>
                <label for="lname">នាមេត្រកូល</label><br>
                    <input type="text" id="lname" name="lastname"  placeholder="នាមេត្រកូល" class="lengtext" required>  <br> <br> <br>
            

                <label for="forgender">ភេទ</label> <br>
                    <input type="radio" id="forgender" name="gender" value="ប្រុស">ប្រុស <br>
                    <input type="radio" id="forgender" name="gender" value="ស្រី">ស្រី<br> <br> <br>
            
                <label for="colorset">ជ្រើសរើពណ៍</label>
                <select id="colorset" name="color" >
                    <option   value="bg-primary">primary</option>
                    <option   value="bg-success">success</option>
                </select> <br><br>
            
                <input class="colordisplay" type="submit" value="DispayData">
            </div>
        </div>
   
    </form>




    <!-- <?php echo"$colors"; ?> -->
    <div class="foot <?php echo"$colors"; ?>" >
        <div class="alight2 "  >
            <h2>លទ្ធផលក្រោយ submit</h2>

            <h3>Your First Name:<span style="background-color:red"  ><?php echo"$fname"; ?> </span></h3>
            <h3>Your Last Name:<span style="background-color:red" > <?php echo"$lname"; ?> </span></h3>
            <h3>Your Gender:<span style="background-color:red" > <?php echo"$forgender"; ?> </span> </h3> 
               
        </div>
    </div>
</body>
</html>










 <!-- <?php
                    echo "Your First Name:";
                    
                    echo "  $fname ";
                    
                    echo" <br>";
                    echo "Your Last Name:".$lname; 
                    echo" <br>";
                    echo "Your Gender:".$forgender; 
                     echo" <br>";
                     
                ?> -->