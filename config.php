<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="world_bank";
	$conn = mysqli_connect($host,$user,$password,$db);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>