<?php

//grade.php

include('header.php');

?>

<div class="container" style="margin-top:30px">
  <div class="card">
  	<div class="card-header">
      <div class="row">
        <div class="col-md-9">Grade List</div>
        <div class="col-md-3" align="right">
          <button type="button" id="add_button" class="btn btn-info btn-sm">Add</button>
        </div>
      </div>
    </div>
  	<div class="card-body">
  		<div class="table-responsive">
        <span id="message_operation"></span>
        <table class="table table-striped table-bordered" id="grade_table">
          <thead>
            <tr>
              <th>Grade Name</th>
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

<div class="modal" id="formModal">
  <div class="modal-dialog">
    <form method="post" id="grade_form">
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
              <label class="col-md-4 text-right">Grade Name <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input type="text" name="grade_name" id="grade_name" class="form-control" />
                <span id="error_grade_name" class="text-danger"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <input type="hidden" name="grade_id" id="grade_id" />
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
	
  var dataTable = $('#grade_table').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"grade_action.php",
      type:"POST",
      data:{action:'fetch'}
    },
    "columnDefs":[
      {
        "targets":[0, 1, 2],
        "orderable":false,
      },
    ],
  });

  $('#add_button').click(function(){
    $('#modal_title').text('Add Grade');
    $('#button_action').val('Add');
    $('#action').val('Add');
    $('#formModal').modal('show');
    clear_field();
  });

  function clear_field()
  {
    $('#grade_form')[0].reset();
    $('#error_grade_name').text('');
  }

  $('#grade_form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"grade_action.php",
      method:"POST",
      data:$(this).serialize(),
      dataType:"json",
      beforeSend:function()
      {
        $('#button_action').attr('disabled', 'disabled');
        $('#button_action').val('Validate...');
      },
      success:function(data)
      {
        $('#button_action').attr('disabled', false);
        $('#button_action').val($('#action').val());
        if(data.success)
        {
          $('#message_operation').html('<div class="alert alert-success">'+data.success+'</div>');
          clear_field();
          dataTable.ajax.reload();
          $('#formModal').modal('hide');
        }
        if(data.error)
        {
          if(data.error_grade_name != '')
          {
            $('#error_grade_name').text(data.error_grade_name);
          }
          else
          {
            $('#error_grade_name').text('');
          }
        }
      }
    })
  });

  var grade_id = '';

  $(document).on('click', '.edit_grade', function(){
    grade_id = $(this).attr('id');
    clear_field();
    $.ajax({
      url:"grade_action.php",
      method:"POST",
      data:{action:'edit_fetch', grade_id:grade_id},
      dataType:"json",
      success:function(data)
      {
        $('#grade_name').val(data.grade_name);
        $('#grade_id').val(data.grade_id);
        $('#modal_title').text('Edit Grade');
        $('#button_action').val('Edit');
        $('#action').val('Edit');
        $('#formModal').modal('show');
      }
    })
  });

  $(document).on('click', '.delete_grade', function(){
    grade_id = $(this).attr('id');
    $('#deleteModal').modal('show');
  });

  $('#ok_button').click(function(){
    $.ajax({
      url:"grade_action.php",
      method:"POST",
      data:{grade_id:grade_id, action:'delete'},
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