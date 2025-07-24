<?php

require 'config.php';

$dutytype=$_POST['dutytype'];

if($dutytype==1) //Airport Pickkup
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$drop=$_POST['drop'];
	$repdate=$_POST['date'];
	$time=$_POST['time'];	
	$vtype=$_POST['vtype'];

	$sql="INSERT INTO `ib_bookcabs`(`bookingid`, `name`, `contact`, `dutytype`, `package`, `location`, `reportdate`, `returndate`, `reporttime`, `cartype`, `status`) 
	 	VALUES ('','$name','$contact','$dutytype','','$drop','$repdate','','$time','$vtype','0')";
}
else if($dutytype==2) //Airport Drop
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$pickup=$_POST['pickup'];
	$repdate=$_POST['date'];
	$time=$_POST['time'];	
	$vtype=$_POST['vtype'];

	$sql="INSERT INTO `ib_bookcabs`(`bookingid`, `name`, `contact`, `dutytype`, `package`, `location`, `reportdate`, `returndate`, `reporttime`, `cartype`, `status`) 
	 	VALUES ('','$name','$contact','$dutytype','','$pickup','$repdate','','$time','$vtype','0')";
}
else if($dutytype==3) //Local 
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$package=$_POST['packagefor'];
	$repdate=$_POST['date'];
	$time=$_POST['time'];	
	$vtype=$_POST['vtype'];
	$pickup=$_POST['pickup'];

	$sql="INSERT INTO `ib_bookcabs`(`bookingid`, `name`, `contact`, `dutytype`, `package`, `location`, `reportdate`, `returndate`, `reporttime`, `cartype`, `status`) 
	 	VALUES ('','$name','$contact','$dutytype','$package','$pickup','$repdate','','$time','$vtype','0')";
}
else if($dutytype==4) //Outstation
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$repdate=$_POST['date'];
	$time=$_POST['time'];	
	$retdate=$_POST['retdate'];
	$vtype=$_POST['vtype'];
	$pickup=$_POST['pickup'];

	$sql="INSERT INTO `ib_bookcabs`(`bookingid`, `name`, `contact`, `dutytype`, `package`, `location`, `reportdate`, `returndate`, `reporttime`, `cartype`, `status`) 
	 	VALUES ('','$name','$contact','$dutytype','','$pickup','$repdate','$retdate','$time','$vtype','0')";
}


	if(mysqli_query($conn,$sql))
	{
	    $sqlid="Select max(bookingid) from `ib_bookcabs`";
	    $result = mysqli_query($conn,$sqlid);
	    $row = mysqli_fetch_array($result);
	
		header('Location: ../bookingconfirm.php?id='.$row[0]);
			
	}
	else{
		header('Location: bookingissue.php');
	}


?>