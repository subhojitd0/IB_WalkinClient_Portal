<?php

require '../../api/config.php';


$dataid=$_GET['id'];


    $sqldt="Select * from ib_bookcabs where bookingid='$dataid'";
    $bookingdt = mysqli_query($conn,$sqldt);
    if($dat=mysqli_fetch_array($bookingdt))
    {	
			if($dat[11]=='' || $dat[12]=='' || $dat[13]=='')
				$dutystatus=1;
			else
				$dutystatus=2;


			if($dat[3]=='1')
				$type='Airport Pickup';
			elseif($dat[3]=='2')
				$type='Airport Drop';
			elseif($dat[3]=='3')
			{
				$sqlpack="SELECT * from `ib_ratewalkin` where hr='$dat[4]' and cartype='$dat[9]'";
		    	$packlist = mysqli_query($conn,$sqlpack);
		    	$pack=mysqli_fetch_array($packlist);
            	$type="Local Rental (".$pack[1]."hr/".$pack[2]."km)";
			}
			elseif($dat[3]==4)
            	$type="Outstation (".$dat[7].")";


			$sqlcontact="SELECT * from `ib_driver` where drivername='$dat[11]'";
    		$contactdr = mysqli_query($conn,$sqlcontact);
    		if($cnt=mysqli_fetch_array($contactdr))
    		{
				$contact=$cnt[5];
			}
			else
			{
				$contact='';
			}
    		
    		
    		$sql="INSERT INTO `ib_ddr`(`dutyid`, `dutydate`, `dutytime`, `dutytype`, `party`, `bookedby`, `contact`, `beforeouttime`, `beforeintime`, 
		    `beforeoutkm`, `beforeinkm`, `transportdetail`, `center`, `note`, `driver`, `drivernum`, `cartype`, `carnum`, `gintime`, `gouttime`, `ginkm`, 
		    `goutkm`, `parking`, `billamount`, `outstation`, `replacement`, `dutystatus`,`slipno`,`pickuploc`,`droploc` ,`rintime` ,`routtime` ,`rinkm` ,`routkm`,
		    `vendorhour`,`vendorkm`,`clienthour`, `signature`, `da`, `lata`, `longa`, `latb`, `longb`, `latc`, `longc`, `latd`, `longd`) 
		     VALUES 
		    (NULL,'$dat[6]','$dat[8]','','WALK IN(ON CALL)','$dat[1]','$dat[2]','','','',
		    '','$dat[9]','','$type','$dat[11]','$contact','$dat[13]','$dat[12]','','','','','','','','NO SUBSTITUTE','$dutystatus','0','$dat[5]','','','','','','','','','',0,'','','','','','','','')";
		    
		    
    		if($conn->query($sql))
    		{
    		    
    		    $sqlbk="Select * from ib_ddr where dutydate='$dat[6]' and `dutytime`='$dat[8]' and  `contact`='$dat[2]' and `pickuploc`='$dat[5]'";
                $bookingbk = mysqli_query($conn,$sqlbk);
                if($datbk=mysqli_fetch_array($bookingbk))
                {
    		        
    		        $sqlrep="INSERT INTO `ib_reportto`(`reportid`, `name`, `number`,`dutyid`,`dutydate`) VALUES (NULL,'$dat[1]','$dat[2]','$datbk[0]','$dat[6]')";
		        	if(mysqli_query($conn,$sqlrep))
		    	    {
		    		
		    		    $sqlid="Update `ib_bookcabs` set `status`='4' where `bookingid`=$dataid";
    		            if($conn->query($sqlid))
    		            {
    			            echo json_encode(array('success' => 1));
    		            }
		    		    else{
    			            echo json_encode(array('success' => 0));
    		            }
		    	    }
		    	    else{
    	                echo json_encode(array('success' => 2));
	               }
		    	}
    		    else{
    	            echo json_encode(array('success' => 3,'sql'=>$sql));
	            }
            }
    		else{
            	echo json_encode(array('success' => 4));
	        }    
    		
    }
    else{
    			
    	echo json_encode(array('success' => 5));
    			
	}


?>