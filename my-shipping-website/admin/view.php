<?php

require '../config/db.php';


// Fetch all packages from the database
$sql = ("SELECT * FROM packages");
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/admin.css">
    <title>View Packages</title>
</head>
<body>
<div class="container">
<header>
    <h1>View Packages</h1>
</header>
<main>
    <p><a href="index.php">Back</a></p>
    <h2>List of Packages</h2>
    <table>
        <thead>
            <tr>
                <th>Tracking Number</th>
                <th>Name</th>
                <th>Shipped Date</th>
                <th>Destination</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($package = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($package['tracking_number']); ?></td>
                    <td><?php echo htmlspecialchars($package['name']); ?></td>
                    <td><?php echo htmlspecialchars($package['shipped_date']); ?></td>
                    <td><?php echo htmlspecialchars($package['destination']); ?></td>
                    <td><?php echo htmlspecialchars($package['status']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $package['id']; ?>">Edit</a>
                        <form action="delete.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $package['id']; ?>">
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this package?');">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="create.php" class="btn">Add New Package</a>
    </main>
</div>

</body>
</html>

