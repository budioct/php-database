<?php

require_once __DIR__ . '/ConnectionDB.php'; // require_once __DIR__ . '/namaClass.php';

$PDO = getConnection(); // open koneksi ke driver mysql

// tidak di sarankan karna SQL Injection
// $username = "budioct'; #"; // karna # jadi di belakang query di angap comment
// $password = "salah gak peduli"; // jadi comment karna variable username ada #

//$username = $PDO->quote("budioct'; #"); // sql injection
$username = $PDO->quote("budioct"); // quote() // mendeteksi sql injection
$password = $PDO->quote("pass");

$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";

echo $sql . PHP_EOL;

$statement = $PDO->query($sql);  // query(): PDOStatement // eksekusi query sql fetch data

$success = false;
$find_user = null;
foreach ($statement as $row) {
    // sukses
    $success = true;
    $find_user = $row["username"]; // get data dari hasil query ["name_column"]
}

if ($success) {
    echo "Sukse login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$PDO = null;


/**
 * dengan seperti ini maka tidak akan SQL Injection
 */