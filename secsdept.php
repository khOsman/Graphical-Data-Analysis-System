<?php
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database



$option ="";


try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
    $link = new PDO('mysql:host=localhost;dbname=dataanalysis', 'root', '');
  	if(isset($_POST["insert"])){
	$option = $_POST["select"];
	}

    $handle = $link->prepare("select year,no_s from iub where department='$option'"); 
    $handle->execute(); 
    $result = $handle->fetchAll(PDO::FETCH_OBJ);
    
    
    foreach($result as $row){

        array_push($dataPoints, array("label"=>$row->year, "y"=>$row->no_s));

    }
  $link = null;
 //$option ="";
}
catch(PDOException $ex){
    print($ex->getMessage());
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
	<script>
		window.onload = function () {
		 
		var chart = new CanvasJS.Chart("chartContainer1", {
			animationEnabled: true,
			//exportEnabled: true,
		    title: {
		        text:  "Year wise Student Interest in SECS"
		    },
		    axisY: {
		        title: "Number of Students"
		    },
		    data: [{
		        type: "splineArea",
		        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		    }]
		});
		chart.render();
		var chart = new CanvasJS.Chart("chartContainer2", {
			animationEnabled: true,
			//exportEnabled: true,
		    title: {
		        text:  "Year wise Student Interest in SECS"
		    },
		    axisY: {
		        title: "Number of Students"
		    },
		    data: [{
		        type: "pie",
		        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		    }]
		});
		chart.render();
		var chart = new CanvasJS.Chart("chartContainer3", {
			animationEnabled: true,
			//exportEnabled: true,
		    title: {
		        text:  "Year wise Student Interest in SECS"
		    },
		    axisY: {
		        title: "Number of Students"
		    },
		    data: [{
		        type: "line",
		        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		    }]
		});
		chart.render();
		var chart = new CanvasJS.Chart("chartContainer4", {
			animationEnabled: true,
			//exportEnabled: true,
		    title: {
		        text:  "Year wise Student Interest in SECS"
		    },
		    axisY: {
		        title: "Number of Students"
		    },
		    data: [{
		        type: "column",
		        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		    }]
		});
	chart.render();
	var chart = new CanvasJS.Chart("chartContainer5", {
			animationEnabled: true,
			//exportEnabled: true,
		    title: {
		        text:  "Year wise Student Interest in SECS"
		    },
		    axisY: {
		        title: "Number of Students"
		    },
		    data: [{
		        type: "stepArea",
		        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		    }]
		});
	chart.render();
	var chart = new CanvasJS.Chart("chartContainer6", {
			animationEnabled: true,
			//exportEnabled: true,
		    title: {
		        text:  "Year wise Student Interest in SECS"
		    },
		    axisY: {
		        title: "Number of Students"
		    },
		    data: [{
		        type: "doughnut",
		        startAngle: 40,
				innerRadius: 30,
				indexLabelFontSize: 17,
				indexLabel: "{label} - #percent%",
				toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		    }]
		});
	chart.render();
	var chart = new CanvasJS.Chart("chartContainer7", {
			animationEnabled: true,
			//exportEnabled: true,
		    title: {
		        text:  "Year wise Student Interest in SECS"
		    },
		    axisY: {
		        title: "Number of Students"
		    },
		    data: [{
		        type: "bar",
				name: "companies",
				axisYType: "secondary",
				color: "#014D65",
		        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		    }]
		});
	chart.render();
	var chart = new CanvasJS.Chart("chartContainer8", {
			animationEnabled: true,
			//exportEnabled: true,
		    title: {
		        text:  "Year wise Student Interest in SECS"
		    },
		    axisY: {
		        title: "Number of Students"
		    },
		    data: [{
		        type: "funnel",
				indexLabelPlacement: "inside",
				indexLabelFontColor: "white",
				toolTipContent: "<b>{label}</b>: {y} <b>({percentage}%)</b>",
				indexLabel: "{label} ({percentage}%)",
		        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		    }]
		});
	chart.render();

 
}
function forprint()
		{
			if (!window.print)
			{
				return
			}
			window.print()
		}

</script>
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
			        <a class="nav-link" href="graph.php">Graph</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="secsdept.php" >SECS Dept<span class="sr-only">(current)</span></a>
			      </li>
			     
			        <li class="nav-item">
			        <a class="nav-link" href="index.php" >Log out</a>
			      </li>
			        <!--<a class="nav-link disabled" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>-->
			  
			    </ul>
		  </div>
		</nav>
	




		<div class="homcontainer container">

			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2"></div>
				<div class="col-lg-8 col-md-8 col-sm-8">
					<div class="card p-5">
					  
					  <form action="secsdept.php" method="POST">
					  		<label>Select Status</label>
						  	<select class="form-control form-control-lg" name="select" >
							  <option value="CSE">CSE</option>
							  <option value="EEE">EEE</option>
							  <option value="PhySci">PhySci</option>
							  
							 
							</select>
							<br>
							<input type="submit" name="insert" class="btn btn-info" value="Insert" />
					  </form>
					 
					  	 <div align="center">
							<a class="PDF" href="javascript:forprint()">PDF</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2"></div>
				
			</div>


		</div>
		
		
		<div id="chartContainer1" style="width: 45%; height: 215px;display: inline-block; margin: 10px;"></div> 
		<div id="chartContainer2" style="width: 45%; height: 215px;display: inline-block;margin: 10px;"></div><br/>
		<div id="chartContainer3" style="width: 45%; height: 215px;display: inline-block;margin: 10px;"></div>
		<div id="chartContainer4" style="width: 45%; height: 215px;display: inline-block;margin: 10px;"></div>
		<div id="chartContainer5" style="width: 45%; height: 215px;display: inline-block;margin: 10px;"></div>
		<div id="chartContainer6" style="width: 45%; height: 215px;display: inline-block;margin: 10px;"></div>
		<div id="chartContainer7" style="width: 45%; height: 215px;display: inline-block;margin: 10px;"></div>
		<div id="chartContainer8" style="width: 45%; height: 215px;display: inline-block;margin: 10px;"></div>
	
		
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



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