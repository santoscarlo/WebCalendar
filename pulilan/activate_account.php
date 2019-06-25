<?php
$connection = mysqli_connect("localhost", "root", "","pulilan");

$update = "UPDATE mainuser_acc SET user_status '".$_GET['status']. "' where user_id = '".$_GET['userid']."'" or die ("activate/ deactivate failed");
$update_query = mysqli_query($connection, $update);
if($update_query){
	header('location: brgylist_table.php');
}
?>