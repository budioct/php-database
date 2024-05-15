<?php

require_once __DIR__ . '/ConnectionDB.php'; // require_once __DIR__ . '/namaClass.php';

$PDO = getConnection(); // open koneksi ke driver mysql

$PDO->exec("INSERT INTO comments(email, comment) VALUES ('adam@test.com', 'hi')"); // exec(): int|false // eksekusi query langsung
$id = $PDO->lastInsertId(); // lastInsertId() untuk mendapatkan Id terakhir yang dibuat secara auto increment

echo $id . PHP_EOL; // hasil print id sequence dari table

$PDO = null;