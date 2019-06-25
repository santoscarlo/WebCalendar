<?php
if(!empty($_GET['q']))
{
	include 'pulilan_db_connect.php';
	$q = $_GET['q'];
	$query = "SELECT * FROM resident_q WHERE name LIKE '%q%'";
	$result = mysqli_query($connection, $query);
	while($output = mysqli_fetch_assoc($result))
	{

		echo '<a>'.$output['name'].'</a>';
	}

}

?>