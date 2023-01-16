<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="06_ex04_form.php" method="post"></form>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="ប្រុស">
        <label class="form-check-label" for="radio2">ប្រុស</label>
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="ស្រី">
        <label class="form-check-label" for="radio2">ស្រី</label>
    </div>

    <div class="mb-3 mt-3">
        <label for="select_color" class="pb-2">ជ្រើសរើសពណ៌</label>
        <select class="form select" id="select_color" name="color">
            <option value="bg-primary">Primary</option>
            <option value="bg-success">Success</option>
            <option value="bg-info">Info</option>
            <option value="bg-warning">Warning</option>
        </select>
    </div>    

    <button type="submit" class="btn btn-primary">Save</button>
</form>
            </div>

            <div class="col-md-6 bg-success card pb-5 text white">
                <h2>លទ្ធផលក្រោយ Submit</h2>
                <h3>First Name : <span class="badge bg-success"><?php ".$_fname"; ?></span></h3>
                <h3>last Name : <span class="badge bg-success"><?php ".$_lname"; ?></span></h3>
                <h3>Gender : <span class="badge bg-success"><?php ".$_gender"; ?></span></h3>
            </div>
        </div>
    </div>
</body>
</html>
                    
