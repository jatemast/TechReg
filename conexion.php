<?php
$connection = 'mysql';
$host = 'localhost';
$port = '3306';
$database = 'proyectotaller';
$username = 'root';
$password = '';

try {
    $dsn = "$connection:host=$host;port=$port;dbname=$database";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>