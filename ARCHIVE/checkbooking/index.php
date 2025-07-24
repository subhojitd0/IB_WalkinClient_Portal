<!DOCTYPE html>
<html lang="en">

<?php
require '../api/config.php';

//header("Refresh: 15");
	



?>
<head>
    <meta charset="UTF-8">
    <title>Check Booking</title>
    <link rel="stylesheet" href="css/paginate.css">
    <link rel="stylesheet" href="css/ligne.css">
    <script type="text/javascript" src="js/paginate.js"></script>
	
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        *{
            font-family: sans-serif;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
		<span style="width:150px;"></span>
		<img src="https://ibcabs.in/bills/new/assets/img/ib.jpg" width="60" height="60" alt="">
		<h1 class="navbar-brand" style="font-size:30px;">&nbsp;&nbsp;Online Bookings</h1>
  
	</nav>
	
<div class="container">

	





	</br></br>

    
    <div class="row">
		<div class="col-md-8"></div>
        <div class="col-md-4">                
                <input class="form-control" type="search" id="searchBox" placeholder="Filter...">
        </div>
    </div>
	</br></br>
	
	<div class='col-md-12'>
    <table class="myTable table hover">
        <thead class="thead-dark">
        <tr>
            <th>Booking ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Place</th>
            <th>Date</th>
            <th>Time</th>
            <th>Car</th>
            <th>Duration</th>
            <th>Option</th>
        </tr>
        </thead>
        <tbody>
<?php

$sql="Select * from ib_bookcabs where status=0";
$booking = mysqli_query($conn,$sql);
while($bk=mysqli_fetch_array($booking))
{	

?>

        <tr>
            <td><?php echo $bk[0];?></td>
            <td><?php echo $bk[1];?></td>
            <td><?php echo $bk[2];?></td>
            <td><?php echo $bk[3];?></td>
            <td><?php echo $bk[4];?></td>
            <td><?php echo $bk[5];?></td>
            <td><?php echo $bk[6];?></td>
            <td><?php echo $bk[7];?></td>
            <td><button type="button" class="btn btn-info" id='<?php echo "cdbtn-".$bk[0];?>' >Create Duty</button></td>

        </tr>
<?php
    }
?>
        
        
        
       
     
        </tbody>
    </table>
	</div>
</div>
<script>

    let options = {
        numberPerPage:10, //Cantidad de datos por pagina
        goBar:false, //Barra donde puedes digitar el numero de la pagina al que quiere ir
        pageCounter:true, //Contador de paginas, en cual estas, de cuantas paginas
    };

    let filterOptions = {
        el:'#searchBox' //Caja de texto para filtrar, puede ser una clase o un ID
    };

    paginate.init('.myTable',options,filterOptions);
</script>
</body>
</html>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Instead of button click, change this.
        setTimeout(function() {
            window.location.reload(); 
        }, 30000)
    });
    
    
    <?php
        $sqljq="Select * from ib_bookcabs";
        $bookingjq = mysqli_query($conn,$sqljq);
        while($b=mysqli_fetch_array($bookingjq))
        {	
    ?>
        $('#cdbtn-<?php echo $b[0];?>').click(function(e) {

            e.preventDefault();
            var c = confirm("Click OK to Confirm Deletion?");
            if (c==true)
            {
    			$.ajax({
    				type:"get",
    				url:'actions/dataLoad.php',
    				data:{dataid:'<?php echo $b[0];?>'},
    				success:function(resp)
    				{   //debugger;
    				    var jsonData=JSON.parse(resp);
    					if(jsonData.success=='1')
    					{
    				        alert('Duty Created Successfully !');
    					}
    					else
    					{
    					    alert('Error');
    					}
    				}
    			})
            }
            
        });
    <?php
        }
    ?>

</script>

    
    