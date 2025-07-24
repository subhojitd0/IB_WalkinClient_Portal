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
                        <li  class="active">
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
                        
                        <li>
                            <a href="index.php">
                                <i class="fas fa-table"></i>Walkin Duty</a>
                        </li>
                        
                        <li>
                            <a href="dutyhistory.php?month=<?php echo date('m');?>">
                                <i class="fas fa-calendar-alt"></i>Duty History</a>
                        </li>
                        <hr>
                        <li  class="active">
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
                         



                        <div class="row" style="min-height:80vh !important;">
                            <div class="col-lg-6">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>hr</th>
                                                <th>km</th>
                                                <th>Car Type</th>
                                                <th>Rate</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody id="newduty">
                                        <?php
                                            $sql="Select * from ib_ratewalkin order by cartype asc, hr asc";
                                            $ratetype = mysqli_query($conn,$sql);
                                            while($bk=mysqli_fetch_array($ratetype))
                                            {	
                                        ?>
                                            <tr>
                                                <td><?php echo $bk[1];?></td>
                                                <td><?php echo $bk[2];?></td>
                                                <td><?php echo $bk[3];?></td>
                                                <td><?php echo $bk[4];?></td>
                                                <td><i class="fa fa-pencil-square" id='<?php echo 'edit'.$bk[0];?>'></i></td>
                                            <?php
                                                }
                                            ?>
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                

                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                                <h3 id='banner' style='display:none'> Edit - Rate ID : <span id='bookid'></span><a href='rateupdate.php'>(Add New Rate)</a></h3>
                                                <h3 id='banner2'> Add New Rate Here</h3>

                                        </div>
                                    </div>
                                            </br></br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="hr">Hour</label>
                                            <input type="number" min="1" max="24" class="form-control" id="hr" placeholder="Enter Hr" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="km">Kilometer</label>
                                            <input type="number" min="10" max="240" class="form-control" id="km" placeholder="Enter Km"  required>
                                        </div>
                                    </div>
                                            </br>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <label for="cartype">Car Type</label>
                                            <select class="form-control" id='cartype' required placeholder="Enter Car Type">
                                                                    <option value=""></option>
                                                                        <?php
                                                                        $sqlcar="SELECT cartype from `ib_cartype`";
                                                                        $car = mysqli_query($conn,$sqlcar);
                                                                        while($c=mysqli_fetch_array($car))
                                                                        {	
                                                                        ?>
                                                                    <option><?php echo $c[0];?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="rate">Rate</label>
                                            <input type="number"  class="form-control" id="rate" placeholder="Enter the Rate" required>
                                        </div>
                                    </div>
                                            </br></br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" type="button" id="submitbtn" style='display:none'>Edit Rate</button>
                                            <button class="btn btn-success" type="button" id="addbtn">Add Rate</button>
                                        </div>
                                    </div>
                                </form>



                                                            
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

    
            // $('#banner').hide();
            // $('#submitbtn').hide();
            $('#cartype').select2();

            $('#banner2').show();
            $('#addbtn').show();
            
     
    
    })

    $('#hr').change(function(){
        var hour=$('#hr').val();
        $('#km').val(hour*10);
    });



    <?php
    $sql="Select * from ib_ratewalkin";
    $booking = mysqli_query($conn,$sql);
    while($bk=mysqli_fetch_array($booking)){
    ?>
        $('#edit<?php echo $bk[0];?>').click(function(){
            $('#banner').show();
            $('#submitbtn').show();
            
            $('#banner2').hide();
            $('#addbtn').hide();
       
		    $.ajax({
                type:"get",
                url:'api/rateshow.php',
                data:{state:0, id:<?php echo $bk[0];?>},
                success:function(resp)
                {   
                    var jsonData=JSON.parse(resp);
                    if(jsonData.success=='1')
                    {
                        $('#bookid').text(jsonData.id);
                        $('#hr').val(jsonData.hr);
                        $('#km').val(jsonData.km);
                        $('#rate').val(jsonData.rate);
                        $('#cartype').val(jsonData.cartype);
                        $('#cartype').trigger('change');
                    }
                    else
                    {     
                        alert('Error encountered. Cannot edit. Try again');
                            
                    }
                }
            })
        });

    <?php
    }
    ?>


        $('#submitbtn').click(function(){
        
            var hr = $('#hr').val();
            var km= $('#km').val();
            var id= $('#bookid').text();
            var cartype=$('#cartype').val();
            var rate= $('#rate').val();
            
            if(hr=='' || km=='' || cartype=='' || rate=='')
            {
                alert('Please Enter all details');
            }
            else
            {
           
                $.ajax({
                    type:"get",
                    url:'api/rateshow.php',
                    data:{state:1, hr:hr, km:km, id:id, cartype:cartype, rate:rate},
                    success:function(resp)
                    {   
                        var jsonData=JSON.parse(resp);
                        if(jsonData.success=='1')
                        {
                            alert('Rate Updated');
                            location.reload();
                            
                        }
                        else
                        {     
                            //alert('Error encountered. Cannot edit. Try again');
                            alert('Error');
                                
                        }
                    }
                })
            }
            
        });






    $('#addbtn').click(function(){
        
            var hr = $('#hr').val();
            var km= $('#km').val();
            var cartype=$('#cartype').val();
            var rate= $('#rate').val();

            if(hr=='' || km=='' || cartype=='' || rate=='')
            {
                alert('Please Enter all details');
            }
            else
            {
            
                $.ajax({
                    type:"get",
                    url:'api/rateshow.php',
                    data:{state:2, hr:hr, km:km, cartype:cartype, rate:rate},
                    success:function(resp)
                    {   
                        var jsonData=JSON.parse(resp);
                        if(jsonData.success=='1')
                        {
                            alert('Rate Added');
                            location.reload();
                            
                        }
                        else
                        {     
                            //alert('Error encountered. Cannot edit. Try again');
                            alert('Error');
                                
                        }
                    }
                })
            }
    });





</script>