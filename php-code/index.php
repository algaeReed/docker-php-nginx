<?php
$host = 'mysql';
$user = 'your_database_user';
$pass = 'your_database_password';
$db_name = 'your_database_name';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL successfully!";
?>
