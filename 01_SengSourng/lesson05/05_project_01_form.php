<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project 01-Get Data from form with GET</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
// ពិនិត្យមើលថាយើងបានចុចលើប៊ុតុង Submit ឬអត់
  if(isset($_GET['submit'])){
    // ពេលយើងបានចុច
    $_email=$_GET['email'];
    $_pswd=$_GET['pswd'];
    $_remember=$_GET['remember'];
  }
?>
<section class="container-fluid p-4 text-white">
  <h1 class="text-success" style="font-family: Hanuman;">ទទួលតម្លៃពីForm ប្រើ GET</h1>

  <div class="row gx-4" style="background-color: white; border-radius: 10px">
    <div class="col-md-6 mb-4 mb-lg-0">
      <div class="p-4 bg-info" style="border-radius: 10px">
      <h3 style="font-family: Hanuman;">បញ្ចូលព័ត៌មាន</h3><hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary"​ name="submit">Submit</button>
        </form>
      </div>
    </div>
    <div class="col-md-6 mb-4 mb-lg-0">
      <div class="p-4" style="background-color: green; border-radius: 10px">
      <h3 style="font-family: Hanuman;">លទ្ធផលក្រោយ Submit</h3><hr>

      <h3>Email : <span class="badge bg-danger"><?php echo @$_email; ?></span></h3>
        <h3>Password : <span class="badge bg-danger"><?php echo @$_pswd; ?></span> </h3>
        <h3>Remember : <span class="badge bg-danger"><?php echo @$_remember; ?></span> </h3>
      </div>
    </div>
  </div>

  
  <div class="row mt-4" style="background-color: white; border-radius: 10px">
    <div class="col-md-3 mb-4 mb-lg-0">
      <div class="p-3" 
      style="background-color: green; border-radius: 10px">
        <div 
            style="font-family: Hanuman,Consol; font-size:23px;">
            លទ្ធផលក្រោយ Submit:
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-4 mb-lg-0">
      <div class="p-3" 
      style="background-color: green; border-radius: 10px">
      <div style="font-family: Hanuman,Consol; font-size:23px;">
        <?php echo $_email; ?></div>
      </div>
    </div>
    <div class="col-md-3 mb-4 mb-lg-0">
      <div class="p-3" style="background-color: green; border-radius: 10px">
        <div style="font-family: Hanuman,Consol; font-size:23px;">
            <?php echo $_pswd; ?>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-4 mb-lg-0">
      <div class="p-3" style="background-color: green; border-radius: 10px">
        <div style="font-family: Hanuman,Consol; font-size:23px;">
            <?php echo $_remember; ?>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
