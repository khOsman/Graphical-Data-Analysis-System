<?php  

include_once 'dbConfig.php';
$test =0;
if(isset($_POST["insert"])){
	$uname = $_POST["uname"];
	
	$upass = $_POST["upass"];



	

	$sql = "SELECT uid FROM admin WHERE uname = '$uname' and upass = '$upass'";
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result);
	$test = $count;
    if($count == 1){

    	 header("location: home.php");
    	 exit;
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		header("location: index.php");
	    
	}
}


// Close connection
mysqli_close($con);





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
			   
		  </div>
		</nav>
	


		<div class="container">

			<div class="row">

				<div class="col-lg-2 col-md-2"></div>

				<div class="col-lg-8 col-md-8">
					
						<div class="sidenav">
					         <div class="login-main-text">
					            <h2>Data Analysis System<br> Login Page</h2>
					            <p>Login or register from here to access.</p>

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
					    </div>
				      <div class="main">
				         <div class="col-md-6 col-sm-12">
				         	<?php  echo "<label>".$test."</label>"; ?>
				            <div class="login-form">
				               <form action="index.php" method="POST">
				                  <div class="form-group">
				                     <label>User Name</label>
				                     <input type="text" class="form-control" name="uname" placeholder="User Name" required>
				                  </div>
				                  <div class="form-group">
				                     <label>Password</label>
				                     <input type="password" class="form-control"  name="upass" placeholder="Password" required>
				                  </div>
				                  <button type="submit" name="insert" class="btn btn-success">Login</button>
				                  <button type="submit" class="btn btn-primary"><a href="register.php">Register</a></button>
				               </form>
				            </div>
				         </div>
				      </div>


				</div>


				<div class="col-lg-2 col-md-2"></div>
				
			</div>
			
		</div>
















	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>