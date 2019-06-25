<?php

$con = mysqli_connect("localhost","root","","pulilan");

if(isset($_POST['send_memo'])){


	$memo = $_POST['memo'];
	$body = $_POST['memo_body'];
	$receiver = $_POST['receiver'];
	$picture = $_POST['picture'];

$sql = mysqli_query($con, "INSERT INTO memo (project_name, project_description, receiver, picture, memo_date) VALUES ('$memo', '$body', '$receiver', 'picture', CURDATE())");

if($sql){

	header("location: ../adminindex.php?done=memo");
}

}
?>