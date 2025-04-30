<?php

$conn = new mysqli("localhost", "root", "", "pet_project");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$type = $_POST['type'];
$city = $_POST['city'];
$date = $_POST['date'];


$sql = "INSERT INTO lost_pets (name, type, city, date) VALUES ('$name', '$type', '$city', '$date')";


if ($conn->query($sql) === TRUE) {
    echo "Pet listing added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
