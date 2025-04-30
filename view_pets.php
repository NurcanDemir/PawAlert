<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_project"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM lost_pets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Type: " . $row["type"]. " - City: " . $row["city"]. " - Date: " . $row["date"]. "<br>";
    }
} else {
    echo "No pet listings found.";
}


$conn->close();
?>
