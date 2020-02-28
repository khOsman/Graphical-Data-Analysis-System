<?php
	if (isset($_POST["insert"])) {
		$option = $_POST["select"];

		if($option == "Yearly students' interest semester wise"){
			header("location: yearwise.php");
		}else if($option == "School wise Student Interest"){
			header("location: schoolwise.php");
		}else if($option == "Major wise Students' interest"){
			header("location: majorwise.php");
		}else if($option == "Yearly students' interest school wise"){
			header("location: yearlyschoolwise.php");
		}else if($option == "Major wise Students' interest @ SECS"){
			header("location: majorwiseinsecs.php");
		}else if($option == "SECS Department"){
			header("location: secsdept.php");
		}

	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Analysis</title>
	<!-- Bootstrap link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Custom css-->
	<link rel="stylesheet" type="text/css" href="./css/stylesheet.css">
	<!-- Googlefont link -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">



</head>
<body>
	<div class="container-fluid">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			   <a class="navbar-brand" href="#" target="_blank">Data Analysis</a>
			   
			    <ul class="navitem navbar-nav ml-auto mt-2 mt-lg-0">
			      <li class="nav-item ">
			        <a class="nav-link" href="dataoverview.php">Data Overview</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="graph.php" >Graph Analysis<span class="sr-only">(current)</span></a>
			      </li>
			        <li class="nav-item">
			        <a class="nav-link" href="index.php" >Log out</a>
			      </li>
			        <!--<a class="nav-link disabled" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>-->
			  
			    </ul>
		  </div>
		</nav>
	




		<div class="homcontainer1 container">

			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2"></div>
				<div class="col-lg-8 col-md-8 col-sm-8">
					<div class="card p-5">
					  
					  <form action="graph.php" method="POST">
					  		<label>Select Status</label>
						  	<select class="form-control form-control-lg" name="select">
							  <option>Yearly students' interest school wise</option>
							  <option>Yearly students' interest semester wise</option>
							  <option>School wise Student Interest</option>
							  <option>Major wise Students' interest</option>
							  <option>SECS Department</option>

							</select>
							<br>
							<input type="submit" name="insert" class="btn btn-info" value="Insert" />
					  </form>
					 

					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2"></div>
				
			</div>

			
		</div>











	<footer>
		<div class="container-fluid">

			<div class="row ">
				<div class="col-4">
					
				</div>
				<div class="footercontent col-8">
					<p>Copyright © 2019 - Dept. of CSE - All Rights Reserved.</p>
					
				</div>
				<div class="col-4">
					
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>