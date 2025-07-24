<?php

require '../../api/config.php';

if($_GET['state']==0)
{
    $id=$_GET['id'];
	$sql="Select * from `ib_ratewalkin` where `id`='$id'";
    $rate = mysqli_query($conn,$sql);
	if($r=mysqli_fetch_array($rate))
    {
        
        echo json_encode(array('success' => 1,
                                'id'=>$r[0],
                                'hr'=>$r[1],
                                'km'=>$r[2],
                                'cartype'=>$r[3],
                                'rate'=>$r[4]
                            ));    
    }
    else
        echo json_encode(array('success' => 0));

}

if($_GET['state']==1)
{
  
    $id=$_GET['id'];
    $hr=$_GET['hr'];
    $km=$_GET['km'];
    $cartype=$_GET['cartype'];
    $rate=$_GET['rate'];

    $sql="Update `ib_ratewalkin` Set `hr`='$hr', `km`='$km',`cartype`='$cartype', `rate`='$rate',`discontinue`='0' where `id`=$id";

	if(mysqli_query($conn,$sql))
    {
        echo json_encode(array('success' => 1));
    }
    else
    {
        echo json_encode(array('success' => 0));
    }
}

if($_GET['state']==2)
{
  
    $hr=$_GET['hr'];
    $km=$_GET['km'];
    $cartype=$_GET['cartype'];
    $rate=$_GET['rate'];

    $sql="INSERT INTO `ib_ratewalkin`(`id`, `hr`, `km`, `cartype`, `rate`, `discontinue`) VALUES (NULL,'$hr','$km','$cartype','$rate','0')";

	if(mysqli_query($conn,$sql))
    {
        echo json_encode(array('success' => 1));
    }
    else
    {
        echo json_encode(array('success' => 0));
    }
}


?>