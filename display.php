<?php

	require 'db_con.php';

	//Check if the facility exists
	$facility = "SELECT * FROM sub_counties";
	$result = mysqli_query($conn,$facility);
	mysqli_close($conn);
?> 