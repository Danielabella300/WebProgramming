<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dabella1";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ") . $conn->connect_error;
}

$sql = "INSERT INTO addressbook (f_name, l_name, address)
    
    VALUES
    
    ('$_POST[fname]','$_POST[lname]','$_POST[address]')";
if(mysqli_query($conn, $sql)){
    echo "Record added";
    echo "<br/>";
    echo "<a href='index.html'>Go Back to Home Screen</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();