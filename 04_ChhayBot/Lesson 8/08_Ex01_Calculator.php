<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple Calculator in PHP8</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        $num1=$num2=$ans=null;
        if(isset($_POST['sub'])){
            $num1=$_POST['n1'];
            $num2=$_POST['n2'];
            $oprnd=$_POST['sub'];
            if($oprnd=="+")
                $ans=$num1+$num2;
            else if($oprnd=="-")
                $ans=$num1-$num2;
            else if($oprnd=="x")
                $ans=$num1*$num2;
            else if($oprnd=="/")
                $ans=$num1/$num2;
        }
    ?>
<section class="container-fluid p-4 text-black">
  <div class="row gx-4 justify-content-center" 
    style="background-color: white; border-radius: 10px">
    <div class="col-md-6 mb-4 mb-lg-0">
      <div class="p-4 bg-info" style="border-radius: 10px">
      <h3 style="font-family: Hanuman;">ប្រមាណវិធីគិតលេខ</h3><hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-3 mt-3">
                <label for="firstNumber">First Number:</label>
                <input type="number" class="form-control" id="firstNumber" 
                placeholder="Enter First Number" 
                name="n1" value="<?php echo $num1; ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="secondNumber">Second Number:</label>
                <input type="number" class="form-control" id="secondNumber" 
                placeholder="Enter Second Number" 
                name="n2" value="<?php echo $num2; ?>">
            </div>
            
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="btn-group" role="group" aria-label="Operator Sign">
                        <button type="submit" name="sub" value="+" 
                        class="btn btn-success" style="font-size: 24px;"> + </button>
                        <button type="submit" name="sub" value="-" 
                        class="btn btn-warning" style="font-size: 24px;"> - </button>
                        <button type="submit" name="sub" value="x" 
                        class="btn btn-danger" style="font-size: 24px;"> x </button>
                        <button type="submit" name="sub" value="/" 
                        class="btn btn-primary" style="font-size: 24px;"> / </button>
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-0">
                <label for="result">Result:</label>
                <input type="number" class="form-control" id="result" 
                placeholder="Result" name="ans" value="<?php echo $ans; ?>">
            </div>            
        </form>
      </div>
    </div>    
  </div>
</section>
</body>
</html>