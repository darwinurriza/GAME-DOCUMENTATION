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
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $picture = $_FILES['picture']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($picture);

    // Move the uploaded file to the target directory
    if ($picture && move_uploaded_file($_FILES['picture']['tmp_name'], $target_file)) {
        $sql = "UPDATE characters SET name='$name', location='$location', picture='$target_file' WHERE id=$id";
    } else {
        $sql = "UPDATE characters SET name='$name', location='$location' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Character updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT name, location, picture FROM characters WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form action="edit_character.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="inputBx">
                <p>Enter Name</p>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="inputBx">
                <p>Enter Location</p>
                <input type="text" name="location" value="<?php echo $row['location']; ?>" required>
            </div>
            <div class="inputBx">
                <p>Choose Picture</p>
                <input type="file" name="picture">
                <img src="<?php echo $row['picture']; ?>" alt="<?php echo $row['name']; ?>">
            </div>
            <div class="inputBx">
                <input type="submit" name="Submit" value="Update Character">
            </div>
        </form>
        <?php
    } else {
        echo "Character not found";
    }
}

$conn->close();
?>
