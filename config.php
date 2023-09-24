<?php 
date_default_timezone_set("Asia/Calcutta");
///header('Content-Type:application/json');
$servername = "localhost";
$username = "u850301864_seo_tools_user";
$password = "Basudev@2806";
$dbname = "u850301864_seo_tools_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$link = new mysqli($servername, $username, $password, $dbname);

//PDO
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>