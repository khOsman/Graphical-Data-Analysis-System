<?php
//index.php
include_once 'dbConfig.php';
$message = '';
$query = "SELECT * FROM iub";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);



if(isset($_POST["upload"]))
{



 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
	   while($data = fgetcsv($handle))
	   {
	    $no = mysqli_real_escape_string($con, $data[0]);
	    $school = mysqli_real_escape_string($con, $data[1]);  
	    $department = mysqli_real_escape_string($con, $data[2]);
	    $major = mysqli_real_escape_string($con, $data[3]);
	    $no_of_student = mysqli_real_escape_string($con, $data[4]);
	    $no_s = mysqli_real_escape_string($con, $data[5]);
	    $year = mysqli_real_escape_string($con, $data[6]);
	    $semester_no = mysqli_real_escape_string($con, $data[7]);
	    $semester = mysqli_real_escape_string($con, $data[8]);
	    $sql = "INSERT INTO iub (no, school, department,major,no_of_student,no_s,year,semester_no,semester) VALUES ('$no', '$school', '$department','$major', '$no_of_student', '$no_s','$year', '$semester_no', '$semester')";

	    
	    /*$sql = "UPDATE iub SET no='$no',school = '$school', department = '$department',major = '$major',no_of_student = '$no_of_student',no_s = '$no_s',year = '$year', 
	     semester_no = '$semester_no',semester = '$semester',WHERE no = '$no'";*/

	    mysqli_query($con, $sql);

	    
	   }
	   fclose($handle);
	   header("location: dataoverview.php?updation=1");
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }



}

if(isset($_GET["updation"]))
{
 $message = '<label class="text-success">Database Updation Done</label>';
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
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">\
	
	

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
			        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="dataentry.php" >Data Entry</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link " href="dataoverview.php" >Data Overview<span class="sr-only">(current)</span></a>
			      </li>
			       <li class="nav-item">
			        <a class="nav-link" href="index.php" >Log out</a>
			      </li>
			        <!--<a class="nav-link disabled" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>-->
			  
			    </ul>
		  </div>
		</nav>
	

		<br />
		  <div class="container mt-5">
		   <h2 align="center">Update Database through Upload CSV File</h2>
		   <br />
		   <form action="dataoverview.php" method="post" enctype='multipart/form-data' >
		    <p><label>Please Select File(Only CSV Formate)</label>
		    <input type="file" name="product_file" class="btn btn-warning" /></p>
		    <br />
		    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
		   </form>
		   <br>
		   <form method="POST" action="graph.php">
		   		<input type="submit" name="graph" class="btn btn-primary" value="Graph" />
		   </form>
		   <br />
		  
		   <h3 align="center">IUB Student Admission Session Report 2013-2019</h3>
		   <br />
		   <div class="table-responsive">
		    <table class="table table-bordered table-striped">
		     <tr>
		      <th>No.</th>
		      <th>School</th>
		      <th>Dept.</th>
		      <th>Major</th>
		      <th>no. of student</th>
		      <th>no.</th>
		      <th>year</th>
		      <th>semester no.</th>
		      <th>semester</th>
		     </tr>
		     <?php
		     while($row = mysqli_fetch_array($result))
		     {
		      echo '
		      <tr>
		       <td>'.$row["no"].'</td>
		       <td>'.$row["school"].'</td>
		       <td>'.$row["department"].'</td>
		       <td>'.$row["major"].'</td>
		       <td>'.$row["no_of_student"].'</td>
		       <td>'.$row["no_s"].'</td>
		       <td>'.$row["year"].'</td>
		       <td>'.$row["semester_no"].'</td>
		       <td>'.$row["semester"].'</td>
		      </tr>
		      ';
		     }
		     ?>
		    </table>
		   </div>
		  </div>
			
			
		</div>













	<footer class>
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