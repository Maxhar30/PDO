<?php 
$hosts = "127.0.0.1";
$user = "root";
$password = "";
$db = "PDO_Test";

//Set DSN

$dsn = "mysql:host=" . $hosts . ";dbname=" . $db;
//Create PDO intance
$pdo = new PDO($dsn, $user, $password);

// Setting Default values or mode for Fetch
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


#PDO Queries

$stmt = $pdo->query('SELECT * FROM posts');

// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//     echo $row['title'].'<br>';
// }
while($row = $stmt->fetch()){
    echo $row->title.'<br>';
}
?>
