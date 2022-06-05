<?php 
	$pageTitle = 'Driver App Demo - Records';
	include('../config/header.php');
	include('../config/database.php');
	include('../models/record.php');
	include('../config/functions.php');
?>

<!-- CONTENT -->
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="records">
				<div class="table-wrapper table-responsive" style="padding:20px;">
					<h2 class="text-center">View Records</h2>
					<table id="driverNumber" class="table table-hover caption-top">
						<caption>List of records</caption>
						<thead class="table-warning">
							<tr>
								<th>Driver Number</th>
								<th>Time In</th>
								<th>Time Out</th>
								<th>Time Other</th>
								<th>Location</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$db = new Database();
								$record = new Record($db);
								$records = $record->showAllRecords();
								foreach($records as $record){
									$timeIn = $record['time_in'];
									$timeOut = $record['time_out'];
									$timeOther = $record['time_other'];

									if ($timeIn != 'none') {
										$timeIn = date_create($record['time_in']);
										$timeIn  = date_format($timeIn,"Y/m/d H:i:s");
									}
									if ($timeOut != 'none') {
										$timeOut = date_create($record['time_out']);
										$timeOut  = date_format($timeOut,"Y/m/d H:i:s");
									}
									if ($timeOther != 'none') {
										$timeOther = date_create($record['time_other']);
										$timeOther  = date_format($timeOther,"Y/m/d H:i:s");
									}

									echo '<tr>
									          <td><a href="#0"> '.$record['driver_code'].'</a></td>
									          <td> '.$timeIn.'</td>
									          <td> '.$timeOut.'</td>					          
									          <td> '.$timeOther.'</td>
									          <td> '.$record['location'].' </td>
									            
									          <td>
									              <a href="delete.php?deleteId='.$record["id"].'"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
									          </td>
									    </tr>';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->

<!-- Script -->
<script>
	function myFunction() {
	  // Declare variables
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("searchInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("driverNumber");
	  tr = table.getElementsByTagName("tr");

	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[0];
	    if (td) {
	      txtValue = td.textContent || td.innerText;
	      if (txtValue.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    }
	  }
	}
</script>
<!-- End Script -->

<!-- FOOTER -->
<?php include('../config/footer.php'); ?>
<!-- END FOOTER -->