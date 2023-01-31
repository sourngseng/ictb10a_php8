<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container mt-3">
        <h2>Student Information</h2>
        <form action="student.php" method="post">
            <div class="mb-3 mt-3">
            <label for="stuid">StudentID:</label>
            <input type="text" class="form-control" id="stuid" placeholder="Student's ID" name="stuid">
            </div>
            <div class="mb-3">
            <label for="stuname">StudentName:</label>
            <input type="text" class="form-control" id="stuname" placeholder="Student's Name" name="stuname">
            </div>
            <div class="mb-3">
            <label for="stugender">StudentGender:</label>
            <input type="text" class="form-control" id="stugender" placeholder="Student's Gender" name="stugender">
            </div>
            <div class="mb-3">
            <label for="stuage">StudentAge:</label>
            <input type="text" class="form-control" id="stuage" placeholder="Student's Age" name="stuage">
            </div>
            <button type="submit" class="btn btn-primary">Save Studentinformation</button>
        </form>
    </div>

</body>
</html>
