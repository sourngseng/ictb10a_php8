<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    <title>Using Switch</title>
</head>
<body>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            <label for="date">Your Day:</label>            
            <input type="date" name="txtdate" value="300">
            <input type="submit" name="btnSubmit" value="Submit">
        </p>
</form>
<?php
   
    if(isset($_POST['btnSubmit'])){
        var_dump($_POST['txtdate']);

            $date=date_create($_POST['txtdate']);
            echo date_format($date,"Y/m/d H:i:s");
        
            echo "<br>";

            $date = new DateTime($_POST['txtdate']);
            $result = $date->format('D');
            echo $result;
        
        $txtdate=strtolower($result);

        switch($txtdate){
            case "mon":
                $kh_day="ច័ន្ទ";
                break;
            case "tru":
                $kh_day="អង្គារ";
                break;
            case "wed":
                $kh_day="ពុធ";
                break;
            case "thu":
                $kh_day="ព្រហស្បត្តិ៍";
                break;
            case "fri":
                $kh_day="សុក្រ";
                break;
            case "sat":
                $kh_day="សៅរ";
                break;
            case "sun":
                $kh_day="អាទិត្យ";
                break;
            default:
                $kh_day="មិនត្រឹមត្រូវ!";
        }
        echo "<p>អ្នកបានជ្រើសរើសថ្ងៃ :<span>$kh_day</span></p>";
        }        
    ?>
</body>
</html>