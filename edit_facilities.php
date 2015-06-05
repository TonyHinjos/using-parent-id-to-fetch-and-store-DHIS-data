<?php

	require 'db_con.php';

	$id= $_POST['id'];
	$name = str_replace("'", "",$_POST['name']);
	$parent_id = $_POST['parent'];

	//Check if the facility exists
	$exists = "SELECT * FROM facilities WHERE facility_id = '$id'";
	$result = mysqli_query($conn,$exists);
	if(mysqli_num_rows($result)>0)
	{
		//Update
		$edit = "UPDATE facilities
				SET parent_id='$parent_id'
				WHERE facility_id='$id'";

		$execute = mysqli_query($conn,$edit);
		
		if($execute)
		{
			echo 10;
		}
		else
		{
			echo -1;
		}		
	}

	else
	{
		$sql = "INSERT INTO facilities (facility_id, facility_name, parent_id)
		VALUES ('$id','$name',$parent_id)";

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