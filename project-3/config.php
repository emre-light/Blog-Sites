<?php
$db_servername = "localhost"; // 127.0.0.1
$db_username = "root";
$db_password = "";
$db_name = "proje";


$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

// bağlantı kontrolü
if ( !$conn ) {
    die("Bağlantı kurulamadı: " . mysqli_connect_error());
}
mysqli_query($conn, "set names 'utf8'");
?>