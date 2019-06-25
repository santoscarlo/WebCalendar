<?php


session_start();


if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
	$uid = $_SESSION['user_id'];
}
global $uid;

$con = mysqli_connect("localhost", "root", "", "pulilan");

if(isset($_POST['send_message'])){

	$receiver = $_POST['receiver'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];



	$sql = mysqli_query($con, "INSERT INTO message_tbl (message, subject, brgy_location, user_id) VALUES ('$message', '$subject', '$receiver', '$uid')");
if($sql){

	$_SESSION['notif'] = "Successfuly sent message!";
	header("location: ../brgyindex.php");
}

}

?>