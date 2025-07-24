<!DOCTYPE html>
<html lang="en">

<?php
require '../api/config.php';
session_start();
if($_SESSION['user']=='')
{
    header("Location: login.php");
}
?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Cab Booking</title>  
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/form.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="fb.html">
                            <img src="../img/mainlogo.jpeg" alt="IBCabs" width='50px' />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active">
                            <a href="#">
                                <i class="fas fa-table"></i>Walkin Duty</a>
                        </li>
                        
                        <li>
                            <a href="dutyhistory.php?month=<?php echo date('m');?>">
                                <i class="fas fa-calendar-alt"></i>Duty History</a>
                        </li>
                        <li>
                            <a href="rateupdate.php">
                                <i class="fa fa-pencil-square-o"></i>Rate Update</a>
                        </li>
                        <li>
                            <a href="https://ibcabs.in/bills/new/view-ddr" target='_blank'>
                                <i class="fas fa-copy"></i>Billing Portal</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../img/mainlogo.jpeg" alt="IBCabs" width='50px' />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                        <li class="active">
                            <a href="#">
                                <i class="fas fa-table"></i>Walkin Duty</a>
                        </li>
                        
                        <li>
                            <a href="dutyhistory.php?month=<?php echo date('m');?>">
                                <i class="fas fa-calendar-alt"></i>Duty History</a>
                        </li>
                        <hr>
                        <li>
                            <a href="rateupdate.php">
                                <i class="fa fa-pencil-square-o"></i>Rate Update</a>
                        </li>
                        <hr>
                        <li>
                            <a href="https://ibcabs.in/bills/new/view-ddr" target='_blank'>
                                <i class="fas fa-copy"></i>Billing Portal</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../img/mainlogo.jpeg" width='50px' alt="IB CABS" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['user'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../img/mainlogo.jpeg" width='50px' alt="IB CABS" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['user'];?></a>
                                                    </h5>
                                                    <span class="email">admin@ibcabs.in</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                
                                                <div class="account-dropdown__item">
                                                    <a href="https://ibcabs.in/bills/new/" target='_blank'>
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="api/logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <div class="row" style="min-height:25vh !important;">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="dutydecide">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Date & Time</th>
                                                <th>Duty Type</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Location</th>
                                                <th>Car</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody id="newduty">
                                        <!------------------------------------------------------------------------------------
                                        -->
                                           
                                        <!------------------------------------------------------------------------------------
                                        -->
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <div class="row" style="min-height:60vh !important;">
                            <div class="col-lg-8">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Option</th>
                                                <th>ID</th>
                                                <th>Date & Time</th>
                                                <th>Duty Type</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Location</th>
                                                <th>Car</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="newduty">
                                        <?php
                                            $sql="Select * from ib_bookcabs where status=1 order by bookingid desc;";
                                            $booking = mysqli_query($conn,$sql);
                                            while($bk=mysqli_fetch_array($booking))
                                            {	
                                        ?>
                                            <tr>
                                                <td><i class="fa fa-pencil-square" 
                                                    <?php if($bk[11]=='' || $bk[12]=='' || $bk[13]==''){ ?>
                                                         style='color:red' 
                                                    <?php }else { ?>
                                                        style='color:#459857' 
                                                    <?php } ?>
                                                id='<?php echo 'edit'.$bk[0];?>'></i>
                                            
                                                &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;      
                                                <i class="fa fa-arrow-circle-right" style='color:blue' id='<?php echo 'complete'.$bk[0];?>'></i>

                                                </td>
                                                <td><?php echo $bk[0];?></td>
                                                <td><?php echo $bk[6]." (".$bk[8].")";?></td>
                                                <td>
                                                    <?php 
                                                        if($bk[3]==1)echo  "Airport Pickup"; 
                                                        elseif($bk[3]==2)echo "Airport Drop";
                                                        elseif($bk[3]==3)
                                                        {   
                                                            $sqlpack="SELECT * from `ib_ratewalkin` where hr='$bk[4]' and cartype='$bk[9]'";
										                    $packlist = mysqli_query($conn,$sqlpack);
										                    $pack=mysqli_fetch_array($packlist);

                                                            echo "Local Rental (".$pack[1]."hr/".$pack[2]."km)";
                                                        }
                                                        elseif($bk[3]==4)echo "Outstation (".$bk[7].")";
                                                    ?>
                                                </td>
                                                <td><?php echo $bk[1];?></td>
                                                <td><?php echo $bk[2];?></td>
                                                <td><?php echo $bk[5];?></td>
                                                <td><?php echo $bk[9];?></td>
                                                
                                            <?php
                                                }
                                            ?>
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                    <h4 style='color:white; align:center;' id='banner'> Please Select a Duty from the left table</h4>
                                        <div class="formupd" id='formupd'style='display:none'>
                                           <div class="container">
                                                <div class="card">
                                                    <div class="card-image">	
                                                        <h2 class="card-heading">
                                                            Duty Details
                                                            <ul>
                                                            <li><small style='color:black !important; padding-top:20px;' id='det1'></small></li>
                                                            <li><small style='color:black !important' id='det2'></small></li>
                                                            <li><small style='color:black !important' id='det3'></small></li>
                                                            <li><small style='color:black !important' id='det4'></small></li>
                                                            <li><small style='color:black !important' id='det5'></small></li>
                                                            <li><small style='color:black !important' id='det6'></small></li>
                                                            </ul>
                                                        </h2>
                                                    </div>
                                                    
                                                    <form class="card-form">
                                                        <div class='row'>
                                                        <div class='col-lg-12'>
                                                        <div class="input">
                                                            
                                                            <select class="input-field" id='driver' required aria-label="Default select example">
                                                                
                                                                <?php
                                                                $sqldr="SELECT * from `ib_driver`";
                                                                $driver = mysqli_query($conn,$sqldr);
                                                                while($drive=mysqli_fetch_array($driver))
                                                                {	
                                                                ?>
                                                            <option value='<?php echo $drive[1];?>'><?php echo $drive[1]." (".$drive[5].")";?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                             <!-- <label class="input-label">Driver Name</label> -->
                                                        </div>
                                                        </div>
                                                        </div>
                                            </br>
                                                        <div class='row'>
                                                            <div class='col-sm-12 col-lg-12'>
                                                                <div class="input">
                                                                    <select class="input-field" id='car' required aria-label="Default select example">
                                                                        <option value=""></option>
                                                                        <?php
                                                                        $sqlcar="SELECT * from `ib_car`";
                                                                        $car = mysqli_query($conn,$sqlcar);
                                                                        while($c=mysqli_fetch_array($car))
                                                                        {	
                                                                        ?>
                                                                    <option value="<?php echo $c[2];?>"><?php echo $c[2]." - ".$c[3]?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                            
                                                            <!-- <div class='col-sm-12 col-lg-4'>
                                                                <div class="input">
                                                                    <h4 id='cartype'></h4>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                            </br>
                                                        <div class='row'>
                                                            <div class='col-sm-12 col-lg-6'>
                                                                <div class="action">
                                                                    <button type='button' class="action-button" id="resetbtn">Reset</button>
                                                                </div>
                                                            </div>
                                                            <div class='col-sm-12 col-lg-6'>
                                                                <div class="action">
                                                                    <button class="action-button" id="submitbtn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © <a href='https://ibcabs.com'>IBCabs</a>. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->




<script>
    $(document).ready(function(){

    
            $('#formupd').hide();
            $('#driver').select2();
            $('#car').select2();
            
            loaddata();
            setInterval(loaddata,15000);
     
    
    })



    function loaddata(){
        $.ajax({
                type:"get",
                url:'api/newduty.php',
                success:function(resp)
                {   
                    var jsonData=JSON.parse(resp);
                    if(jsonData.success=='1')
                    {
                                                 
                            var html='';
                            
                            $.each(jsonData.result,function(index,item)
                            {
                                html += '<tr><td>'+item.bookingid+'</td>'
                                        +'<td>'+item.reportdate+'('+item.reporttime+')</td>'
                                        +'<td>'+item.dutytype+'</td>'    
                                        +'<td>'+item.name+'</td>'     
                                        +'<td>'+item.contact+'</td>'    
                                        +'<td>'+item.location+'</td>'    
                                        +'<td>'+item.car+'</td>' 
                                        +'<td><i class="fa fa-check-circle" style="color:green" id="accept'
                                        +item.bookingid+'"></i>'
                                        +'&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;'
                                        +'<i class="fa fa-times-circle" style="color:red" id="reject'
                                        +item.bookingid+'"></i></td></tr>';
                                                                                    
                                         
                                
                            });
                            $('#dutydecide tbody').html(html);
                    
                      
                       
                    }
                }
            });        
    };


    <?php
    $sql="Select * from ib_bookcabs where status=0";
    $booking = mysqli_query($conn,$sql);
    while($bk=mysqli_fetch_array($booking)){
    ?>
    $('#dutydecide tbody').on('click','#accept<?php echo $bk[0];?>',function(){
        var c=false;
		c = confirm("Click OK to Confirm!");
        if (c==true)
        {
            $.ajax({
                        type:"get",
                        url:'api/dutydecide.php',
                        data:{state:1, id:<?php echo $bk[0];?>},
                        success:function(resp)
                        {   //debugger;
                            var jsonData=JSON.parse(resp);
                            if(jsonData.success=='1')
                            {
                                location.reload();
                            }
                            else
                            {
                                
                                alert('Error in Accepting');
                                
                            }
                        }
                    })
        }

    });

    $('#dutydecide tbody').on('click','#reject<?php echo $bk[0];?>',function(){
		var c=false;
		c = confirm("Click OK to Confirm Rejection!");
        if (c==true)
        {
            $.ajax({
                        type:"get",
                        url:'api/dutydecide.php',
                        data:{state:0, id:<?php echo $bk[0];?>},
                        success:function(resp)
                        {   //debugger;
                            var jsonData=JSON.parse(resp);
                            if(jsonData.success=='1')
                            {
                                location.reload();
                            }
                            else
                            {
                                
                                alert('Error in Accepting');
                                
                            }
                        }
                    })
        }
    });
    <?php
    }
    ?>



    <?php
    $sql="Select * from ib_bookcabs where status=1";
    $booking = mysqli_query($conn,$sql);
    while($bk=mysqli_fetch_array($booking)){
    ?>
        $('#edit<?php echo $bk[0];?>').click(function(){
       
		    $.ajax({
                type:"get",
                url:'api/dutyedit.php',
                data:{state:0, id:<?php echo $bk[0];?>},
                success:function(resp)
                {   
                    var jsonData=JSON.parse(resp);
                    if(jsonData.success=='1')
                    {
                        $('#banner').hide();   
                        if(jsonData.dutytypecode=='1')
                        {
                            $('#formupd').show();
                            $('#det1').text("Booking ID "+jsonData.bookingid);
                            $('#det2').text(jsonData.name+" ("+jsonData.contact+")");
                            $('#det3').text(jsonData.dutytype);
                            $('#det4').text("Reporting on "+jsonData.reporting);
                            $('#det5').text("Drop at "+jsonData.location);
                            $('#det6').text("Car opted "+jsonData.caropt);
                            
                            $('#driver').val(jsonData.driver);
                            $('#driver').trigger('change');
                            $('#car').val(jsonData.carno);
                            $('#car').trigger('change');
                            

                        }
                        else if(jsonData.dutytypecode=='2')
                        {
                            $('#formupd').show();
                            $('#det1').text("Booking ID "+jsonData.bookingid);
                            $('#det2').text(jsonData.name+" ("+jsonData.contact+")");
                            $('#det3').text(jsonData.dutytype);
                            $('#det4').text("Reporting on "+jsonData.reporting);
                            $('#det5').text("Reporting at "+jsonData.location);
                            $('#det6').text("Car opted "+jsonData.caropt);
                            
                            $('#driver').val(jsonData.driver);
                            $('#driver').trigger('change');
                            $('#car').val(jsonData.carno);
                            $('#car').trigger('change');
                        }
                        else if(jsonData.dutytypecode=='3')
                        {
                            $('#formupd').show();
                            $('#det1').text("Booking ID "+jsonData.bookingid);
                            $('#det2').text(jsonData.name+" ("+jsonData.contact+")");
                            $('#det3').text(jsonData.dutytype);
                            $('#det4').text("Reporting on "+jsonData.reporting);
                            $('#det5').text("Reporting at "+jsonData.location);
                            $('#det6').text("Car opted "+jsonData.caropt);
                            
                            $('#driver').val(jsonData.driver);
                            $('#driver').trigger('change');
                            $('#car').val(jsonData.carno);
                            $('#car').trigger('change');
                        }
                        else if(jsonData.dutytypecode=='4')
                        {
                            $('#formupd').show();
                            $('#det1').text("Booking ID "+jsonData.bookingid);
                            $('#det2').text(jsonData.name+" ("+jsonData.contact+")");
                            $('#det3').text(jsonData.dutytype);
                            $('#det4').text("Reporting on "+jsonData.reporting);
                            $('#det5').text("Reporting at "+jsonData.location);
                            $('#det6').text("Car opted "+jsonData.caropt);
                            
                            $('#driver').val(jsonData.driver);
                            $('#driver').trigger('change');
                            $('#car').val(jsonData.carno);
                            $('#car').trigger('change');
                        }
                    }
                    else
                    {     
                        alert('Error encountered. Cannot edit. Try again');
                            
                    }
                }
            })
        });




        $('#complete<?php echo $bk[0];?>').click(function(){
       
            var c=false;
		    c = confirm("Are you sure, you want to close the duty ?");
            if (c==true)
            {
                $.ajax({
                    type:"get",
                    url:'api/dutycomplete.php',
                    data:{id:<?php echo $bk[0];?>},
                    success:function(resp)
                    {   
                        var jsonData=JSON.parse(resp);
                        if(jsonData.success=='1')
                        {
                            alert('Duty Completed Successfully!')
                            location.reload();
                        }
                        else
                        {     
                            alert('Error encountered. Cannot Close. Try again!');
                                
                        }
                    }
                })
            }
        });


	<?php
    }
    ?>


    $('#submitbtn').click(function(){
        
            var driver = $('#driver').val();
            var car= $('#car').val();
            var fullid= $('#det1').text();
            const myArray = fullid.split(" ");
            var id = myArray[2];
            
		    $.ajax({
                type:"get",
                url:'api/dutyedit.php',
                data:{state:1, driver:driver, car:car, id:id},
                success:function(resp)
                {   
                    var jsonData=JSON.parse(resp);
                    if(jsonData.success=='1')
                    {
                        alert('Updated');
                        
                    }
                    else
                    {     
                        //alert('Error encountered. Cannot edit. Try again');
                        alert('Error');
                            
                    }
                }
            })
        });

    // $('#car').change(function(){
    //     var car=$('#car').find(":selected").val();
    //     $.ajax({
    //             type:"get",
    //             url:'api/cartype.php',
    //             data:{car:car},
    //             success:function(resp)
    //             {   
    //                 var jsonData=JSON.parse(resp);
    //                 if(jsonData.success=='1')
    //                 {
    //                     $('#cartype').text(jsonData.cartype);
    //                 }
    //             }
    //         })
    // });


</script>