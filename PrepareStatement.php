<?php

require_once __DIR__ . '/ConnectionDB.php'; // require_once __DIR__ . '/namaClass.php';

$PDO = getConnection(); // open koneksi ke driver mysql

//$username = "budioct'; #'"; // sql injection
$username = "budioct";
$password = "pass";

// binding dengan parameter
//$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
//echo $sql . PHP_EOL;
//$statement = $PDO->prepare($sql); // prepare() lebih aman ketimbang quote()
//$statement->bindParam("username", $username); // bindParam() // biding param yang ada di query :username
//$statement->bindParam("password", $password);
//$statement->execute(); // execute(): bool // eksekusi prepare statement

// binding dengan index
//$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
//echo $sql . PHP_EOL;
//$statement = $PDO->prepare($sql);
//$statement->bindParam(1, $username);
//$statement->bindParam(2, $password);
//$statement->execute();

// binding parameter ketika Execute
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
echo $sql . PHP_EOL;
$statement = $PDO->prepare($sql);
$statement->execute([$username, $password]);

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

