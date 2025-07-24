<?php

require 'config.php';


$hr=$_GET['hr'];
$car=$_GET['car'];


	$sqlcar="SELECT * from `ib_ratewalkin` where hr=$hr and cartype='$car'";
	$pckcar = mysqli_query($conn,$sqlcar);
	if($cartype=mysqli_fetch_array($pckcar))
        echo json_encode(array('success' => 1, 'rate'=> $cartype[4]));
    else
        echo json_encode(array('success' => 0));




?>