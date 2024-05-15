<?php

require_once __DIR__ . '/ConnectionDB.php'; // require_once __DIR__ . '/namaClass.php';

$PDO = getConnection(); // open koneksi ke driver mysql

$username = "budioct'; #"; // karna # jadi di belakang query di angap comment
$password = "salah gak peduli"; // jadi comment karna variable username ada #

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';"; // query tidak di sarankan karna rawan sql injection

echo $sql . PHP_EOL;

$statement = $PDO->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    // sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukse login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$PDO = null;
