<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dabella1";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ") . $conn->connect_error;
}

$sql = "SELECT id, f_name, l_name, address FROM addressbook";
$result = $conn -> query($sql);

echo "<h1>View All Entries</h1>";
if($result -> num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " Name: " . $row["f_name"] . " " . $row ["l_name"] . " Address: " . $row["address"] .
            "<br/>";
    }
    echo "<br/>";
    echo "<a href='index.html'>Go Back to Home Screen</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();