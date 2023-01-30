<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Insert Student</h2>
  <form action="student.php" method="post">
    <div class="mb-3 mt-3">
      <label for="id">Student ID:</label>
      <input type="text" class="form-control" id="id" placeholder="Enter Student ID" name="stuid">
    </div>

    <div class="mb-3">
      <label for="stuName">Full Name:</label>
      <input type="text" class="form-control" id="stuName" placeholder="Enter Full Name" name="full_name">
    </div>
    <div class="mb-3">
      <label for="gender">Gender:</label>
      <input type="text" class="form-control" id="gender" placeholder="Enter Gender" name="gender">
    </div>

    <div class="mb-3">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" placeholder="Enter Age" name="age">
    </div>
   
    <button type="submit" class="btn btn-primary">Save Student</button>
  </form>
</div>

</body>
</html>
