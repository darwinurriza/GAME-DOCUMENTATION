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

$sql = "SELECT id, name, location, picture FROM characters";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="character-item">';
        echo '<img src="' . $row['picture'] . '" alt="' . $row['name'] . '" width="50" height="50">';
        echo '<div class="character-info">';
        echo '<h4>' . $row['name'] . '</h4>';
        echo '<p>' . $row['location'] . '</p>';
        echo '</div>';
        echo '<div class="character-actions">';
        echo '<a href="edit_character.php?id=' . $row['id'] . '" class="edit-btn">Edit</a>';
        echo '<a href="delete_character.php?id=' . $row['id'] . '" class="delete-btn">Delete</a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No characters found";
}

$conn->close();
?>
