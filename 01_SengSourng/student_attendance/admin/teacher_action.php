<?php

//teacher_action.php

include('database_connection.php');

session_start();

if(isset($_POST["action"]))
{
	if($_POST["action"] == "fetch")
	{
		$query = "
		SELECT * FROM tbl_teacher 
		INNER JOIN tbl_grade 
		ON tbl_grade.grade_id = tbl_teacher.teacher_grade_id 
		";
		if(isset($_POST["search"]["value"]))
		{
			$query .= '
			WHERE tbl_teacher.teacher_name LIKE "%'.$_POST["search"]["value"].'%" 
			OR tbl_teacher.teacher_emailid LIKE "%'.$_POST["search"]["value"].'%" 
			OR tbl_grade.grade_name LIKE "%'.$_POST["search"]["value"].'%" 
			';
		}
		if(isset($_POST["order"]))
		{
			$query .= '
			ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].'
			';
		}
		else
		{
			$query .= '
			ORDER BY tbl_teacher.teacher_id DESC 
			';
		}
		if($_POST["length"] != -1)
		{
			$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		$data = array();
		$filtered_rows = $statement->rowCount();
		foreach($result as $row)
		{
			$sub_array = array();
			$sub_array[] = '<img src="teacher_image/'.$row["teacher_image"].'" class="img-thumbnail" width="75" />';
			$sub_array[] = $row["teacher_name"];
			$sub_array[] = $row["teacher_emailid"];
			$sub_array[] = $row["grade_name"];
			$sub_array[] = '<button type="button" name="view_teacher" class="btn btn-info btn-sm view_teacher" id="'.$row["teacher_id"].'">View</button>';
			$sub_array[] = '<button type="button" name="edit_teacher" class="btn btn-primary btn-sm edit_teacher" id="'.$row["teacher_id"].'">Edit</button>';
			$sub_array[] = '<button type="button" name="delete_teacher" class="btn btn-danger btn-sm delete_teacher" id="'.$row["teacher_id"].'">Delete</button>';
			$data[] = $sub_array;
		}
		$output = array(
			"draw"				=>	intval($_POST["draw"]),
			"recordsTotal"		=> 	$filtered_rows,
			"recordsFiltered"	=>	get_total_records($connect, 'tbl_teacher'),
			"data"				=>	$data
		);
		echo json_encode($output);
	}

	if($_POST["action"] == 'Add' || $_POST["action"] == "Edit")
	{
		$teacher_name = '';
		$teacher_address = '';
		$teacher_emailid = '';
		$teacher_password = '';
		$teacher_grade_id = '';
		$teacher_qualification = '';
		$teacher_doj = '';
		$teacher_image = '';
		$error_teacher_name = '';
		$error_teacher_address = '';
		$error_teacher_emailid = '';
		$error_teacher_password = '';
		$error_teacher_grade_id = '';
		$error_teacher_qualification = '';
		$error_teacher_doj = '';
		$error_teacher_image = '';
		$error = 0;

		$teacher_image = $_POST["hidden_teacher_image"];
		if($_FILES["teacher_image"]["name"] != '')
		{
			$file_name = $_FILES["teacher_image"]["name"];
			$tmp_name = $_FILES["teacher_image"]["tmp_name"];
			$extension_array = explode(".", $file_name);
			$extension = strtolower($extension_array[1]);
			$allowed_extension = array('jpg','png');
			if(!in_array($extension, $allowed_extension))
			{
				$error_teacher_image = 'Invalid Image Format';
				$error++;
			}
			else
			{
				$teacher_image = uniqid() . '.' . $extension;
				$upload_path = 'teacher_image/' . $teacher_image;
				move_uploaded_file($tmp_name, $upload_path);
			}
		}
		else
		{
			if($teacher_image == '')
			{
				$error_teacher_image = 'Image is required';
				$error++;
			}
		}
		if(empty($_POST["teacher_name"]))
		{
			$error_teacher_name = 'Teacher Name is required';
			$error++;
		}
		else
		{
			$teacher_name = $_POST["teacher_name"];
		}
		if(empty($_POST["teacher_address"]))
		{
			$error_teacher_address = 'Teacher Address is required';
			$error++;
		}
		else
		{
			$teacher_address = $_POST["teacher_address"];
		}
		if($_POST["action"] == "Add")
		{
			if(empty($_POST["teacher_emailid"]))
			{
				$error_teacher_emailid = 'Email Address is required';
				$error++;
			}
			else
			{
				if(!filter_var($_POST["teacher_emailid"], FILTER_VALIDATE_EMAIL))
				{
					$error_teacher_emailid = 'Invalid email format';
					$error++;
				}
				else
				{
					$teacher_emailid = $_POST["teacher_emailid"];
				}
			}
			if(empty($_POST["teacher_password"]))
			{
				$error_teacher_password = "Password is required";
				$error++;
			}
			else
			{
				$teacher_password = $_POST["teacher_password"];
			}
		}
		if(empty($_POST["teacher_grade_id"]))
		{
			$error_teacher_grade_id = "Grade is required";
			$error++;
		}
		else
		{
			$teacher_grade_id = $_POST["teacher_grade_id"];
		}
		if(empty($_POST["teacher_qualification"]))
		{
			$error_teacher_qualification = 'Qualification Field is required';
			$error++;
		}
		else
		{
			$teacher_qualification = $_POST["teacher_qualification"];
		}
		if(empty($_POST["teacher_doj"]))
		{
			$error_teacher_doj = 'Date of Join Field is required';
			$error++;
		}
		else
		{
			$teacher_doj = $_POST["teacher_doj"];
		}
		if($error > 0)
		{
			$output = array(
				'error'							=>	true,
				'error_teacher_name'			=>	$error_teacher_name,
				'error_teacher_address'			=>	$error_teacher_address,
				'error_teacher_emailid'			=>	$error_teacher_emailid,
				'error_teacher_password'		=>	$error_teacher_password,
				'error_teacher_grade_id'		=>	$error_teacher_grade_id,
				'error_teacher_qualification'	=>	$error_teacher_qualification,
				'error_teacher_doj'				=>	$error_teacher_doj,
				'error_teacher_image'			=>	$error_teacher_image
			);
		}
		else
		{
			if($_POST["action"] == 'Add')
			{
				$data = array(
					':teacher_name'			=>	$teacher_name,
					':teacher_address'		=>	$teacher_address,
					':teacher_emailid'		=>	$teacher_emailid,
					':teacher_password'		=>	password_hash($teacher_password, PASSWORD_DEFAULT),
					':teacher_qualification'	=>	$teacher_qualification,
					':teacher_doj'			=>	$teacher_doj,
					':teacher_image'		=>	$teacher_image,
					':teacher_grade_id'		=>	$teacher_grade_id
				);
				$query = "
				INSERT INTO tbl_teacher 
				(teacher_name, teacher_address, teacher_emailid, teacher_password, teacher_qualification, teacher_doj, teacher_image, teacher_grade_id) 
				SELECT * FROM (SELECT :teacher_name, :teacher_address, :teacher_emailid, :teacher_password, :teacher_qualification, :teacher_doj, :teacher_image, :teacher_grade_id) as temp 
				WHERE NOT EXISTS (
					SELECT teacher_emailid FROM tbl_teacher WHERE teacher_emailid = :teacher_emailid
				) LIMIT 1
				";
				$statement = $connect->prepare($query);
				if($statement->execute($data))
				{
					if($statement->rowCount() > 0)
					{
						$output = array(
							'success'		=>	'Data Added Successfully',
						);
					}
					else
					{
						$output = array(
							'error'					=>	true,
							'error_teacher_emailid'	=>	'Email Already Exists'
						);
					}
				}
			}
			if($_POST["action"] == "Edit")
			{
				$data = array(
					':teacher_name'		=>	$teacher_name,
					':teacher_address'	=>	$teacher_address,
					':teacher_qualification'	=>	$teacher_qualification,
					':teacher_doj'		=>	$teacher_doj,
					':teacher_image'	=>	$teacher_image,
					':teacher_grade_id'	=>	$teacher_grade_id,
					':teacher_id'		=>	$_POST["teacher_id"]
				);
				$query = "
				UPDATE tbl_teacher 
				SET teacher_name = :teacher_name, 
				teacher_address = :teacher_address,  
				teacher_grade_id = :teacher_grade_id, 
				teacher_qualification = :teacher_qualification, 
				teacher_doj = :teacher_doj, 
				teacher_image = :teacher_image
				WHERE teacher_id = :teacher_id
				";
				$statement = $connect->prepare($query);
				if($statement->execute($data))
				{
					$output = array(
						'success'		=>	'Data Edited Successfully',
					);
				}
			}
		}
		echo json_encode($output);
	}



	if($_POST["action"] == "single_fetch")
	{
		$query = "
		SELECT * FROM tbl_teacher 
		INNER JOIN tbl_grade 
		ON tbl_grade.grade_id = tbl_teacher.teacher_grade_id 
		WHERE tbl_teacher.teacher_id = '".$_POST["teacher_id"]."'";
		$statement = $connect->prepare($query);
		if($statement->execute())
		{
			$result = $statement->fetchAll();
			$output = '
			<div class="row">
			';
			foreach($result as $row)
			{
				$output .= '
				<div class="col-md-3">
					<img src="teacher_image/'.$row["teacher_image"].'" class="img-thumbnail" />
				</div>
				<div class="col-md-9">
					<table class="table">
						<tr>
							<th>Name</th>
							<td>'.$row["teacher_name"].'</td>
						</tr>
						<tr>
							<th>Address</th>
							<td>'.$row["teacher_address"].'</td>
						</tr>
						<tr>
							<th>Email Address</th>
							<td>'.$row["teacher_emailid"].'</td>
						</tr>
						<tr>
							<th>Qualification</th>
							<td>'.$row["teacher_qualification"].'</td>
						</tr>
						<tr>
							<th>Date of Joining</th>
							<td>'.$row["teacher_doj"].'</td>
						</tr>
						<tr>
							<th>Grade</th>
							<td>'.$row["grade_name"].'</td>
						</tr>
					</table>
				</div>
				';
			}
			$output .= '</div>';
			echo $output;
		}
	}

	if($_POST["action"] == "edit_fetch")
	{
		$query = "
		SELECT * FROM tbl_teacher WHERE teacher_id = '".$_POST["teacher_id"]."'
		";
		$statement = $connect->prepare($query);
		if($statement->execute())
		{
			$result = $statement->fetchAll();
			foreach($result as $row)
			{
				$output["teacher_name"] = $row["teacher_name"];
				$output["teacher_address"] = $row["teacher_address"];
				$output["teacher_qualification"] = $row["teacher_qualification"];
				$output["teacher_doj"] = $row["teacher_doj"];
				$output["teacher_image"] = $row["teacher_image"];
				$output["teacher_grade_id"] = $row["teacher_grade_id"];
				$output["teacher_id"] = $row["teacher_id"];
			}
			echo json_encode($output);
		}
	}

	if($_POST["action"] == "delete")
	{
		$query = "
		DELETE FROM tbl_teacher 
		WHERE teacher_id = '".$_POST["teacher_id"]."'
		";
		$statement = $connect->prepare($query);
		if($statement->execute())
		{
			echo 'Data Deleted Successfully';
		}
	}
	
}

?>