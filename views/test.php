<!-- HEADER -->
<?php include('../config/header.php'); ?>
<!-- END HEADER -->
	
<!-- CONTENT -->
<style>

	.section {
	  	padding: 100px;
	  	padding-left: 150px;
	}
	.section input[type="radio"]{
	  display: none;
	}
	.radio-container {
	  margin-bottom: 10px;
	}
	.radio-container label {
	  position: relative;
	}

	.radio-container span::before,
	.radio-container span::after {
	  content: '';
	  position: absolute;
	  top: 0;
	  bottom: 0;
	  margin: auto;
	}

	.radio-container span.radio:hover {
	  cursor: pointer;
	}
	.radio-container span.radio::before {
	  left: -52px;
	  width: 45px;
	  height: 25px;
	  background-color: RGBA(255,139,0,0.42);
	  border-radius: 50px;
	}
	.radio-container span.radio::after {
	  left: -49px;
	  width: 17px;
	  height: 17px;
	  border-radius: 10px;
	  background-color: RGBA(255,139,0,0.8);
	  transition: left .25s, background-color .25s;
	}
	input[type="radio"]:checked + label span.radio::after {
	  left: -27px;
	  background-color: #0DD900;
	}

	.radio-container span.checkbox::before {
	  width: 27px;
	  height: 27px;
	  background-color: #fff;
	  left: -35px;
	  box-sizing: border-box;
	  border: 3px solid transparent;
	  transition: border-color .2s;
	}
	.radio-container span.checkbox:hover::before {
	  border: 3px solid #F0FF76;
	}
	.radio-container span.checkbox::after {
	  content: '\f00c';
	  font-family: 'FontAwesome';
	  left: -31px;
	  top: 2px;
	  color: transparent;
	  transition: color .2s;
	}
	input[type="checkbox"]:checked + label span.checkbox::after {
	  color: #62AFFF;
	}
</style>
<div class="content">
	<div class="container-fluid">
		<div class="row">

			<div class="d-flex justify-content-center mt-5 align-items-center">                   
	            <section id="first" class="section">
		            <div class="radio-container">
		              <input type="radio" name="group1" id="radio-1">
		              <label for="radio-1"><span class="radio">Coffee</span></label>
		            </div>
		            <div class="radio-container">
		              <input type="radio" name="group1" id="radio-2">
		              <label for="radio-2"><span class="radio">Tea</span></label>
		            </div>
		            <div class="radio-container">
		              <input type="radio" name="group1" id="radio-3">
		              <label for="radio-3"><span class="radio">Cappuccino</span></label>
		            </div>
	        	</section>
            </div>

		</div>
	</div>	
</div>
<!-- END CONTENT -->



<!-- FOOTER -->
<?php include('../config/footer.php'); ?>
<!-- END FOOTER -->