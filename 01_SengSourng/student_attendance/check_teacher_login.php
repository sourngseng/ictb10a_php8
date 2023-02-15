<?php

//check_teacher_login.php

include('admin/database_connection.php');

session_start();

$teacher_emailid = '';
$teacher_password = '';
$error_teacher_emailid = '';
$error_teacher_password = '';
$error = 0;

if(empty($_POST["teacher_emailid"]))
{
	$error_teacher_emailid = 'Email Address is required';
	$error++;
}
else
{
	$teacher_emailid = $_POST["teacher_emailid"];
}

if(empty($_POST["teacher_password"]))
{	
	$error_teacher_password = 'Password is required';
	$error++;
}
else
{
	$teacher_password = $_POST["teacher_password"];
}

if($error == 0)
{
	$query = "
	SELECT * FROM tbl_teacher 
	WHERE teacher_emailid = '".$teacher_emailid."'
	";

	$statement = $connect->prepare($query);
	if($statement->execute())
	{
		$total_row = $statement->rowCount();
		if($total_row > 0)
		{
			$result = $statement->fetchAll();
			foreach($result as $row)
			{
				if(password_verify($teacher_password, $row["teacher_password"]))
				{
					$_SESSION["teacher_id"] = $row["teacher_id"];
				}
				else
				{
					$error_teacher_password = "Wrong Password";
					$error++;
				}
			}
		}
		else
		{
			$error_teacher_emailid = "Wrong Email Address";
			$error++;
		}
	}
}

if($error > 0)
{
	$output = array(
		'error'			=>	true,
		'error_teacher_emailid'	=>	$error_teacher_emailid,
		'error_teacher_password'	=>	$error_teacher_password
	);
}
else
{
	$output = array(
		'success'		=>	true
	);
}

echo json_encode($output);

?>