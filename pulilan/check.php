<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
	<p><input type="checkbox" name="c" value="C" /> C </p>
	<p><input type="checkbox" name="cc" value="C#" /> C# </p>
	<p><input type="checkbox" name="php" value="PHP" /> PHP </p>
	<p><input type="checkbox" name="java" value="Java" /> JAVA </p>
	<p><input type="submit" name="submit" value="submit">


	</form>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$c = $_POST['c'];
	$cc = $_POST['cc'];
	$php = $_POST['php'];
	$java = $_POST['java'];

	$connection = mysqli_connect("localhost", "root", "", "pulilan");

	$insert = mysqli_query($connection, "INSERT INTO check_tbl(c, cc, php, java) VALUES ('$c', '$cc', '$php', '$java')");

}





?>