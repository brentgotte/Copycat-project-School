<?php

$host = 'localhost';
$db   = 'project2';
$user = 'bit_academy';
$pass = 'bit_academy';
$charset = 'utf8mb4';
$id = uniqid();
$lang = $_POST["language"];
$textblock = $_POST["textblock"];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
    $a = [$textblock, $lang, $id];
    $sql = "INSERT INTO code (sharecode, Language, uniquelink)
    VALUES (?,?,?)";
    $updateSQL = $pdo->prepare($sql);
    $updateSQL->execute($a);
    
header("Location:code.php?uniqid=$id");
?>

