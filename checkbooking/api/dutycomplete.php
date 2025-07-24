<?php

require '../../api/config.php';



$id=$_GET['id'];


	$sql="Update `ib_bookcabs` Set `status`='3' where `bookingid`='$id'";


	if(mysqli_query($conn,$sql))
    {
        echo json_encode(array('success' => 1));

    }
    else
        echo json_encode(array('success' => 0));




?>