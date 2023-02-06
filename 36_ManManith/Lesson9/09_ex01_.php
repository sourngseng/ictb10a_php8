
<?php
        
     @$fName=$_POST['firstName'];
    @$lName=$_POST['lastName'];
?>

    <form action="09_ex01_form.php" method="post">
        <div style="margin-bottom: 10px;">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="firstName">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lastName">
        </div>
        <input type="submit" value="Save">;
    </form>
    <h3>
        <?php
        echo "Your Name is :". $fName . " " . $lName;
        ?>
    </h3>
        
