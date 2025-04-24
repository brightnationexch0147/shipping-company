
<?php
				   
  if(isset($_REQUEST['submit'])){

    $first_name=$_REQUEST['firstname'];
    $last_name=$_REQUEST['lastname'];
    $address=$_REQUEST['address'];
    $status=$_REQUEST['pkg_status'];

    $message=("Frist Name: $first_name,
        Last Name: $last_name,
        Delivery Address: $address,
         Package Status: $status.");

    $to="/admin/view_packages.php";
    $subject="Request Form";
    $headers = "From: $email"; 
    $sent = mail($to, $subject, $message, $headers) ; 
    if($sent){
    echo("<center>Your Request was sent successfully</center>");
    }else{

    echo("<center>We encountered an error sending your mail</center>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote</title>
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/cssreset.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php
    require('header.php');
?>
<section class="page-title-secttion">
    <div class="container">
      <div class="page-header">
        <h1>Request a Quote</h1>
      </div>
      <ol class="breadcrumb justify-content-center">
        <li><a href="#">Home </a></li>
        <li class="active">/ Quote</li>
      </ol>
    </div>
</section>
<div class="container my-4">
  <div class="row">
  <div class="col-12 col-md-9">
    <h2>Request a quote!</h2>
    <div class="">
    <form method="POST">
      <div class="form-row">
        <div class="col-12 col-md-6 mb-3">
          <label for="validationDefault01">Tracking Number</label>
          <input type="text" name ="tracking_number" class="form-control" id="validationDefault01" placeholder="Mark" required>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="validationDefault02">First name</label>
          <input type="text" name ="firstname" class="form-control" id="validationDefault02" placeholder="Mark" required>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="validationDefault03">Last name</label>
          <input type="text" name ="lastname" class="form-control" id="validationDefault03" placeholder="Otto" required>
        </div>
      </div>
      
      <div class="form-row">
        <div class="col-12 col-md-6 mb-3">
          <label for="validationDefault04">Address</label>
          <input type="text" name ="address" class="form-control" id="validationDefault04" placeholder="Oslo, 12 Street" required>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="validationDefault05">Package Status</label>
          <input type="text" name ="status" class="form-control" id="validationDefault05" placeholder="Port Harcort" required>
        </div>
      </div>
     
      <div class="form-row mt-3">
        <input class="btn btn-primary" name="submit" type="submit" value="Submit Form"/>
      </div>
    </form>
    </div>
  </div>
  </div>
</div>
<?php
    require_once('footer.php')
?>

</body>
</html>