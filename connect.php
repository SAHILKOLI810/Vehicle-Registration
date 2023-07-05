<?php

    $conn = mysqli_connect("localhost", "root","Siddhikoli@1", "vehicle_register");

    
    
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    


    $vehicle_number = $_POST["vehicle-number"];
    $vehicle_model = $_POST["vehicle-model"];
    $vehicle_year = $_POST["vehicle-year"];
    $vehicle_color = $_POST["vehicle-color"];
    
    // Insert vehicle information into MySQL database
    $stmt = $conn->prepare("insert into new_vehicles(vehicle_number,vehicle_model,vehicle_year,vehicle_color) values( ?,?,?,?)");
    $stmt->bind_param("ssis",$vehicle_number,$vehicle_model,$vehicle_year,$vehicle_color);

    $stmt->execute();
    $stmt->close();

    
    $conn->close();


    echo '<script>window.location.href = "Driver.html";</script>';

   
?>