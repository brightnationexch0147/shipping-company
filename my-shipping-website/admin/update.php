<?php

require '../config/db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $tracking_number = $_POST['tracking_number'];
    $name = $_POST['name'];
    $shipped_date = $_POST['shipped_date'];
    $destination = $_POST['destination'];
    $status = $_POST['status'];

    

    $sql = "UPDATE packages SET tracking_number = '$tracking_number', name = '$name', shipped_date = '$shipped_date', destination = '$destination', status = '$status' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
