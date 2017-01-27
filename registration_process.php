<?php
include_once('config.php');

if(isset($_POST['name'], $_POST['email'], $_POST['password'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	//make the database connection
	$conn  = db_connect();
	//create an insert query 	
	$sql = "insert into users (name, email, password) 
			VALUES ('$name', '$email', '$password')";
	//execute the query
	if($conn -> query($sql))
	{
		echo "<h1>Welcome to ABC School</h1>";
		echo "Hi <b>$name</b><br />";
		echo "<a href=\"login.html\">You can login now</a>";
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>

