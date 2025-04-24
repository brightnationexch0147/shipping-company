
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
require('header.php');
?>
<section class="page-title-secttion">
    <div class="container">
      <div class="page-header">
        <h1>Contact</h1>
      </div>
      <ol class="breadcrumb justify-content-center">
        <li><a href="#">Home </a></li>
        <li class="active">/ Contact</li>
      </ol>
    </div>
</section>

<section class="contact-wrap section-padding">
						<div class="container">
							<div class="office-locations">
								<h2>Worldwide Location</h2>
								<div class="row">
									<div class="col-sm-3 col-xs-6">
										<div class="office-address">
											<h3>Head Office</h3>
											<address>
												<span>384 Maple Circle</span>
												<span>Simi Valley Navada 47489</span>
												<br>
												<span>T.(554) 616 9926</span>
												<span>M.(554) 616 9926</span>
												<span>F.(554) 616 9926</span>
												<a href="#">example@yahoo.com</a>

											</address>
										</div>
									</div><!-- /.col -->

									<div class="col-sm-3 col-xs-6">
										<div class="office-address">
											<h3>State Office</h3>
											<address>
												<span>384 Maple Circle</span>
												<span>Simi Valley Navada 47489</span>
												<br>
												<span>T.(554) 616 9926</span>
												<span>M.(554) 616 9926</span>
												<span>F.(554) 616 9926</span>
												<a href="#">example@yahoo.com</a>

											</address>
										</div>
									</div><!-- /.col -->

									<div class="col-sm-3 col-xs-6">
										<div class="office-address">
											<h3>Country Office</h3>
											<address>
												<span>384 Maple Circle</span>
												<span>Simi Valley Navada 47489</span>
												<br>
												<span>T.(554) 616 9926</span>
												<span>M.(554) 616 9926</span>
												<span>F.(554) 616 9926</span>
												<a href="#">example@yahoo.com</a>

											</address>
										</div>
									</div><!-- /.col -->

									<div class="col-sm-3 col-xs-6">
										<div class="office-address">
											<h3>Zonal Office</h3>
											<address>
												<span>384 Maple Circle</span>
												<span>Simi Valley Navada 47489</span>
												<br>
												<span>T.(554) 616 9926</span>
												<span>M.(554) 616 9926</span>
												<span>F.(554) 616 9926</span>
												<a href="#">example@yahoo.com</a>

											</address>
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-sm-3 col-xs-6">
										<div class="office-address">
											<h3>USA Office</h3>
											<address>
												<span>384 Maple Circle</span>
												<span>Simi Valley Navada 47489</span>
												<br>
												<span>T.(554) 616 9926</span>
												<span>M.(554) 616 9926</span>
												<span>F.(554) 616 9926</span>
												<a href="#">example@yahoo.com</a>

											</address>
										</div>
									</div><!-- /.col -->

									<div class="col-sm-3 col-xs-6">
										<div class="office-address">
											<h3>Atlanta Office</h3>
											<address>
												<span>384 Maple Circle</span>
												<span>Simi Valley Navada 47489</span>
												<br>
												<span>T.(554) 616 9926</span>
												<span>M.(554) 616 9926</span>
												<span>F.(554) 616 9926</span>
												<a href="#">example@yahoo.com</a>

											</address>
										</div>
									</div><!-- /.col -->

									<div class="col-sm-3 col-xs-6">
										<div class="office-address">
											<h3>Singapore Office</h3>
											<address>
												<span>384 Maple Circle</span>
												<span>Simi Valley Navada 47489</span>
												<br>
												<span>T.(554) 616 9926</span>
												<span>M.(554) 616 9926</span>
												<span>F.(554) 616 9926</span>
												<a href="#">example@yahoo.com</a>

											</address>
										</div>
									</div><!-- /.col -->

									<div class="col-sm-3 col-xs-6">
										<div class="office-address">
											<h3>Canada Office</h3>
											<address>
												<span>384 Maple Circle</span>
												<span>Simi Valley Navada 47489</span>
												<br>
												<span>T.(554) 616 9926</span>
												<span>M.(554) 616 9926</span>
												<span>F.(554) 616 9926</span>
												<a href="#">example@yahoo.com</a>

											</address>
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div><!-- /.office-locations -->

							<div class="send-feedback">
								<h2>Send us your feedback</h2>
								<form id="contactForm" action="sendemail.php" method="POST">
								  	<div class="row">
								  	  	<div class="col-sm-4 col-12">
										  <div class="form-group">
										    <label for="name">Name*</label>
										    <input id="name" name="name" type="text" class="form-control" required="" placeholder="">
										  </div>
									 	</div><!-- /.col -->
									 	<div class="col-sm-4 col-12">
										  <div class="form-group">
										    <label for="email">E-mail*</label>
										    <input id="email" name="email" type="email" class="form-control" required="" placeholder="">
										  </div>
										</div><!-- /.col -->
										<div class="col-sm-4 col-12">
										  <div class="form-group">
										    <label for="url">Website</label>
										    <input id="url" name="url" type="text" class="form-control" placeholder="">
										  </div>
										</div><!-- /.col -->
								  	</div><!-- /.row -->
								  	<div class="row">
								  	  	<div class="col-sm-4 col-12">
										  <div class="form-group">
										    <label for="organization">Organization</label>
										    <input id="organization" name="organization" type="text" class="form-control" placeholder="">
										  </div>
									 	</div><!-- /.col -->
									 	<div class="col-sm-4 col-12">
										  <div class="form-group">
										    <label for="position">Position</label>
										    <input id="position" name="position" type="text" class="form-control" placeholder="">
										  </div>
										</div><!-- /.col -->
										<div class="col-sm-4 col-12">
										  <div class="form-group">
										    <label for="country">Country</label>
										    <input id="country" name="country" type="text" class="form-control" placeholder="">
										  </div>
										</div><!-- /.col -->
								  	</div><!-- /.row -->
								  	<div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
                        </div>
										</div><!-- /.col -->
								  	</div><!-- /.row -->

								  	<div class="form-group submit-btn">
								 	 	<button type="submit" class="btn btn-primary">Send feedback</button>
								  	</div>
								</form>
							</div><!-- /.send-feedback -->
						</div><!-- /.container -->
					</section>

                    <?php
require('footer.php');
?>
</body>
</html>