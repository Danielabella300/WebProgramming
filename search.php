<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dabella1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}

$sql = "SELECT * FROM accounts WHERE u_name='$_POST[username]'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<th>Account</th>";
        echo "<th>Password</th>";
        echo "<th>E-mail</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row["u_name"] . "</td>";
            echo "<td>" . "**********" . "</td>";
            echo "<td>" . $row["e_mail"] . "</td>";
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