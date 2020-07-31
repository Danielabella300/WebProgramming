<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dabella1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE accounts SET u_name = '$_POST[username]' WHERE p_word='$_POST[password]' AND e_mail='$_POST[email]'";
if(mysqli_query($conn, $sql)) {
    echo "Record Updated Successfully";
    echo "<br/>";
    echo "<a href='index.html'>Go Back to Home Screen</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn -> error;
}
$conn->close();

