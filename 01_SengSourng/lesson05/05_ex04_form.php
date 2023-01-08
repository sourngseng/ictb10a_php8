<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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


<div class="container">
  <div class="row g-2">
    <div class="col-6">
      <div class="p-3 border bg-success">
        <h4 style="font-family: Hanuman;">បំពេញព័ត៌មាន</h4>
      </div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-success">
        <h4 style="font-family: Hanuman;">លទ្ធផលកូដក្រោយ Submit</h4>        
      </div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light">
      <form action="05_ex04_form.php">
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
    <div class="col-6">
      <div class="p-3 border bg-light">
        <h3>Email : <span class="badge bg-danger"><?php echo @$_email; ?></span></h3>
        <h3>Password : <span class="badge bg-danger"><?php echo @$_pswd; ?></span> </h3>
        <h3>Remember : <span class="badge bg-danger"><?php echo @$_remember; ?></span> </h3>
      </div>
    </div>
  </div>
</div>
</body>
</html>
