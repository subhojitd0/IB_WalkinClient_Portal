<!DOCTYPE html>
<html lang="en">

<?php
require 'api/config.php';
$id=$_GET['id'];

$sql="SELECT * from `ib_bookcabs` where bookingid=$id";
$reqlist = mysqli_query($conn,$sql);
$req=mysqli_fetch_array($reqlist);

?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>IB Cabs Booking Form</title>
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/checkbooking.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<!--<h1>IB CABS</h1>-->
							<a href='https://bookings.ibcabs.in/'><img src="img/mainlogo.jpeg" width="150px"/></a>
							<!--<p>Kolkata,offers luxury transportation solutions. Renowned for its punctuality, comfort, and professional chauffeurs, IB Cabs ensures a seamless travel experience across the city.
							</p>-->
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">







						<div class="plan">
							<div class="inner">
								<span class="pricing">
									<span>
										<!-- <small> Booking ID : </small> -->
										Booking # :  
										<?php echo $req[0];?>	 
									</span>
								</span>
								
								<p>Dear <span class="title"><?php echo $req[1];?></span></p>
								<p class="info">
									<?php
										if($req[10]==0)
											echo 'Your booking with the following details are submitted to IB Cabs! You will be updated soon on the progress on '.$req[2].'.';
									?>
								</p></br>

								<?php
									if($req[3]==1)
									{
								?>
									<ul class="features">
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Pickup from <strong>Airport</strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Reporting Date <strong><?php echo $req[6];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Reporting Time <strong><?php echo $req[8];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Drop at  <strong><?php echo $req[5];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Requested Vehicle <strong><?php echo $req[9];?></strong></span>
										</li>
										
									</ul>
								<?php
									}
								?>



								<?php
									if($req[3]==2)
									{
								?>
									<ul class="features">
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Pickup from <strong><?php echo $req[5];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Reporting Date <strong><?php echo $req[6];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Reporting Time <strong><?php echo $req[8];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Drop at  <strong>Airport</strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Requested Vehicle <strong><?php echo $req[9];?></strong></span>
										</li>
										
									</ul>
								<?php
									}
								?>



								<?php
									if($req[3]==3)
									{

										$sqlpack="SELECT * from `ib_ratewalkin` where hr='$req[4]' and cartype='$req[9]'";
										$packlist = mysqli_query($conn,$sqlpack);
										$pack=mysqli_fetch_array($packlist);
								?>
									<ul class="features">
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span><strong><?php echo $pack[1].'hr or '.$pack[2].'km';?></strong> Package</span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Reporting at <strong><?php echo $req[5];?></strong></span>
										</li>
									
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Reporting Date <strong><?php echo $req[6];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Reporting Time <strong><?php echo $req[8];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Requested Vehicle <strong><?php echo $req[9];?></strong></span>
										</li>
										
									</ul>
								<?php
									}
								?>




								<?php
									if($req[3]==4)
									{

									
								?>
									<ul class="features">
										
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Reporting at <strong><?php echo $req[5];?></strong></span>
										</li>
										
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Reporting Date <strong><?php echo $req[6];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Reporting Time <strong><?php echo $req[8];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Return Date <strong><?php echo $req[7];?></strong></span>
										</li>
										<li>
											<span class="icon">
												<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0h24v24H0z" fill="none"></path>
													<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
												</svg>
											</span>
											<span>Requested Vehicle <strong><?php echo $req[9];?></strong></span>
										</li>
										
									</ul>
								<?php
									}
								?>


								</br></br>
								<div class="action">
								<a class="button" href="tel:+919830800776">
									Any Issue? Please Call Us.	
								</a>
								</div>
							</div>
						</div>


















						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
		
    });

</script>

    
    