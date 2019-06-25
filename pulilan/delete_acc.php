<?php
$connection = mysqli_connect("localhost", "root", "", "pulilan");
$user_id = $_GET['user_id'];
echo $user_id;
$hide = "UPDATE mainuser_acc SET visibility=1 WHERE user_id = '{$user_id}'";
$hide_query = mysqli_query($connection, $hide);

if(!$hide_query){

    echo "mysqli_error";
}
else{
	echo'<script>';
               echo'alert("successfully Deleted!");';
               echo'window.location.href="brgylist_table.php";';
               echo'</script>';
    
}

?>


