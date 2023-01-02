<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@300;400;700;900&display=swap" rel="stylesheet">

</head>
<body style="font-family: Hanuman !important;">

<?php
    @$_fname=$_POST['firstName'];
    @$_lname=$_POST['lastName'];
    @$_gender=$_POST['gender'];
    @$_colors=$_POST['colors'];

    $colors=array('Primary','Success','Info','Warning');
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 bg-info card pb-5">
            <h2 class="pt-3">បញ្ចូលពត៌មាន</h2>
            <form action="05_ex06_form_array.php" method="post">
              <div class="mb-3 mt-3">
                <label for="fname" class="pb-2">នាមត្រកូល:</label>
                <input type="text" class="form-control" id="fname" placeholder="នាមត្រកូល" name="firstName">
              </div>
              <div class="mb-3 mt-3">
                <label for="fname" class="pb-2">នាមខ្លួន:</label>
                <input type="text" class="form-control" id="fname" placeholder="នាមខ្លួន" name="lastName">
              </div>
              <div class="mb-3 mt-3">
                <label for="gender">ភេទ</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="ប្រុស" checked>
                    <label class="form-check-label" for="radio1">ប្រុស</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="ស្រី">
                    <label class="form-check-label" for="radio2">ស្រី</label>
                </div>
              </div>

              
                <div class="mb-3 mt-3">
                    <label for="select_color" class="pb-2">ជ្រើសរើសពណ៌</label>
                    <select class="form-select" id="select_color" name="colors">
                        <?php 
                        foreach($colors as $value){
                            ?>
                                <option 
                                    value="bg-<?php echo strtolower($value); ?>">
                                    <?php echo $value; ?>
                                </option>
                            <?php                            
                        }
                        ?>
                        <!-- <option value="bg-success">Success</option>
                        <option value="bg-info">Info</option>
                        <option value="bg-warning">Warning</option> -->
                    </select>
                </div>


              <button type="submit" class="btn btn-primary">Display Data</button>
            </form>
        </div>
        <div class="col-md-6 <?php echo $_colors==''?'bg-secondary':$_colors; ?> card pb-5 text-white">
            <h2 class="pt-3">លទ្ធផលក្រោយ Submit</h2>

                <h3>First Name : <span class="badge bg-danger"><?php echo $_fname; ?></span></h3>
                <h3>Last Name : <span class="badge bg-danger"><?php echo $_lname; ?></span> </h3>
                <h3>Gender : <span class="badge bg-danger"><?php echo $_gender; ?></span> </h3>
                
        </div>
    </div>
</div>

</body>
</html>
