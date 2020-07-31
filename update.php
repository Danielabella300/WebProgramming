<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dabella1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE addressbook SET l_name = '$_POST[lname]', 
address='$_POST[address]' WHERE f_name='$_POST[fname]'";
if(mysqli_query($conn, $sql)) {
    echo "Record Updated Successfully";
    echo "<br/>";
    echo "<a href='index.html'>Go Back to Home Screen</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn -> error;
}
$conn->close();

