<!DOCTYPE html>
<html lang="en">

<?php
require '../api/config.php';
session_start();
if(!$_SESSION['user'] || $_SESSION['user']=='')
{
    header("Location:login.php");
}

if (!$_GET['month']){
    $month='Select the month for the viewing the data';
    $m=0;
}
else{
    if($_GET['month']=='1') 
        $month='January';
    else if($_GET['month']=='2') 
        $month='February';
    else if($_GET['month']=='3') 
        $month='March';
    else if($_GET['month']=='4') 
        $month='April';
    else if($_GET['month']=='5') 
        $month='May';
    else if($_GET['month']=='6') 
        $month='June';
    else if($_GET['month']=='7') 
        $month='July';
    else if($_GET['month']=='8') 
        $month='August';
    else if($_GET['month']=='9') 
        $month='September';
    else if($_GET['month']=='10') 
        $month='October';
    else if($_GET['month']=='11') 
        $month='November';
    else if($_GET['month']=='12') 
        $month='December';
    else
        $month='Select the month for the viewing the data';

    $m=1;
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
                        <li>
                            <a href="index.php">
                                <i class="fas fa-table"></i>Walkin Duty</a>
                        </li>
                        
                        <li class="active">
                            <a href="#">
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
                        
                        <li>
                            <a href="index.php">
                                <i class="fas fa-table"></i>Walkin Duty</a>
                        </li>
                        
                        <li  class="active">
                            <a href="#">
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
                                <div class="dropdown show">
                                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $month;?>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="dutyhistory.php">Select Data.....</a>
                                        <hr>
                                        <a class="dropdown-item" href="dutyhistory.php?month=1">January</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=2">February</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=3">March</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=4">April</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=5">May</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=6">June</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=7">July</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=8">August</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=9">September</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=10">October</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=11">November</a>
                                        <a class="dropdown-item" href="dutyhistory.php?month=12">December</a>
                                    </div>
                                </div>
                            </form>
                            <p><?php 
                                if($m==0)
                                    echo "Showing last 10 Duties. Please Select any month to view";
                                else
                                    echo "Showing Data for the month of : ".$month;
                            
                            ?></p>
                            <div class="header-button">
                                <!--
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                -->
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
                         <div class="row" style="min-height:85vh !important;">
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
                                        <?php
                                            if($m=='1')
                                            {
                                                $mn=$_GET['month'];
                                                $sql="Select * from ib_bookcabs where status in ('2','3','4') and month(reportdate)='$mn' order by reportdate desc";
                                            }
                                            else
                                                $sql="Select * from ib_bookcabs where status in ('2','3','4') order by reportdate desc LIMIT 10";    

                                            $booking = mysqli_query($conn,$sql);
                                            while($bk=mysqli_fetch_array($booking))
                                            {	
                                        ?>
                                            <tr>
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
                                                <td> 
                                                    <?php if($bk[10]==2){?>
                                                        <button class='btn btn-secondary' disabled>Rejected</button>
                                                    <?php }else if($bk[10]==3) { ?>
                                                        <button class='btn btn-warning' id='<?php echo 'moveforbill'.$bk[0];?>'>Finalize</button>
                                                    <?php }else if($bk[10]==4) { ?>
                                                        <button class='btn btn-success' disabled>Completed</button>
                                                     
                                                    <?php } ?> 
                                                </td>
                                            <?php
                                                }
                                            ?>
                                            </tr>
                                          
                                        </tbody>
                                    </table>
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
        
    
    })
   



    <?php
    $sql="Select * from ib_bookcabs where status in ('2','3','4')";
    $booking = mysqli_query($conn,$sql);
    while($bk=mysqli_fetch_array($booking)){
    ?>
    
    $('#moveforbill<?php echo $bk[0];?>').click(function(){
		var c=false;
		c = confirm("Click OK to Confirm Moving to App!");
        if (c==true)
        {
            $.ajax({
                        type:"get",
                        url:'api/dutymigrate.php',
                        data:{id:<?php echo $bk[0];?>},
                        success:function(resp)
                        {   //debugger;
                            var jsonData=JSON.parse(resp);
                            if(jsonData.success=='1')
                            {
                                alert('Data Updated in the Billing App')
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




</script>