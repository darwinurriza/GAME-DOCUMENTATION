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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $picture = $_FILES['picture']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($picture);

    // Ensure the uploads directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    if (move_uploaded_file($_FILES['picture']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO characters (name, location, picture) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $location, $target_file);

        if ($stmt->execute()) {
            echo "Character added successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>
