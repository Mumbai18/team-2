<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from radixtouch.in/hospital/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2017 15:31:09 GMT -->

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="description" content="Responsive Admin Template" />
        <meta name="author" content="RedstarHospital" />
        <title>Redstar Hospital | Bootstrap Responsive Hospital Admin Template</title>

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
                    <form class="search-form-opened" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
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
                                    <span class="username username-hide-on-mobile"> Kiran </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="user_profile.html">
                                            <i class="icon-user"></i> Profile </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-directions"></i> Help
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="lock_screen.html">
                                            <i class="icon-lock"></i> Lock
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.html">
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
                                            <img src="img/dp.svg" class="img-circle user-img-circle" alt="User Image" />
                                        </div>
                                        <div class="pull-left info">
                                            <p>Kiran Patel</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidebar-user-panel">
                                    <a href="../ui/addpatient.html" class="">
                                        <i class="fa fa-caret-square-o-right"></i>
                                        <span class="title">Add New Patient</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-caret-square-o-right"></i>
                                        <span class="title">Multi Level Menu</span>
                                        <span class="arrow "></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="fa fa-university"></i> Item 1
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="javascript:;" class="nav-link nav-toggle">
                                                        <i class="fa fa-bell-o"></i> Arrow Toggle
                                                        <span class="arrow "></span>
                                                    </a>
                                                    <ul class="sub-menu">
                                                        <li class="nav-item">
                                                            <a href="javascript:;" class="nav-link">
                                                                <i class="fa fa-calculator"></i> Sample Link 1</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">
                                                                <i class="fa fa-clone"></i> Sample Link 2</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">
                                                                <i class="fa fa-cogs"></i> Sample Link 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fa fa-rss"></i> Sample Link 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fa fa-hdd-o"></i> Sample Link 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="fa fa-gavel"></i> Arrow Toggle
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fa fa-paper-plane"></i> Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fa fa-power-off"></i> Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fa fa-recycle"></i> Sample Link 1
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fa fa-volume-up"></i> Item 3 </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end sidebar menu -->
                <!-- start page content -->
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class=" pull-left">
                                    <div class="page-title">Dashboard</div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li>
                                        <i class="fa fa-home"></i>&nbsp;
                                        <a class="parent-item" href="index-2.html">Home</a>&nbsp;
                                        <i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- start admited patient list -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="card  card-topline-yellow">
                                    <div class="card-head">
                                        <header>ADMIT PATIENT LIST</header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table display product-overview mb-30" id="support_table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Date Of Admit</th>
                                                            <th>Diseases</th>
                                                            <th>Room No</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Jens Brincker</td>
                                                            <td>Dr.Kenny Josh</td>
                                                            <td>27/05/2016</td>
                                                            <td>
                                                                <span class="label label-sm label-success">Influenza</span>
                                                            </td>
                                                            <td>101</td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Mark Hay</td>
                                                            <td>Dr. Mark</td>
                                                            <td>26/05/2017</td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Cholera </span>
                                                            </td>
                                                            <td>105</td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Anthony Davie</td>
                                                            <td>Dr.Cinnabar</td>
                                                            <td>21/05/2016</td>
                                                            <td>
                                                                <span class="label label-sm label-success ">Amoebiasis</span>
                                                            </td>
                                                            <td>106</td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>David Perry</td>
                                                            <td>Dr.Felix </td>
                                                            <td>20/04/2016</td>
                                                            <td>
                                                                <span class="label label-sm label-danger">Jaundice</span>
                                                            </td>
                                                            <td>105</td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Anthony Davie</td>
                                                            <td>Dr.Beryl</td>
                                                            <td>24/05/2016</td>
                                                            <td>
                                                                <span class="label label-sm label-success ">Leptospirosis</span>
                                                            </td>
                                                            <td>102</td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Alan Gilchrist</td>
                                                            <td>Dr.Joshep</td>
                                                            <td>22/05/2016</td>
                                                            <td>
                                                                <span class="label label-sm label-warning ">Hepatitis</span>
                                                            </td>
                                                            <td>103</td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>Mark Hay</td>
                                                            <td>Dr.Jayesh</td>
                                                            <td>18/06/2016</td>
                                                            <td>
                                                                <span class="label label-sm label-success ">Typhoid</span>
                                                            </td>
                                                            <td>107</td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>Sue Woodger</td>
                                                            <td>Dr.Sharma</td>
                                                            <td>17/05/2016</td>
                                                            <td>
                                                                <span class="label label-sm label-danger">Malaria</span>
                                                            </td>
                                                            <td>108</td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end admited patient list -->
                    </div>
                </div>
                <!-- end page content -->
                <!-- start chat sidebar -->
                <div class="chat-sidebar-container" data-close-on-body-click="false">
                    <div class="chat-sidebar">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                    <span class="badge badge-danger">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <!-- Start Doctor Chat -->
                            <div class="tab-pane active chat-sidebar-chat" id="quick_sidebar_tab_1">
                                <div class="chat-sidebar-list">
                                    <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
                                        <h3 class="list-heading">Online</h3>
                                        <ul class="media-list list-items">
                                            <li class="media">
                                                <img class="media-object" src="img/doc/doc3.svg" width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h4 class="media-heading">John Deo</h4>
                                                    <div class="media-heading-sub">Spine Surgeon</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-success">5</span>
                                                </div>
                                                <img class="media-object" src="img/doc/doc1.svg" width="35" height="35" alt="...">
                                                <i class="busy dot"></i>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Rajesh</h4>
                                                    <div class="media-heading-sub">Director</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="media-object" src="img/doc/doc5.svg" width="35" height="35" alt="...">
                                                <i class="away dot"></i>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Jacob Ryan</h4>
                                                    <div class="media-heading-sub">Ortho Surgeon</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-danger">8</span>
                                                </div>
                                                <img class="media-object" src="img/doc/doc4.svg" width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Kehn Anderson</h4>
                                                    <div class="media-heading-sub">CEO</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="media-object" src="img/doc/doc2.svg" width="35" height="35" alt="...">
                                                <i class="busy dot"></i>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Sarah Smith</h4>
                                                    <div class="media-heading-sub">Anaesthetics</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="media-object" src="img/doc/doc7.svg" width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Vlad Cardella</h4>
                                                    <div class="media-heading-sub">Cardiologist</div>
                                                </div>
                                            </li>
                                        </ul>
                                        <h3 class="list-heading">Offline</h3>
                                        <ul class="media-list list-items">
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-warning">4</span>
                                                </div>
                                                <img class="media-object" src="img/doc/doc6.svg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Jennifer Maklen</h4>
                                                    <div class="media-heading-sub">Nurse</div>
                                                    <div class="media-heading-small">Last seen 01:20 AM</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="media-object" src="img/doc/doc8.svg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lina Smith</h4>
                                                    <div class="media-heading-sub">Ortho Surgeon</div>
                                                    <div class="media-heading-small">Last seen 11:14 PM</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-success">9</span>
                                                </div>
                                                <img class="media-object" src="img/doc/doc9.svg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Jeff Adam</h4>
                                                    <div class="media-heading-sub">Compounder</div>
                                                    <div class="media-heading-small">Last seen 3:31 PM</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="media-object" src="img/doc/doc10.svg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Anjelina Cardella</h4>
                                                    <div class="media-heading-sub">Physiotherapist</div>
                                                    <div class="media-heading-small">Last seen 7:45 PM</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-sidebar-item">
                                    <div class="chat-sidebar-chat-user">
                                        <div class="page-quick-sidemenu">
                                            <a href="javascript:;" class="chat-sidebar-back-to-list">
                                                <i class="fa fa-angle-double-left"></i>Back
                                            </a>
                                        </div>
                                        <div class="chat-sidebar-chat-user-messages">
                                            <div class="post out">
                                                <img class="avatar" alt="" src="img/dp.svg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Kiran Patel</a>
                                                    <span class="datetime">9:10</span>
                                                    <span class="body-out"> could you send me menu icons ? </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="img/doc/doc5.svg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Jacob Ryan</a>
                                                    <span class="datetime">9:10</span>
                                                    <span class="body"> please give me 10 minutes. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="img/dp.svg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Kiran Patel</a>
                                                    <span class="datetime">9:11</span>
                                                    <span class="body-out"> ok fine :) </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="img/doc/doc5.svg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Jacob Ryan</a>
                                                    <span class="datetime">9:22</span>
                                                    <span class="body">Sorry for the delay. i sent mail to you. let me know if it is ok or not.</span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="img/dp.svg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Kiran Patel</a>
                                                    <span class="datetime">9:26</span>
                                                    <span class="body-out"> it is perfect! :) </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="img/dp.svg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Kiran Patel</a>
                                                    <span class="datetime">9:26</span>
                                                    <span class="body-out"> Great! Thanks. </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="img/doc/doc5.svg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="javascript:;" class="name">Jacob Ryan</a>
                                                    <span class="datetime">9:27</span>
                                                    <span class="body"> it is my pleasure :) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-sidebar-chat-user-form">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Type a message here...">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn green-bgcolor">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Doctor Chat -->
                            <!-- Start Setting Panel -->
                            <div class="tab-pane chat-sidebar-settings" id="quick_sidebar_tab_3">
                                <div class="chat-sidebar-settings-list">
                                    <h3 class="list-heading">Layout Settings</h3>
                                    <div class="chatpane inner-content ">
                                        <ul class="list-items borderless theme-options">
                                            <li class="theme-option layout-setting">
                                                <span>Sidebar Position </span>
                                                <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                    <option value="left" selected="selected">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </li>
                                            <li class="theme-option layout-setting">
                                                <span>Header</span>
                                                <select class="page-header-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed" selected="selected">Fixed</option>
                                                    <option value="default">Default</option>
                                                </select>
                                            </li>
                                            <li class="theme-option layout-setting">
                                                <span>Sidebar Menu </span>
                                                <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                                    <option value="accordion" selected="selected">Accordion</option>
                                                    <option value="hover">Hover</option>
                                                </select>
                                            </li>
                                            <li class="theme-option layout-setting">
                                                <span>Footer</span>
                                                <select class="page-footer-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </li>
                                        </ul>
                                        <h3 class="list-heading">Account Settings</h3>
                                        <ul class="list-items borderless theme-options">
                                            <li>Show me Online
                                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default"
                                                       data-off-text="OFF">
                                            </li>
                                            <li>Status visible to all
                                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default"
                                                       data-off-text="OFF">
                                            </li>
                                            <li>Everyone will see my stuff
                                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default"
                                                       data-off-text="OFF">
                                            </li>
                                            <li>Auto Sumbit Issues
                                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default"
                                                       data-off-text="OFF">
                                            </li>
                                            <li>Save History
                                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default"
                                                       data-off-text="OFF">
                                            </li>
                                        </ul>
                                        <h3 class="list-heading">General Settings</h3>
                                        <ul class="list-items borderless">
                                            <li>Enable Notifications
                                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default"
                                                       data-off-text="OFF">
                                            </li>
                                            <li>Enable SMS Alerts
                                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default"
                                                       data-off-text="OFF">
                                            </li>
                                            <li>Location
                                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default"
                                                       data-off-text="OFF">
                                            </li>
                                            <li>Show Offline Users
                                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default"
                                                       data-off-text="OFF">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end chat sidebar -->
            </div>
            <!-- end page container -->
            <!-- start footer -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2017 &copy; RedStar Hospital Theme By
                    <a href="mailto:rtthememaker@gmail.com" target="_top">RT Theme maker</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
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


    </body>

    <!-- Mirrored from radixtouch.in/hospital/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2017 15:31:50 GMT -->

</html>