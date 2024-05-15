<?php

require_once __DIR__ . '/ConnectionDB.php'; // require_once __DIR__ . '/namaClass.php';

$PDO = getConnection(); // open koneksi ke driver mysql

$username = "budioct";
$password = "pass";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$statement = $PDO->prepare($sql); // prepare() sql safe
$statement->bindParam("username", $username); // binding parameter on sql
$statement->bindParam("password", $password);
$statement->execute(); // execute(): bool // eksekusi prepare statement

// fetch() // fetch() // get satu data dari hasil query jika ada true, sampai false (sudah tidak ada data)
if ($row = $statement->fetch()) {
    echo "Sukses Login : " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

// tutup koneksi DB
$connection = null;