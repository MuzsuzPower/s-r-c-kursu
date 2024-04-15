<?php
// Veritabanı bağlantısı için bilgiler
$servername = "localhost"; // Sunucu adı
$username = "kullanici_adi"; // Veritabanı kullanıcı adı
$password = "sifre"; // Veritabanı parolası
$dbname = "surucu_kursu"; // Veritabanı adı

// Formdan gelen verileri al
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Veritabanına veri ekle
$sql = "INSERT INTO kayitlar (ad, soyad, email, telefon)
VALUES ('$ad', '$soyad', '$email', '$telefon')";

if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarıyla eklendi";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
