<?php
 
 $dsn = "mysql:host=localhost;dbname=project2;charset=utf8mb4";
 $options = [
   PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
   PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
 ];
 $pdo = new PDO($dsn, "bit_academy", "bit_academy", $options);
 
// // Check connection
// if ($pdo->connect_error) {
//     die("Connection failed: "
//         . $conn->connect_error);
// }

 if (isset($textblock)) {
     echo "$textblock";
     $stmt = $pdo->prepare("INSERT INTO code (code) VALUES (code = :code)");
     $stmt->execute([':code' => $textblock]);
 }
?>