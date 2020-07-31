<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dabella1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}

$sql = "SELECT * FROM addressbook WHERE F_name='$_POST[fname]'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Address</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row["f_name"] . "</td>";
            echo "<td>" . $row["l_name"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br/>";
        echo "<a href='index.html'>Go Back to Home Screen</a>";
        mysqli_free_result($result);
    } else {
        echo "Error: result not found.";
        echo "<br/>";
        echo "<a href='index.html'>Go Back to Home Screen</a>";
    }
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();