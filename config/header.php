<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $pageTitle; ?></title>

		<!--load all Font Awesome styles -->
  	<link href="/Codebase/Portfolio/DriverAppDemo/assets/css/fontawesome/css/all.css" rel="stylesheet" />
  	<link href="/Codebase/Portfolio/DriverAppDemo/assets/bootstrap/css/bootstrap.css" rel="stylesheet" />
  	<link href="/Codebase/Portfolio/DriverAppDemo/assets/css/main.css" rel="stylesheet" />
  	<script src="/Codebase/Portfolio/DriverAppDemo/assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

	</head>
	<body onload="getLocation()">
		<div class="contianer-fluid">
			
			<div class="navigation">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <a class="navbar-brand" href="/Codebase/Portfolio/DriverAppDemo/views/index.php">Driver Demo App ..<i class="fa fa-truck"></i></a>
				    <a class="" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				      <i class="navbar-toggler fa fa-bars"></i>
				    </a>
				    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				        <li class="nav-item">
				          <a class="nav-link" href="/Codebase/Portfolio/DriverAppDemo/views/records.php"><i class="fa fa-database"></i>&nbsp;&nbsp;Records</a>
				        </li>
				        <?php if ($pageTitle == 'Driver App Demo - Records'): ?>
				        <li>
				        	<input type="input" id="searchInput" class="searchInput" onkeyup="myFunction()" placeholder="Search for driver number.."></input>
				        </li>
				        <?php endif ?>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>



			