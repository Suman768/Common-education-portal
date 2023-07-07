<?php 
 include("../config.php");

extract($_POST);

$deleleCollege = $conn->query("DELETE  FROM colleges WHERE id=$id  ");

if($deleleCollege===TRUE)
{
	$output = array("response" => "success");
}
else
{
	$output = array("response" => "Failed");
}

echo json_encode($output);
?>