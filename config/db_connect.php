<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'root', '1234', 'ninjas');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>