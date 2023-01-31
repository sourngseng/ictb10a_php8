<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input and Output the Input Array</title>
    <style>
        span{
            color:red;
        }
        .frm{
            float: right;
            margin-right: 790px;
            width: fit-content;
            border:solid;
            border-width: 10px;
            border-radius: 25px;
            border-color: red green yellow blue;
            padding: 20px;
        }
        label{
            color: yellowgreen;
        }
        input{
           
            border: solid;
            border-width: 1px;
            border-radius: 5px;
            background-color: #30d7f0;
            border-color: green;
        }

    </style>
</head>
<body>
    <h3 style="text-align: center;">Now we are going to <span>input data</span> in to the Array and then we are going to<span> out put data</span> that we just input.</h3>
    <hr>
    <h4 style="text-align: center;">Now We need to create the form first.</h4>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="frm">
        <div>
            <label for="nam">Enter the Name:</label>
            <input type="text" id="nam" name="Prname">
        </div>
        <div style="margin-top:10px;">
            <label for="age">Enter the Age:</label>
            <input type="text" id="age" name="Prage">
        </div>
        <div style="margin-top:10px;">
         <input type="submit" name="submit">
        </div>
    </form>
    
</body>
</html>