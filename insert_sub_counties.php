<?php
	
	require 'db_con.php';

	$id= $_POST['id'];
	$name = str_replace("'", "",$_POST['name']);
	$parent_id = $_POST['parent'];

	//Check if the facility exists
	$exists = "SELECT * FROM sub_counties WHERE sub_county_id = '$id'";
	$result = mysqli_query($conn,$exists);
	if(mysqli_num_rows($result)>0)
	{
		echo 1;
	}

	else
	{
		$sql = "INSERT INTO sub_counties (sub_county_id,sub_county_name,parent_id)
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