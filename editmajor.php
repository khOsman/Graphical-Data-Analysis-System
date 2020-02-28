<?php

include_once 'dbConfig.php';
$query = "SELECT * FROM major";
$result = mysqli_query($con, $query);
$cnt=0;	
$test=0;
if(isset($_POST["insert"])){
	$did = $_POST["did"];
	$newdid = $_POST["newdid"];
	$mid = $_POST["mid"];
	$newmid = $_POST["newmid"];
	

$test=1;
	

	$sql = "UPDATE major SET did='$newdid',mid='$newmid' WHERE mid='$mid'";

    if(mysqli_query($con, $sql)){
    	echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
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
			        <a class="nav-link" href="major.php">Major</span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="addschool.php" >Add Major<span class="sr-only">(current)</a>
			      </li>
			     
			        <!--<a class="nav-link disabled" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>-->
			  
			    </ul>
		  </div>
		</nav>
	




		<div class="homcontainer1 container">

			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2">
					
				</div>

				<div class="col-lg-8 col-md-8 col-sm-8">
					<div class="card myschoolcard px-5 py-5">
					<!-- Default form group -->
						<form method="POST" action="editmajor.php">
						  <!-- Default input -->
						  <div class="form-group">
						    <label for="formGroupExampleInput">Previous Major ID</label>
						    <input type="text" class="form-control" name="mid" id="formGroupExampleInput" placeholder="Previous Major ID" required>
						  </div>
						  <!-- Default input -->
						  <div class="form-group">
						    <label for="formGroupExampleInput">New Major ID</label>
						    <input type="text" class="form-control" name="newmid" id="formGroupExampleInput" placeholder="New Major ID" required>
						  </div>
						    <!-- Default input -->
						  <div class="form-group">
						    <label for="formGroupExampleInput">Previous Department ID</label>
						    <input type="text" class="form-control" name="did" id="formGroupExampleInput" placeholder="Previous Department ID" required>
						  </div>
						   <!-- Default input -->
						  <div class="form-group">
						    <label for="formGroupExampleInput">New Department ID</label>
						    <input type="text" class="form-control" name="newdid" id="formGroupExampleInput" placeholder="New Department ID" required>
						  </div>


						   <button type="submit" name="insert" class="btn btn-warning">Edit Major</button>

						</form>
						<!-- Default form group -->
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-2">
					
				</div>

				
			</div>

			
		</div>



		<div class="container mt-5">

			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2">
					
				</div>
				

				<div class="col-lg-8 col-md-8 col-sm-8">
				
					   <h3 align="center">Major</h3>
					   <br />
					   <div class="table-responsive">
					    <table class="table table-bordered table-striped">
					     <tr>
					      <th>No.</th>
					      <th>Major ID</th>
					      <th>Major Name</th>
					      <th>Department ID</th>
					     
					     
					     </tr>
					     <?php

					     while($row = mysqli_fetch_array($result))
					     {
					     	$cnt++;
					      echo '
					      <tr>
					       <td>'.$cnt.'</td>
					       <td>'.$row["mid"].'</td>
					       <td>'.$row["mname"].'</td>
					       <td>'.$row["did"].'</td>
					      </tr>
					      ';
					     }
					     ?>
					    </table>
					   </div>
					  
				</div>

				<div class="col-lg-2 col-md-2 col-sm-2">
					
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