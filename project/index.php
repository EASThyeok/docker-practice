<?php
	$conn=mysqli_connect(
		'192.168.108.138',
		'test',
		'password',
		'TEST',
		'9876'
	);
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}

	$sql = "SELECT VERSION()";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	print_r($row["VERSION()"]);
?>	
