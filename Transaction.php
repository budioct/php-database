<?php

/**
 * Transaction di PDO
 * ● Secara default, semua perintah SQL yang kita kirim menggunakan PDO akan otomatis di commit,
 *    atau istilahnya auto commit
 * ● Namun kita bisa menggunakan fitur transaksi sehingga SQL yang kita kirim tidak secara otomatis di
 *    commit ke database
 * ● Untuk memulai transaksi, kita bisa menggunakan function beginTransaction() di PDO
 * ● Dan untuk commit transaksi, kita bisa menggunakan function commit()
 * ● Sedangkan jika kita ingin melakukan rollback, kita bisa menggunakan function rollback()
 */

require_once __DIR__ . '/ConnectionDB.php'; // require_once __DIR__ . '/namaClass.php';

$PDO = getConnection(); // open koneksi ke driver mysql

// instance transaksi
$PDO->beginTransaction();

$PDO->exec("INSERT INTO comments(email, comment) VALUES ('budhi@test.com', 'hi')");
$PDO->exec("INSERT INTO comments(email, comment) VALUES ('budhi@test.com', 'hi')");
$PDO->exec("INSERT INTO comments(email, comment) VALUES ('budhi@test.com', 'hi')");
$PDO->exec("INSERT INTO comments(email, comment) VALUES ('budhi@test.com', 'hi')");
$PDO->exec("INSERT INTO comments(email, comment) VALUES ('budhi@test.com', 'hi')");

 $PDO->commit(); // commit() // untuk commit transaksi ke DB

//$PDO->rollBack(); // rollBack // untuk rollback transaksi ke DB

// tutup koneksi
$PDO = null;
