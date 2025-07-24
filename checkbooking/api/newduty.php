<?php
    
    
require '../../api/config.php';



    $sql="Select * from ib_bookcabs where status=0 order by bookingid desc;";
    $booking = mysqli_query($conn,$sql);
    while($bk=mysqli_fetch_array($booking))
    {

        if($bk[3]==1)
            $p="Airport Pickup"; 
        elseif($bk[3]==2)
            $p= "Airport Drop";
        elseif($bk[3]==3)
        {   
            $sqlpack="SELECT * from `ib_ratewalkin` where hr='$bk[4]' and cartype='$bk[9]'";
		    $packlist = mysqli_query($conn,$sqlpack);
		    $pack=mysqli_fetch_array($packlist);
            $p="Local Rental (".$pack[1]."hr/".$pack[2]."km)";
        }
        elseif($bk[3]==4)
            $p="Outstation (".$bk[7].")";

        

        $outmid[]=array( 
							
							"bookingid"=>$bk[0],
							"name"=>$bk[1],
							"contact"=>$bk[2],
                            "dutytype"=>$p,
                            "location"=>$bk[5],
                            "car"=>$bk[9],
                            "reportdate"=>$bk[6],
                            "reporttime"=>$bk[8]

						
						);

    }


    echo json_encode(array('success' => 1, 'result'=>$outmid), JSON_PRETTY_PRINT);
  



?>
                                            