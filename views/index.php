<?php 
	$pageTitle = 'Driver App Demo - Input';
	include('../config/header.php');
	include('../config/database.php');
	include('../models/record.php');

	if (isset($_POST['submit'])){
		$db = new Database();
		$record = new Record($db);		
		$driverCode = $_POST['driverCode'];
		$time = $_POST['time'];
		$location = $_POST['coordinates'];
		$record->createRecord($driverCode, $time, $location);	
	}
?>


<!-- CONTENT -->
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="container mt-3">
			  <h2 class="text-center">Enter Driver Number</h2>
			  <p id="coordinatesError" class="text-center text-danger"></p>
			  <form action="index.php" method="POST">

			  	<!-- Driver Number Input -->
			    <div class="mb-3 mt-3">
			      <input type="text" class="driver-number form-control-lg" name="driverCode" pattern="[A-Za-z0-9]+" placeholder="Eg. ACKY4673YYJ63" required autofocus title="Please fill out Driver Number!">
			    </div>

			    <div class="check" style="margin: 0 auto; background-color:; width:100px;">
				    <div class="form-check form-switch mb-3 mt-3">
					  <input type="radio" class="form-check-input" name="time" value="in" style="transform: scale(1.4);margin-right: 20px;">
					  <label class="form-check-label" for="radio1">IN</label>
					</div>
					<div class="form-check form-switch mb-3 mt-3">
					  <input type="radio" class="form-check-input" name="time" value="out" style="transform: scale(1.4);margin-right: 20px;">OUT
					  <label class="form-check-label" for="radio2"></label>
					</div>
					<div class="form-check form-switch mb-5 mt-3">
					  <input type="radio" class="form-check-input" name="time" value="other" style="transform: scale(1.4);margin-right: 20px;">Other
					  <label class="form-check-label" for="radio2"></label>
					</div>
				</div>

				<div class="mb-3 mt-3">
			      <input type="hidden" class="form-control form-control-lg" id="coordinates" name="coordinates" value="">
			    </div>
				
			    <div class="button-wrapper">
			    	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			    	<button type="reset" name="reset" class="btn btn-primary">Reset</button>
			    </div>
			  </form>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->

<!-- SCRIPT -->
<script>
	var coordinatesError = document.getElementById("coordinatesError");
	var coordinates = document.getElementById("coordinates");


	function getLocation() {
	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(showPosition);
	  } else { 
	    coordinatesError.innerHTML = "Geolocation is not supported by this browser.";
	  }
	}

	function showPosition(position) {
	  coordinates.value = position.coords.latitude + "," + position.coords.longitude;
	}
</script>
<!-- END SCRIPT -->

<!-- FOOTER -->
<?php include('../config/footer.php'); ?>
<!-- END FOOTER -->