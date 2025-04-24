<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Package</title>
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/cssreset.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
<style>
   
    h1{
    text-align: center;
    margin-top: 15px;
    }
    label{
        color: white;
        font-weight: bolder;
        font-size: large;
        padding-right: 20px;
        margin: 10px;
    }
input{
width: 30%;
height: 40px;
border-radius: 10px;
border:none;
}

button{
background-color: blue;
color: white;
padding: 5px;
border-radius: 5px;
}

</style>
</head>
<body>
    <?php
    include_once ('header.php');
    ?>
    <h1>Package Tracking</h1>
    <form action="track.php" method="GET">
        <label for="tracking_number">Enter Tracking Number:</label>
        <input type="text" name="tracking_number" id="tracking_number" required>
        <button type="submit">Track</button>
    </form>
    <?php
    include_once ('footer.php');
    ?>
</body>
</html>
