<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epiko_game";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM characters WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Character deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
