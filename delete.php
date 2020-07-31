<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dabella1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "delete from addressbook where F_name='$_POST[fname]'";
if ($conn -> query($sql) === TRUE) {
    echo "Record Deleted Successfully";
    echo "<br/>";
    echo "<a href='index.html'>Go Back to Home Screen</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn -> error;
}
$conn->close();
