<?php

require '../../api/config.php';


$state=$_GET['state'];
$id=$_GET['id'];



    if($state==1)
        $sql="Update `ib_bookcabs` Set `status`='1' where `bookingid`='$id'";
    else
        $sql="Update `ib_bookcabs` Set `status`='2' where `bookingid`='$id'";


	if(mysqli_query($conn,$sql))
    {
        echo json_encode(array('success' => 1));

    }
    else
        echo json_encode(array('success' => 0));




?>