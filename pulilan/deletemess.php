<?php
$connection = mysqli_connect("localhost", "root", "", "pulilan");
$message_id = $_GET['message_id'];
echo $message_id;
$hide = mysqli_query($connection, "UPDATE message_tbl SET notification_status='UNSEEN' WHERE message_id = '{$message_id}'");

if(!$hide){

    echo "mysqli_error";
}
else{
    
	            echo'<script>';
               echo'alert("successfully changed!");';
               echo'window.location.href="messagehistory.php";';
               echo'</script>';
}

?>