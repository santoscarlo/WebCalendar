<?php

$con = mysqli_connect("localhost","root","","pulilan");


if(isset($_POST['send_achievement'])){
	$project_name = $_POST['project_name'];
	$project_description = $_POST['project_description'];
	$fileToUpload = $_FILES['picture']["name"];



$target_dir = "temp/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
  if(move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)){
  	$sql = mysqli_query($con, "INSERT INTO achievement_tbl (project_name, project_description, picture) VALUES ('$project_name', '$project_description', '$fileToUpload')");
  
  if($sql){

  	header("location: ../dilgindex.php?suc=true");
  }
}

}

?>