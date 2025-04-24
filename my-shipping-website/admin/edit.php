<?php

require '../config/db.php'
;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record
    $sql = "SELECT * FROM packages WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found.";
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Package</title>
    <link rel="stylesheet" href="../public/css/admin.css">
</head>

<body>
    <div class="container">
    <h1>Edit Package</h1>
    <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Tracking Number:</label><br>
        <input type="text" name="tracking_number" value="<?php echo $row['tracking_number']; ?>" required><br>
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        <label>Shipped Date:</label><br>
        <input type="date" name="shipped_date" value="<?php echo $row['shipped_date']; ?>" required><br>
        <label>Destination:</label><br>
        <input type="text" name="destination" value="<?php echo $row['destination']; ?>" required><br>
        <label>Status:</label><br>
        <input type="text" name="status" value="<?php echo $row['status']; ?>" required><br>
        <button type="submit">Update Package</button>
    </form>
    <a href="view.php">Back to Packages</a>
    </div>
</body>

</html>