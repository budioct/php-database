<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "root";

try {
    // membuka koneksi
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database MySQL" . PHP_EOL;

    // menutup koneksi
    $connection = null;

}catch (PDOException $exception){
    echo "Gagal terkoneksi ke database MySQL : " . $exception->getMessage() . PHP_EOL;
}

/**
 * Error PDOException
 * Pesan Error:
 * host: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo for localhostt failed: No such host is known.
 * port: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it
 * database: SQLSTATE[HY000] [1049] Unknown database 'salah'
 * username: SQLSTATE[HY000] [1045] Access denied for user ''@'localhost' (using password: YES)
 * password: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)
 */
