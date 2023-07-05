<?php


    $conn = mysqli_connect("localhost", "root","Siddhikoli@1","vehicle_register");

    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $vehicle_number=$_POST["vehiclenumber"];
    $driver_name = $_POST["driver-name"];
    $driver_age = $_POST["driver-age"];
    $driver_email = $_POST["driver-email"];


    $stmt = $conn->prepare("insert into new_drivers(vehicle_number,driver_name,drivers_age,drivers_email) values(?, ?, ?, ?)");
    $stmt->bind_param("ssis",$vehicle_number,$driver_name,$driver_age,$driver_email);
    $stmt->execute();
    $stmt->close();

    $conn->close();
    echo '<script>alert("Submitted")</script>';
    echo '<script>window.location.href = "homepage.html";</script>';


?>