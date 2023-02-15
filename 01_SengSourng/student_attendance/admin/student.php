<?php

//student.php

include('header.php');

?>

<div class="container" style="margin-top:30px">
  <div class="card">
  	<div class="card-header">
      <div class="row">
        <div class="col-md-9">Student List</div>
        <div class="col-md-3" align="right">
        	<button type="button" id="add_button" class="btn btn-info btn-sm">Add</button>
        </div>
      </div>
    </div>
  	<div class="card-body">
  		<div class="table-responsive">
        	<span id="message_operation"></span>
        	<table class="table table-striped table-bordered" id="student_table">
  				<thead>
  					<tr>
  						<th>Student Name</th>
  						<th>Roll No.</th>
  						<th>Date of Birth</th>
              			<th>Grade</th>
  						<th>Edit</th>
  						<th>Delete</th>
  					</tr>
  				</thead>
  				<tbody>

  				</tbody>
  			</table>
  			
  		</div>
  	</div>
  </div>
</div>

</body>
</html>

<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="../css/datepicker.css" />

<style>
    .datepicker {
      z-index: 1600 !important; /* has to be larger than 1050 */
    }
</style>

<div class="modal" id="formModal">
  <div class="modal-dialog">
  	<form method="post" id="student_form">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="modal_title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <div class="row">
              <label class="col-md-4 text-right">Student Name <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input type="text" name="student_name" id="student_name" class="form-control" />
                <span id="error_student_name" class="text-danger"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <label class="col-md-4 text-right">Roll No. <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input type="text" name="student_roll_number" id="student_roll_number" class="form-control" />
                <span id="error_student_roll_number" class="text-danger"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <label class="col-md-4 text-right">Date of Birth <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input type="text" name="student_dob" id="student_dob" class="form-control" />
                <span id="error_student_dob" class="text-danger"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <label class="col-md-4 text-right">Grade <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <select name="student_grade_id" id="student_grade_id" class="form-control">
                  <option value="">Select Grade</option>
                  <?php
                  echo load_grade_list($connect);
                  ?>
              </select>
              <span id="error_student_grade_id" class="text-danger"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
        	<input type="hidden" name="student_id" id="student_id" />
        	<input type="hidden" name="action" id="action" value="Add" />
        	<input type="submit" name="button_action" id="button_action" class="btn btn-success btn-sm" value="Add" />
          	<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div>

      </div>
  </form>
  </div>
</div>

<div class="modal" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Confirmation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h3 align="center">Are you sure you want to remove this?</h3>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" name="ok_button" id="ok_button" class="btn btn-primary btn-sm">OK</button>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script>
$(document).ready(function(){
	
	var dataTable = $('#student_table').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"student_action.php",
			method:"POST",
			data:{action:'fetch'},
		}
	});

	$('#student_dob').datepicker({
		format:"yyyy-mm-dd",
		autoclose: true,
        container: '#formModal modal-body'
	});

	function clear_field()
	{
		$('#student_form')[0].reset();
		$('#error_student_name').text('');
		$('#error_student_roll_number').text('');
		$('#error_student_dob').text('');
		$('#error_student_grade_id').text('');
	}

	$('#add_button').click(function(){
		$('#modal_title').text('Add Student');
		$('#button_action').val('Add');
		$('#action').val('Add');
		$('#formModal').modal('show');
		clear_field();
	});

	$('#student_form').on('submit', function(event){
		event.preventDefault();
		$.ajax({
			url:"student_action.php",
			method:"POST",
			data:$(this).serialize(),
			dataType:"json",
			beforeSend:function(){
				$('#button_action').val('Validate...');
				$('#button_action').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				$('#button_action').attr('disabled', false);
				$('#button_action').val($('#action').val());
				if(data.success)
				{
					$('#message_operation').html('<div class="alert alert-success">'+data.success+'</div>');
					clear_field();
					$('#formModal').modal('hide');
					dataTable.ajax.reload();
				}
				if(data.error)
				{
					if(data.error_student_name != '')
					{
						$('#error_student_name').text(data.error_student_name);
					}
					else
					{
						$('#error_student_name').text('');
					}
					if(data.error_student_roll_number != '')
					{
						$('#error_student_roll_number').text(data.error_student_roll_number);
					}
					else
					{
						$('#error_student_roll_number').text('');
					}
					if(data.error_student_dob != '')
					{
						$('#error_student_dob').text(data.error_student_dob);
					}
					else
					{
						$('#error_student_dob').text('');
					}
					if(data.error_student_grade_id != '')
					{
						$('#error_student_grade_id').text(data.error_student_grade_id);
					}
					else
					{
						$('#error_student_grade_id').text('');
					}
				}
			}
		})
	});

  var student_id = '';

  $(document).on('click', '.edit_student', function(){
    student_id = $(this).attr('id');
    clear_field();
    $.ajax({
      url:"student_action.php",
      method:"POST",
      data:{action:'edit_fetch', student_id:student_id},
      dataType:"json",
      success:function(data)
      {
        $('#student_name').val(data.student_name);
        $('#student_roll_number').val(data.student_roll_number);
        $('#student_dob').val(data.student_dob);
        $('#student_grade_id').val(data.student_grade_id);
        $('#student_id').val(data.student_id);
        $('#modal_title').text('Edit Student');
        $('#button_action').val('Edit');
        $('#action').val('Edit');
        $('#formModal').modal('show');
      }
    })
  });

  $(document).on('click', '.delete_student', function(){
    student_id = $(this).attr('id');
    $('#deleteModal').modal('show');
  });

  $('#ok_button').click(function(){
    $.ajax({
      url:"student_action.php",
      method:"POST",
      data:{student_id:student_id, action:"delete"},
      success:function(data)
      {
        $('#message_operation').html('<div class="alert alert-success">'+data+'</div>');
        $('#deleteModal').modal('hide');
        dataTable.ajax.reload();
      }
    })
  });

});
</script>