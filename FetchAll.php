<?php

require_once __DIR__ . '/ConnectionDB.php'; // require_once __DIR__ . '/namaClass.php';

$PDO = getConnection(); // open koneksi ke driver mysql

$sql = "SELECT * FROM customers";
$statement = $PDO->query($sql);

$customers = $statement->fetchAll(); // fetchAll() // get data sekaligus

var_dump($customers);

$PDO = null;

/**
 * result:
 * array(2) {
 * [0]=>
 * array(6) {
 * ["id"]=>
 * string(7) "sdfawri"
 * [0]=>
 * string(7) "sdfawri"
 * ["name"]=>
 * string(5) "budhi"
 * [1]=>
 * string(5) "budhi"
 * ["email"]=>
 * string(14) "budhi@test.com"
 * [2]=>
 * string(14) "budhi@test.com"
 * }
 * [1]=>
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
 * }
 */