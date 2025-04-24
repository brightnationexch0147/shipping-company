<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/cssreset.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    require_once ('header.php');

    ?>
<?php

require '../config/db.php';

if (isset($_GET['tracking_number'])) {
    $tracking_number = $_GET['tracking_number'];

 
    // Search query
    $sql = "SELECT * FROM packages WHERE tracking_number = '$tracking_number'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Package Details</h2>";
        echo "Tracking Number: " . $row['tracking_number'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "shipped Date: " . $row['shipped_date'] . "<br>";
        echo "Destination: " . $row['destination'] . "<br>";
        echo "Status: " . $row['status'] . "<br>";
    } else {
        echo "No package found with the tracking number: " . htmlspecialchars($tracking_number);
    }

    $conn->close();
}
?>

<?php
    require_once ('footer.php');

    ?>
</body>
</html>
