<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBALTARGET</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <link rel="stylesheet" href="./public/css/cssreset.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <script src="https://kit.fontawesome.com/cbdf2b0f0e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Rowdies", sans-serif;
            font-weight: 700;
            font-style: Bold;
        }
    </style>
</head>

<body>

    <?php
    include("views/header.php");
    ?>
    <section class="hero">
        <div class="overlay">
            <h1>GLOBALTARGET SHIPPING COMPANY</h1>
            <p>Your Trusted Partner in Global Shipping and Logistics</p>
            <a href="./views/services.php" class="cta-button">Explore Services</a>
        </div>
    </section>

    <div class="container mt-5">
        <div class="row">
            <?php
            include_once("views/content.php");
            ?>
        </div>
        
    </div>
    <?php
    include_once("views/footer.php");
    ?>

</body>

</html>