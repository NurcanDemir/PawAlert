<?php 
// Veritabanı bağlantısını dahil et
include 'db.php';

// Formdan gelen veriyi al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $city = $_POST['city'];
    $date = $_POST['date'];

    // SQL sorgusu ile veritabanına veri ekle
    $sql = "INSERT INTO lost_pets (name, type, city, date) VALUES ('$name', '$type', '$city', '$date')";

    // Veriyi ekle
    if ($conn->query($sql) === TRUE) {
        // Başarı durumu
        $message = "Hayvan Bilgisi Kaydedildi ✅";
    } else {
        // Hata durumu
        $message = "Hata oluştu: " . $conn->error;
    }

    // Bağlantıyı kapat
    $conn->close();
} else {
    $message = "Form verisi alınamadı!";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Hayvan Bilgisi Kaydı</title>
  <style>
    body {
      background-color: #f1f8e9;
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    .container {
      background: #fff;
      padding: 20px;
      width: 400px;
      margin: auto;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      color: #558b2f;
    }
  </style>
</head>
<body>

<div class="container">
  <h2><?php echo $message; ?></h2>
  <p><strong>Adı:</strong> <?php echo htmlspecialchars($name); ?></p>
  <p><strong>Tür:</strong> <?php echo htmlspecialchars($type); ?></p>
  <p><strong>Şehir:</strong> <?php echo htmlspecialchars($city); ?></p>
  <p><strong>Tarih:</strong> <?php echo htmlspecialchars($date); ?></p>
</div>

</body>
</html>
