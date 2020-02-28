<?php

$link = new PDO('mysql:host=localhost;dbname=dataanalysis', 'root', '');
$output = array();
if(isset($_POST["insert"]))
{

 $year = $_POST['select'];	
 
 $query = "select school,no_s from iub where year = '$year'";
 $statement = $link->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'school'   => $row["school"],
   'no_s'  => floatval($row["no_s"])
  );
 }
 json_encode($output);
 header("Location: getallgraph.php");
   exit;
}

?>