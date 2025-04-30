<?php
$servername = "localhost";
$username = "root";  // XAMPP varsayılan kullanıcı adı
$password = "";      // XAMPP varsayılan şifre
$dbname = "pet_project"; // Veritabanı adı

// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
