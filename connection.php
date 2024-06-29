<?php
// Aiven MySQL database credentials
$db_host = 'haas-ravi-hospital-ravi.f.aivencloud.com';
$db_port = '19645';
$db_name = 'defaultdb';
$db_user = 'avnadmin';
$db_password = 'AVNS_ffzbedx-7EOjpKEIs_V';

// Attempt to connect to MySQL database
try {
    $database = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to Aiven MySQL database.";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
