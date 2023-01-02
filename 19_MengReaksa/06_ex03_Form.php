<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <style>
        body {
        font-family: 'Times New Roman', Times, serif;
        }

        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 25%;
        background-color: #352FEC;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #21D251;
        }

        div.container {
        border-radius: 5px;
        background-color: #0ABEC5;
        padding: 20px;
        }
    </style>

</head>
<body>

        <?php 

            // Display input
            @$fname = $_POST ['firstname'];
            @$lname = $_POST ['lastname'];
            @$gender = $_POST ['gender'];
            // @$Msex = $_POST ['male'];
            // @$Fsex = $_POST ['female'];
            // @$color = $_post ['primary'];
            
        ?>
    
    <div class="container">
        <h2> បញ្ចូលព័ត៌មាន </h2>
        <form action="06_ex03_Form.php" method="post"
            <label for="fname"> នាមត្រកូលៈ </label>
            <input type="text" id="fname" name="firstname" placeholder=" នាមត្រកូល ">

            <label for="lname"> នាមខ្លួនៈ </label>
            <input type="text" id="lname" name="lastname" placeholder=" នាមខ្លួន ">

             <h4> ភេទ </h4>
             
            
            <input type="radio" id="gender" name="gender"> 
            <label for="male"> ប្រុស </label> <br>

            <input type="radio" id="gender" name="gemder"> 
            <label for="female"> ស្រី </label> <br>

            <!-- <h4> ជ្រើសរើសព័ណ៌ </h4>
            <label for="country"> ជ្រើសរើសព័ណ៌ </label>
            <select id="color" name="color">
            <option value=" primary "> Primary </option>
            <option value=" blue "> Blue </option>
            <option value=" red "> Red </option>
            </select> -->
        
            <input type="submit" value="Save">
        </form>
    </div>

    <h2>
        <?php
            echo "លទ្ធផលក្រោយ Submit <br>";
            echo "First Name: " .$fname;
            echo "<br>";
            echo "Last Name: " .$lname;
            echo "<br>";
            echo "Gender: " .$sex;
        ?>
    </h2>


</body>
</html>