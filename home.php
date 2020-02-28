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
			      <li class="nav-item active">
			        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="dataentry.php" >Data Entry</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="dataoverview.php" >Data Overview</a>
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

				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="card" style="width: 18rem;">
					  
					  <div class="card-body">
					    <h5 class="card-title">Data Entry</h5>
					    <p class="card-text">Add a School or Department or Major in this System</p>
					    <a href="dataentry.php" class="btn btn-info">ADD</a>
					  </div>
					</div>
				</div>


				<div class="col-lg-6 col-md-6 col-sm-6 ">
					<div class="card mydataoverview" style="width: 18rem;">
					  
					  <div class="card-body ">
					    <h5 class="card-title">Data Overview</h5>
					    <p class="card-text">Insert CSV file to get a overview</p>
					    <a href="dataoverview.php" class="btn btn-info">ADD</a>
					  </div>
					</div>
				</div>

				
				
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