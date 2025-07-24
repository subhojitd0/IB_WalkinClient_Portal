<?php

require '../../api/config.php';


$state=$_GET['state'];


if($state==0)
{
    $id=$_GET['id'];
	$sql="Select * from `ib_bookcabs` where `bookingid`='$id'";
    $duty = mysqli_query($conn,$sql);
	if($d=mysqli_fetch_array($duty))
    {
        

        if($d[3]==1)
        {
            echo json_encode(array('success' => 1,
                                'bookingid'=>$d[0],
                                'name'=>$d[1],
                                'contact'=>$d[2],
                                'dutytypecode'=>$d[3],
                                'dutytype'=>'Airport Pickup',
                                'reporting'=>$d[6].' ('.$d[8].')',
                                'location'=>$d[5],
                                'caropt'=>$d[9],
                                'driver'=>$d[11],
                                'carno'=>$d[12],
                                'caralloc'=>$d[13]
                            ));
        }
        else if($d[3]==2)
        {
            echo json_encode(array('success' => 1,
                                'bookingid'=>$d[0],
                                'name'=>$d[1],
                                'contact'=>$d[2],
                                'dutytypecode'=>$d[3],
                                'dutytype'=>'Airport Drop',
                                'reporting'=>$d[6].' ('.$d[8].')',
                                'location'=>$d[5],
                                'caropt'=>$d[9],
                                'driver'=>$d[11],
                                'carno'=>$d[12],
                                'caralloc'=>$d[13]
                            ));
        }
        else if($d[3]==3)
        {
            $s="SELECT * FROM `ib_ratewalkin` WHERE hr='$d[4]' and cartype='$d[9]'";
            $sdata= mysqli_query($conn,$s);
            $val=mysqli_fetch_array($sdata);
        

            echo json_encode(array('success' => 1,
                                'bookingid'=>$d[0],
                                'name'=>$d[1],
                                'contact'=>$d[2],
                                'dutytypecode'=>$d[3],
                                'dutytype'=>'Local Rental ('.$val[1].'hr / '.$val[2].'km)',
                                'reporting'=>$d[6].' ('.$d[8].')',
                                'location'=>$d[5],
                                'caropt'=>$d[9],
                                'driver'=>$d[11],
                                'carno'=>$d[12],
                                'caralloc'=>$d[13]
                            ));
        }
        elseif($d[3]==4)
        {
            echo json_encode(array('success' => 1,
                                'bookingid'=>$d[0],
                                'name'=>$d[1],
                                'contact'=>$d[2],
                                'dutytypecode'=>$d[3],
                                'dutytype'=>'Outstation (Return on - '.$d[7].')',
                                'reporting'=>$d[6].' ('.$d[8].')',
                                'location'=>$d[5],
                                'caropt'=>$d[9],
                                'driver'=>$d[11],
                                'carno'=>$d[12],
                                'caralloc'=>$d[13]
                            ));
        }
    }
    else
        echo json_encode(array('success' => 0));

}

if($state==1)
{
  
    $id=$_GET['id'];
    $driver=$_GET['driver'];
    $car=$_GET['car'];

    $sqlcar="SELECT * from `ib_car` where carno='$car'";
    $cartype = mysqli_query($conn,$sqlcar);
    $c=mysqli_fetch_array($cartype);


    $sql="Update `ib_bookcabs` Set `driver`='$driver', `carno`='$car',`carallocate`='$c[3]' where `bookingid`=$id";
    echo $sql;

	if(mysqli_query($conn,$sql))
    {
        echo json_encode(array('success' => 1, 'sql'=>$sql));
    }
    else
    {
        echo json_encode(array('success' => 0, 'sql'=>$sql));
    }
}

?>