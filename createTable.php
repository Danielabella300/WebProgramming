<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dabella1";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn -> connect_error) {
    die("connection failed: " . $conn -> connect_error);
}

$sql = "CREATE TABLE addressbook (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
f_name VARCHAR(30) NOT NULL,
l_name VARCHAR(30) NOT NULL,
address VARCHAR(50))";

if ($conn -> query($sql) === TRUE) {
    echo "Table addressbook created successfully";
} else {
    echo "Error creating table: " . $conn->error;
} $conn->close();