<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>
<!-- Mirrored from radixtouch.in/hospital/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2017 15:31:09 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>V-Care</title>

    <!-- google font -->
    <link href="../../fonts.googleapis.com/cssbc32.css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css"
    />

    <!-- icons -->
    <link href="js/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!--bootstrap -->
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="js/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style1.css">



    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>

<body class="page-header-fixed sidemenu-closed-hidelogo page-container-bg-solid page-content-white page-md">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index-2.html">
                        <img src="img/logo.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- logo end -->
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start language menu -->
                        <!-- end language menu -->
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="img/dp.svg" />
                                <span class="username username-hide-on-mobile">  <div class="pull-left info" style="margin-top:0px;">
                                        <span><?php echo $_SESSION['username'];?></span>
                                    </div></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="login.php">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <div class="clearfix"> </div>
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll">
                        <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="pull-left image">
                                        <img src="img/dp.svg" class="img-circle user-img-circle" style="width:100%;" alt="User Image" />
                                    </div>
                                    <div class="pull-left info" style="margin-top:0px;">
                                        <span><?php echo $_SESSION['username'];?></span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-caret-square-o-right"></i>
                                    <span class="title"></span>
                                    <span class="arrow "></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper" style="width: 200%">
                <div class="page-content" style="width: 1100px">
                    <!-- start admited patient list -->
                    <div class="container">
                        <div class="row">
                            <!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->
                            <div class="col-xs-12 col-md-4">
                                <!-- CREDIT CARD FORM STARTS HERE -->
                                <div class="panel panel-default credit-card-box">
                                    <div class="panel-heading display-table">
                                        <div class="row display-tr">
                                            <h3 class="panel-title display-td">Payment Details</h3>
                                            <div class="display-td">
                                                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form role="form" id="payment-form" action="" method="POST">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="cardNumber">CARD NUMBER</label>
                                                        <div class="input-group">
                                                            <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required
                                                                autofocus />
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-credit-card"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7 col-md-7">
                                                    <div class="form-group">
                                                        <label for="cardExpiry">
                                                            <span class="hidden-xs">EXPIRATION</span>
                                                            <span class="visible-xs-inline">EXP</span> DATE</label>
                                                        <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required />
                                                    </div>
                                                </div>
                                                <div class="col-xs-5 col-md-5 pull-right">
                                                    <div class="form-group">
                                                        <label for="cardCVC">CV CODE</label>
                                                        <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="couponCode">AMOUNT</label>
                                                        <input type="text" class="form-control"  name="AMOUNT" id="AMOUNT" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-success btn-lg btn-block" type="submit" name="SUBMIT" id="SUBMIT">MAKE A PAYMENT</button>
                                                </div>
                                            </div>
                                            <div class="row" style="display:none;">
                                                <div class="col-xs-12">
                                                    <p class="payment-errors"></p>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($_POST['SUBMIT'])) {
                                           
                                             $link=mysqli_connect("localhost","root","") or die('CONNECTION ERROR');
                                            mysqli_select_db($link,"vcare") or die('DATABSE NOT SELECTED');
                                            $user=$_SESSION['username'];
                                            echo $user;
                                            $AMOUNT=$_POST['AMOUNT'];
                                            echo $AMOUNT;
                                            $date= date("Y/m/d");
                                            echo $date;
                                            $query=mysqli_query($link,"INSERT INTO donation VALUES ('$user','$AMOUNT','$date')") OR DIE("HAGDAGHSGD");
                                            echo "<h1>THANKS FOR DONATING!!</h1>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- CREDIT CARD FORM ENDS HERE -->
                            </div>
                        </div>
                    </div>
                    <!-- end admited patient list -->
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->

            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <!-- end footer -->
    </div>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="js/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="js/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/layout.js" type="text/javascript"></script>
    <script src="js/chart-js/Chart.bundle.js" type="text/javascript"></script>
    <script src="js/chart-js/utils.js" type="text/javascript"></script>
    <script src="js/chart-js/home-data.js" type="text/javascript"></script>
    <!-- If you're using Stripe for payments -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js'></script>
    

</body>





</body>

<!-- Mirrored from radixtouch.in/hospital/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2017 15:31:50 GMT -->

</html>