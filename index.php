<!DOCTYPE html>
<html lang="en">

<?php
require 'api/config.php';
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
							<img src="img/mainlogo.jpeg" width="150px"/>
							<!-- <p>Kolkata,offers luxury transportation solutions. Renowned for its punctuality, comfort, and professional chauffeurs, IB Cabs ensures a seamless travel experience across the city.
							</p> -->
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form action="api/bookcabs.php" method="POST">
								
								<div class="form-group">
									<span class="form-label">Need Car For </span>
									<select class="form-control" id="dutytype" name="dutytype" required>
										<option value=""></option>
										<option value="1">Airport Pickup [25km incl.]</option>
										<option value="2">Airport Drop [25km incl.]</option>
										<option value="3">Local Rental</option>
										<option value="4">Outstation</option>
										
									</select>
									<span class="select-arrow"></span>
								</div>

								<div class="row" id="pdrow" name="pdrow">
									<div class="form-group col-xs-6 col-sm-6">
										<span class="form-label" id="pickuplbl" name="pickuplbl">Pickup Point</span>
										<input class="form-control" type="text" id="pickup" name="pickup" placeholder="Pickup Location" required>
									</div>
									<div class="form-group col-xs-6 col-sm-6">
										<span class="form-label" id="droplbl" name="droplbl">Drop Point</span>
										<input class="form-control" type="text" id="drop" name="drop" placeholder="Drop Location" required>
									</div>
								</div>

								
									<div class="form-group" id="packrow" name="packrow">
										<span class="form-label" id="packageforlbl" name="packageforlbl" >Select Package </span>
										<select class="form-control" id="packagefor" name="packagefor" required>
											<option value=""></option>
											<?php
											$sql="SELECT DISTINCT hr,km from `ib_ratewalkin`";
											$pck = mysqli_query($conn,$sql);
											while($p=mysqli_fetch_array($pck))
											{	
											?>
												<option value="<?php echo $p[0];?>"><?php echo $p[0];?> Hr or <?php echo $p[1];?> Km</option>	
											<?php
											}
											?>
										</select>
										<span class="select-arrow"></span>	
									</div>
								


								<div class="form-group">
									<span class="form-label">Your Name</span>
									<input class="form-control" type="text" id="name" name="name" placeholder="Enter Your Name" required>
								</div>
								<div class="form-group">
									<span class="form-label">Your Contact Number</span>
									<input class="form-control" type="text" id="contact" name="contact"  placeholder="Enter Your Contact Number" required pattern='^[1-9]{1}\d{9}$' title='Enter Valid 10 Digit Contact Number'>
								</div>
								
								<div class="row">
									<div class="col-xs-6 col-sm-6">
										<div class="form-group">
											<span class="form-label">Reporting Date</span>
											<input class="form-control" id="date" name="date"  type="date" required>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6">
										<div class="form-group">
											<span class="form-label">Reporting time</span>
											<input class="form-control" id="time" name="time"  type="time" required>
										</div>
									</div>
								</div>

								<div class="row" id="retdaterow" name="retdaterow">
									<div class="col-xs-12 col-sm-12">
										<div class="form-group">
											<span class="form-label" id="retdatelbl" name="retdatelbl">Return Date</span>
											<input class="form-control" id="retdate" name="retdate"  type="date" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6">
										<div class="form-group">
											<span class="form-label">Vehicle Type</span>
											<select class="form-control" id="vtype" name="vtype" required>
																							
												<option value=""></option>
												<?php
												$sqlcar="SELECT DISTINCT cartype from `ib_ratewalkin`";
												$pckcar = mysqli_query($conn,$sqlcar);
												while($cartype=mysqli_fetch_array($pckcar))
												{	
												?>
													<option><?php echo $cartype[0];?></option>	
												<?php
												}
												?>
										
												
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>

									<div class="col-xs-6 col-sm-6" id='costrow' name='costrow'>
										<div class="form-group">
											<span class="form-label">Approx Cost</br></span>
											<h4 id='cost' name='cost'></h4>
										</div>
									</div>
									
									
								</div>
								<div class="form-btn ">
									<button type="submit" class="btn btn-info btn-lg btn-block"  id="bookbtn" name="bookbtn">Book Cabs</button>
								</div>
							</form>
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
		$('#pdrow').hide();
		$('#packrow').hide();
		$('#retdaterow').hide();


		$('#pickuplbl').hide();
		$('#pickup').val('');
		$('#pickup').hide();
		
		$('#droplbl').hide();
		$('#drop').val('');
		$('#drop').hide();

		$('#packageforlbl').hide();
		$('#packagefor').val('');
		$('#packagefor').hide();

		$('#retdatelbl').hide();
		$('#retdate').val('');
		$('#retdate').hide();
				
		$('#costrow').hide();
    });

	$('#dutytype').change(function(){
		var dtval=$('#dutytype').find(":selected").val();
		if(dtval=='')
		{
			$('#pdrow').hide();
			$('#packrow').hide();
			$('#retdaterow').hide();

			$('#pickuplbl').hide();
			$('#pickup').val('');
			$('#pickup').hide();
		
			$('#droplbl').hide();
			$('#drop').val('');
			$('#drop').hide();

			$('#packageforlbl').hide();
			$('#packagefor').val('');
			$('#packagefor').hide();

			$('#retdatelbl').hide();
			$('#retdate').val('');
			$('#retdate').hide();

			$('#costrow').hide();
		}
		if(dtval==1)
		{
			$('#pdrow').show();
			$('#packrow').hide();
			$('#retdaterow').hide();

			$('#pickup').prop('disabled', false);
			$('#drop').prop('disabled', false);
			
			$('#pickuplbl').show();
			$('#pickup').show();
			$('#droplbl').show();
			$('#drop').show();

			$('#pickup').val('Airport');
			$('#pickup').prop('disabled', true);
			$('#drop').val('');

			$('#packagefor').val('');
			$('#packagefor').hide('');
			$('#retdatelbl').hide();
			$('#retdate').val('');
			$('#retdate').hide();

			$('#packagefor').removeAttr('required');
			$('#retdate').removeAttr('required');
			$('#pickup').prop('required',true);
			$('#drop').prop('required',true);

			$('#costrow').hide();

		}
		if(dtval==2)
		{
			$('#pdrow').show();
			$('#packrow').hide();
			$('#retdaterow').hide();

			$('#pickup').prop('disabled', false);
			$('#drop').prop('disabled', false);

			$('#droplbl').show();
			$('#drop').show();
			$('#pickuplbl').show();
			$('#pickup').show();

			$('#drop').val('Airport');
			$('#drop').prop('disabled', true);
			$('#pickup').val('');

			$('#packagefor').val('');
			$('#packagefor').hide('');
			$('#retdatelbl').hide();
			$('#retdate').val('');
			$('#retdate').hide();

			$('#packagefor').removeAttr('required');
			$('#retdate').removeAttr('required');
			$('#pickup').prop('required',true);
			$('#drop').prop('required',true);

			$('#costrow').hide();
		}
		if(dtval==3)
		{
			$('#pdrow').show();
			$('#packrow').show();
			$('#retdaterow').hide();

			$('#pickuplbl').show();
			$('#pickup').val('');
			$('#pickup').show();
		
			$('#droplbl').hide();
			$('#drop').val('');
			$('#drop').hide();

			$('#packageforlbl').show();
			$('#packagefor').show();
			$('#retdatelbl').hide();
			$('#retdate').val('');
			$('#retdate').hide();

			$('#retdate').removeAttr('required');
			$('#drop').removeAttr('required');
			$('#packagefor').prop('required',true);
		}
		if(dtval==4)
		{
			$('#pdrow').show();
			$('#packrow').hide();
			$('#retdaterow').show();

			$('#pickuplbl').show();
			$('#pickup').val('');
			$('#pickup').show();
		
			$('#droplbl').hide();
			$('#drop').val('');
			$('#drop').hide();

			$('#packageforlbl').hide();
			$('#packagefor').hide();
			$('#retdatelbl').show();
			$('#retdate').show();

			
			$('#drop').removeAttr('required');
			$('#packagefor').removeAttr('required');
			$('#retdate').prop('required',true);

			$('#costrow').hide();
						
		}

	});


	$('#packagefor').change(function(){
		var vtype=$('#vtype').find(":selected").val();
		var dtvalue=$('#packagefor').find(":selected").val();
		if(vtype=='' || dtvalue=='')
		{
			$('#costrow').hide();
		}
		else
		{
			$.ajax({
						type:"get",
						url:'api/rateshow.php',
						data:{hr:dtvalue, car:vtype},
						success:function(resp)
						{   //debugger;
							var jsonData=JSON.parse(resp);
							if(jsonData.success=='1')
							{
								$('#costrow').show();
								$('#cost').text(jsonData.rate+"/-");
							}
							else
							{
								$('#costrow').hide();
								alert('Selected Package and Vehicle not available');
								$('#packagefor').val('');
							}
						}
					})
		}
		
	});

    $('#vtype').change(function(){
		var vtype=$('#vtype').find(":selected").val();
		var dtvalue=$('#packagefor').find(":selected").val();
		if(vtype=='' || dtvalue=='')
		{
			$('#costrow').hide();
		}
		else
		{
			$.ajax({
						type:"get",
						url:'api/rateshow.php',
						data:{hr:dtvalue, car:vtype},
						success:function(resp)
						{   //debugger;
							var jsonData=JSON.parse(resp);
							if(jsonData.success=='1')
							{
								$('#costrow').show();
								$('#cost').text(jsonData.rate+"/-");
							}
							else
							{
								$('#costrow').hide();
								alert('Selected Package and Vehicle not available');
								$('#vtype').val('');
							}
						}
					})
		}
		
	});

	$('#date').blur(function(){
		var inputDateString = $(this).val();
		var inputDate = new Date(inputDateString);

		var today = new Date();
        today.setHours(0, 0, 0, 0); 
        inputDate.setHours(0, 0, 0, 0);

		if (inputDate < today) {
			alert('Date cannot be in past');
			$('#date').val('');
        }

	});

	$('#retdate').blur(function(){
		
		var inputDateString = $(this).val();
		var inputDate = new Date(inputDateString);

		var rep = $('#date').val();
        var repDate = new Date(rep);

		if(rep=='')
		{
			alert('Enter Reporting Date First');
			$('#retdate').val('');
		}
		else{
			if (inputDate < repDate) {
				alert('Date cannot be earlier than Reporting Date');
				$('#retdate').val('');
        	}
		}

	});
   
</script>

    
    