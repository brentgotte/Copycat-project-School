


<?php
$host = 'localhost';
$db   = 'project2';
$user = 'bit_academy';
$pass = 'bit_academy';
$charset = 'utf8mb4';

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
?>

<?php
include('conn.php');

$username = $_POST['username'];
$thumbs = $_POST['thumbs'];
$comment = $_POST['comment'];

$sql = ("INSERT INTO comments (id, name, comment, Thumbs) VALUES ('', '$username','$comment','$thumbs')");
$stmt = $pdo->prepare($sql);
$stmt->execute();

?>
