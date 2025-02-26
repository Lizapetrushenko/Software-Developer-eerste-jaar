<?php
// Establishing the connection to the database
$conn = mysqli_connect("localhost", "root", "", "top2000");

// Checking the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Processing the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['id']) && !empty($_POST['artist']) && !empty($_POST['country'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['artist']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    
    // Using a prepared statement to update the artist details
    $sql = "UPDATE artist SET name = ?, country = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // Binding the parameters and executing the query
    mysqli_stmt_bind_param($stmt, "ssi", $name, $country, $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

// Retrieving the artist's details for editing
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Using a prepared statement to fetch the artist's data
    $sql = "SELECT * FROM artist WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    // Binding the result to variables
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        die("Artist not found.");
    }

    mysqli_stmt_close($stmt);
} else {
    die("Invalid ID.");
}
?>

<!-- HTML Form to display the artist's data for editing -->
<form method="post">
    <label for="id">ID:</label>
    <input readonly type="text" name="id" id="id" value="<?= htmlspecialchars($row['id']) ?>"><br>

    <label for="artist">Artist:</label>
    <input type="text" name="artist" id="artist" value="<?= htmlspecialchars($row['name']) ?>"><br>

    <label for="country">Country:</label>
    <input type="text" name="country" id="country" value="<?= htmlspecialchars($row['country']) ?>"><br>

    <input type="submit" name="submit" value="Update">
</form>

<?php
// Closing the connection
mysqli_close($conn);
?>
