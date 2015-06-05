<?php

	require 'db_con.php';

	$id= $_POST['id'];
	$name = str_replace("'", "",$_POST['name']);
	$parent_id = $_POST['parent'];

	//Check if the facility exists
	$exists = "SELECT * FROM counties WHERE county_id = '$id'";
	$result = mysqli_query($conn,$exists);
	if(mysqli_num_rows($result)>0)
	{
		echo 1;
	}

	else
	{
		$sql = "INSERT INTO counties (county_id, county_name,parent_id)
		VALUES ('$id','$name','$parent_id')";

		if (mysqli_query($conn, $sql)) 
		{
		    echo 0;
		} 
		else 
		{
		    echo -1;
		}

	}

	mysqli_close($conn);
?> 