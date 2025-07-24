<?php

require '../../api/config.php';


$car=$_GET['car'];

    $sqlcar="SELECT * from `ib_car` where carno='$car'";
    $cartype = mysqli_query($conn,$sqlcar);

	if($c=mysqli_fetch_array($cartype))
        echo json_encode(array('success' => 1, 'cartype'=>$c[3]));
    else
        echo json_encode(array('success' => 0));




?>