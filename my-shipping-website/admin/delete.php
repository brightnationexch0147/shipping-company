<?php
require '../config/db.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];


    // Delete query
    $sql = "DELETE FROM packages WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
