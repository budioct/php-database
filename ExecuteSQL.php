<?php

require_once __DIR__ . '/ConnectionDB.php'; // require_once __DIR__ . '/namaClass.php';

$PDO = getConnection();

// query insert table
$sql = <<<SQL
INSERT INTO customers(id, name, email) VALUES('sdfsdfr3', 'jamal', 'jamal@test.com')
SQL;

// query insert
$eksekusi = $PDO->exec($sql); // exec() : int|false // perintah eksekusi query ke DB melalui interface PDO dengan driver API

if ($eksekusi > 0 || $eksekusi) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Data gagal ditambahkan";
}

// menutup koneksi
$PDO = null;
