<?php
$dsn  = "mysql:dbname=2014_web_native_biodata;host=localhost";
$user = "root";
$pass = "satusampe250599";

try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Koneksi ke database gagal: ".$e->getMessage();
}
?>