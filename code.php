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

$uniqid = $_GET["uniqid"];

$sql2 = "SELECT sharecode,Language FROM code WHERE uniquelink = '$uniqid'";
$statement = $pdo->prepare($sql2);
$statement->execute();
$result = $statement->fetch();
$code = $result['sharecode'];
$language = $result['Language'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link href="scrum/codemirror.css" rel="stylesheet"/>
    <link href="scrum/dracula.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <div class="logo">
    <a href="indeex.php"><h3>COPYCAT</h3></a>
    </div>
    <form action="link.php" method="post">
        <div class="nav">
            <h1>Here is a preview of your code!</h1>
        </div>
        
            <div class="Codemirror">
            <textarea readonly id="textblock" name="textblock" rows="35" cols="100"><?php
            echo $code;
            ?>
            </textarea>
            </div>
</form>
<div class="form">
                <form action="review.php" method="post">
                    <label for="username"><b>Enter your username:</b></label> <br>
                    <input type="text" id="username" name="username" placeholder="Enter username here:" required><br>
                    <label for="username"><b>Typ your comment here:</b></label> <br>
                    <textarea name="comment" rows="10" cols="30"></textarea> <br>
                    <label for="rating"><b>give it a rating: (1-10)</b></label> <br>
                    <input type="number" id="number" name="number" min="1" max="10" required> <br>  <br>
                    <input type="submit" value="submit your comment!">
                </form>
            </div>
        </div>
        <div class="links">
            <a href="#">
                <button id="btn" onclick="myFunction()">Copy link</button>
            <a href="index.php">
                <button type="submit">Previous page</button>
            </div>
            <script>
function myFunction() {
    var copyText = navigator.clipboard.writeText(window.location.href);
}
const btn = document.getElementById("btn");
btn.addEventListener("click", ()=>{
    if(btn.innerText === "Copy link"){
        btn.innerText = "Link copied";
    }else{
        btn.innerText= "Copy link";
    }
});
const thumbsup = document.getElementById('up');
thumbsup.addEventListener('click', function onClick() {
    document.getElementById("thumbs").value = "up";
    thumbsup.style.color = 'green';
    thumbsdown.style.color = "black";
});

const thumbsdown = document.getElementById('donw');
thumbsdown.addEventListener('click', function onClick() {
    document.getElementById("thumbs").value = "down";
    thumbsdown.style.color = 'red';
    thumbsup.style.color = "black";
});

</script>
</body>
</html>
<?php
if (isset($_POST['textblock'])) {
    $sql = "INSERT INTO code (sharecode) VALUES ('$textblock')";
    $updateSQL = $pdo->prepare($sql);
    $updateSQL->execute();
}
?>