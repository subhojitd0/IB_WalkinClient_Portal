<?php

require '../../api/config.php';


$dataid=$_GET['dataid'];


    $sqldt="Select * from ib_bookcabs where bookingid='$dataid'";
    $bookingdt = mysqli_query($conn,$sqldt);
    if($dat=mysqli_fetch_array($bookingdt))
    {	
    		
    		
    		$sql="INSERT INTO `ib_ddr`(`dutyid`, `dutydate`, `dutytime`, `dutytype`, `party`, `bookedby`, `contact`, `beforeouttime`, `beforeintime`, 
		    `beforeoutkm`, `beforeinkm`, `transportdetail`, `center`, `note`, `driver`, `drivernum`, `cartype`, `carnum`, `gintime`, `gouttime`, `ginkm`, 
		    `goutkm`, `parking`, `billamount`, `outstation`, `replacement`, `dutystatus`,`slipno`,`pickuploc`,`droploc` ,`rintime` ,`routtime` ,`rinkm` ,`routkm`,
		    `vendorhour`,`vendorkm`,`clienthour`, `signature`, `da`, `lata`, `longa`, `latb`, `longb`, `latc`, `longc`, `latd`, `longd`) 
		     VALUES 
		    (NULL,'$dat[4]','$dat[5]','','WALK IN(ON CALL)','$dat[1]','$dat[2]','','','',
		    '','$dat[6]','','','','','','','','','','','','','','','0','0','$dat[3]','','','','','','','','','',0,'','','','','','','','')";
		    
		    
    		if($conn->query($sql))
    		{
    		    
    		    $sqlbk="Select * from ib_ddr where dutydate='$dat[4]' and `dutytime`='$dat[5]' and  `contact`='$dat[2]' and `pickuploc`='$dat[3]'";
                $bookingbk = mysqli_query($conn,$sqlbk);
                if($datbk=mysqli_fetch_array($bookingbk))
                {
    		        
    		        $sqlrep="INSERT INTO `ib_reportto`(`reportid`, `name`, `number`,`dutyid`,`dutydate`) VALUES (NULL,'$dat[1]','$dat[2]','$datbk[0]','$dat[4]')";
		        	if(mysqli_query($conn,$sqlrep))
		    	    {
		    		
		    		    $sqlid="Update `ib_bookcabs` set `status`='2' where `bookingid`=$dataid";
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
    	            echo json_encode(array('success' => 3));
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