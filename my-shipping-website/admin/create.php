<?php
require '../config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Package</title>
    <link rel="stylesheet" href="../public/css/admin.css">
</head>
<body>
    <div class="container">
    <h1>Create New Package</h1>
    <form method="POST">
        <label>Tracking Number:</label><br>
        <input type="text" name="tracking_number" required><br>
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Shipped Date:</label><br>
        <input type="date" name="shipped_date" required><br>
        <label>Destination:</label><br>
        <input type="text" name="destination" required><br>
        <label>Status:</label><br>
        <input type="text" name="status" required><br>
        <button type="submit">Create Package</button>
    </form>
    <a href="index.php">Back to Packages</a>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tracking_number = $_POST['tracking_number'];
        $name = $_POST['name'];
        $shipped_date = $_POST['shipped_date'];
        $destination = $_POST['destination'];
        $status = $_POST['status'];
    
         $sql = "INSERT INTO packages (tracking_number, name, shipped_date, destination, status) VALUES ('$tracking_number', '$name', '$shipped_date', '$destination', '$status' )";
    
         if ($conn->query($sql) === TRUE) {
             echo "Record created successfully!";
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
     
         $conn->close();
     }
     ?>
</body>
</html>