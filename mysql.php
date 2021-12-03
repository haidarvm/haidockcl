<?php
$servername = 'mariadb';
$username = 'haidock';
$password = 'bismillah';
$dbname = 'haidock';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die('Connection failed: ' . $conn->connect_error);
}

function gen_text($file, $text) {
    $txt = $text;
    file_put_contents($file, $txt . PHP_EOL, FILE_APPEND);
}

$number = rand(1, 203147);
$sql = "SELECT * FROM  geo_countries ORDER BY RAND() LIMIT 1";
$result =  $conn->query($sql);
$fetchall  = $result->fetch_all(MYSQLI_ASSOC);
// $array = array_column($fetchall, 'Body');
// $resultArray = array_map("strip_tags", $array);
$json = json_encode($fetchall);
header('Content-Type: application/json');
echo $json;