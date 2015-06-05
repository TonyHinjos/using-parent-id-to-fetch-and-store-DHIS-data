<?php

    $servername = "localhost";
    $username = "root";
    $password = "wahome";
    $dbname = "msh_task";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    /*Success Message*/
    //echo "Connected successfully";
?> 