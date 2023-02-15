<?php

//chart1.php

include('header.php');

$present_percentage = 0;
$absent_percentage = 0;
$total_present = 0;
$total_absent = 0;
$output = "";

$query = "
SELECT * FROM tbl_attendance 
INNER JOIN tbl_student  
ON tbl_student.student_id = tbl_attendance.student_id 
INNER JOIN tbl_grade 
ON tbl_grade.grade_id = tbl_student.student_grade_id 
WHERE tbl_student.student_grade_id = '".$_GET['grade_id']."' 
AND tbl_attendance.attendance_date = '".$_GET["date"]."'
";
//echo $query;
$statement = $connect->prepare($query);
$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

foreach($result as $row)
{
	$status = '';
	if($row["attendance_status"] == "Present")
	{
		$total_present++;
		$status = '<span class="badge badge-success">Present</span>';
	}

	if($row["attendance_status"] == "Absent")
	{
		$total_absent++;
		$status = '<span class="badge badge-danger">Absent</span>';
	}
	$output .= '
		<tr>
			<td>'.$row["student_name"].'</td>
			<td>'.$status.'</td>
		</tr>
	';
}

if($total_row > 0)
{
	$present_percentage = ($total_present / $total_row) * 100;
	$absent_percentage = ($total_absent / $total_row) * 100;
}

?>

<div class="container" style="margin-top:30px">
  <div class="card">
  	<div class="card-header"><b>Attendance Chart</b></div>
  	<div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <tr>
            <th>Grade Name</th>
            <td><?php echo Get_grade_name($connect, $_GET["grade_id"]); ?></td>
          </tr>
          <tr>
            <th>Date</th>
            <td><?php echo $_GET["date"]; ?></td>
          </tr>
        </table>
      </div>
  		<div id="attendance_pie_chart" style="width: 100%; height: 400px;">

  		</div>

  		<div class="table-responsive">
        <table class="table table-striped table-bordered">
          <tr>
            <th>Student Name</th>
            <th>Attendance Status</th>
          </tr>
          <?php 
          echo $output;
          ?>
      </table></div>
  	</div>
  </div>
</div>

</body>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart()
  {
    var data = google.visualization.arrayToDataTable([
      ['Attendance Status', 'Percentage'],
      ['Present', <?php echo $present_percentage; ?>],
      ['Absent', <?php echo $absent_percentage; ?>]
    ]);

    var options = {
      title: 'Overall Attendance Analytics',
      hAxis: {
        title: 'Percentage',
        minValue: 0,
        maxValue: 100
      },
      vAxis: {
        title: 'Attendance Status'
      }
    };

    var chart = new google.visualization.PieChart(document.getElementById('attendance_pie_chart'));
    chart.draw(data, options);
  }
</script>