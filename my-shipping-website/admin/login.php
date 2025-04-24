<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Define the expected username and password
    $valid_username = "admin"; 
    $valid_password = "admin0147";

    // Check if the provided credentials match the hardcoded values
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variables for logged in admin
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect to admin page
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admim Login page</title>
    <link rel="stylesheet" href="../public/css/admin.css">

</head>
<body>
<header>
    <h1>Admin Login</h1>
</header>
<main>
<div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="login.php"> 
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($_GET['error'])) : ?> <!-- Display error message if set -->
            <p style="color: red; text-align: center;"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php endif; ?>
    </div>
</main>
</body>
</html>