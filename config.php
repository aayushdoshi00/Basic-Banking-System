<?php

	$conn = mysqli_connect("localhost",'id15466196_bank','123A@yushdoshi','id15466196_bankdb');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>