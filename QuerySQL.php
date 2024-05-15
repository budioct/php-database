<?php

require_once __DIR__ . '/ConnectionDB.php'; // require_once __DIR__ . '/namaClass.php';

$PDO = getConnection();

// query get all table
$sql = "SELECT * FROM customers";

$result = $PDO->query($sql); // query(): PDOStatement // eksekusi query sql fetch data

// iterasi hasil query
foreach ($result as $row) {

    var_dump($row);
}

// menutup koneksi
$PDO = null;

/**
 * result query:
 * array(6) {
 * ["id"]=>
 * string(8) "sdfsdfr3"
 * [0]=>
 * string(8) "sdfsdfr3"
 * ["name"]=>
 * string(5) "jamal"
 * [1]=>
 * string(5) "jamal"
 * ["email"]=>
 * string(14) "jamal@test.com"
 * [2]=>
 * string(14) "jamal@test.com"
 * }
 */
