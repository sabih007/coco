<!DOCTYPE html>
<html lang="en">
<?php
$breadcrums =
    array(
        'dashboard' => 'Dashboard',
       'farmhouse_videos' => 'Farmhouse Videos By YouTube',
       'add_Farmhouse_videos' => 'Add_Farmhouse Videos',
        'farmhouse_edit' => 'Farmhouse Edit',
        'reports_Executive_Name' => 'Reports By Executive Name',
        'reports_allRole' => 'Reports All Role',
        'reports_date' => 'Reports Date',
        'farm_img' => 'Farmhouse Eidt Images & Videos',
        'addfarm_img' => 'Farmhouse Images',
        'booking_pdf'   =>   'Print Pdf Invoice',
        'eidt_Booking'   =>  'Eidt_Booking',
        'reports_Status'  => 'Reports Status',
        'reports_by_role' => 'Reports By Role',
        'reports_Monthly' => 'Monthly Reports',
        'reports_timeslot' => 'Reports Time Slot',
        'reports_Bookedby' => 'Reports Booked By',
        'booking_reports' => 'Booking Reports',
        'reports_Yearly'  => 'Reports Yearly',
        'reports_FarmhouseName' => 'Reports FarmhouseName',
        're' => 'RECEIVED / RECIEVABLE AMOUNT',
        'map' => 'Map',
        'yearlyRates' => 'Yearly Rates',
        'farmhouseDetail' => 'Farmhouse Details',
        'login-history' => 'Login History',
        'addNewUser' => 'Add new User',
        'editUser' => 'Edit User',
        'editOld' => 'Update User',
        'addNew' => 'Add new User',
        'yearlyRates_insert' => 'Add Yearly Rates',
        'updatepending' => 'Update Pending',
        'check_booking' => 'Check Booking',
        'check_book_price' => 'Check Book Price',
        'publicholiday' => 'Public Holiday',
        'invoice' => 'Invoice',
        'farmhouse_info' => 'Add Farmhouse Information',
        'add_New_Services' => 'Add New Services',
        'services' => 'Services',
        'surroundings' => 'Surroundings',
        'new_Occasion_add2' => 'New Occasion',
        'bookingcalender' => 'Booking Calender',
        'ratematrix' => 'Rate Matrix',
        'Expenses' => 'Expenses',
        'booked' => 'Booked List',
        'addNew_booking' => 'Add New Booking',
        'addNew_expenses' => 'Add New Expenses',
        'userListing' => 'User Listing',
        'location' => 'Location',
        'updateratematrix' => 'Update Rate Matrix',
        'empTargets' => 'Employees Target Assign',
        'packages_crud' => 'Create Packages ',
        'packagemaster' => 'Active Packages',
        'rateslots' => 'Rate Slots',
        'rolemanage' => 'Role Management',
        'addfarm_img' => 'Farmhouse Images',
        'profile' => 'Profile',
    );



?>

<head>
    <meta charset="utf-8">
    <title>Coco Farmhouse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/loader-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/profile.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- gallery library -->
    <!-- <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script> -->
    <!-- <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <!-- gallery library -->

    <script type="text/javascript" src="<?php echo base_url(); ?>public/admin/assets/js/jquery3.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/admin/assets/js/progress-bar/number-pb.css">
    <style type="text/css">
        canvas#canvas4 {
            position: relative;
            top: 20px;
        }
    </style>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/admin/assets/img/logo.png">
</head>

<body>
    <nav role="navigation" class="navbar navbar-static-top" style="margin-left: 240px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="entypo-menu"></span>
                </button>
                <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
                    <span class="entypo-list-add"></span>
                </button>
                <div id="logo-mobile" class="visible-xs">
                    <h1>Apricot<span>v1.3</span></h1>
                </div>
            </div>
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <div id="nt-title-container" class="navbar-left running-text visible-lg">
                    <ul class="date-top">
                        <li class="entypo-calendar" style="margin-right:5px"></li>
                        <li id="Date"></li>
                    </ul>
                    <ul id="digital-clock" class="digital">
                        <li class="entypo-clock" style="margin-right:5px"></li>
                        <li class="hour"></li>
                        <li>:</li>
                        <li class="min"></li>
                        <li>:</li>
                        <li class="sec"></li>
                        <li class="meridiem"></li>
                    </ul>
                    <ul id="nt-title" style="height: 18px; overflow: hidden;">
                        <?php
                        foreach ($bookingdata as $value) {
                            echo '<li><b><i class="entypo-newspaper"></i>&#160;&#160;' . $value['Invoice_id'] . ' | &#160;Payable : ' . $value['payable'] . ', Received : ' . $value['advanceamount'] . '</li></b>';
                        }
                        ?>
                    </ul>
                </div>
                <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" class="admin-pic img-circle" src="<?php echo base_url(); ?>public/admin/assets/img/default.jpg">Hi,
                            <?= ucwords($this->session->userdata('name')); ?> <b class="caret"></b>
                        </a>
                        <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>profile">
                                    <span class="entypo-user"></span>&#160;&#160;My Profile</a>
                            </li>
<!--                             <li>
                                <a href="#">
                                    <span class="entypo-vcard"></span>&#160;&#160;Account Setting</a>
                            </li> -->
<!--                             <li>
                                <a href="#">
                                    <span class="entypo-lifebuoy"></span>&#160;&#160;Help</a>
                            </li> -->
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url(); ?>adminlogout">
                                    <i class="fa fa-sign-out" aria-hidden="true"> Logout</i></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           <!--  <span class="icon-gear"></span> --><i class="fa fa-sliders" aria-hidden="true"> Setting</i></a>
                        <ul role="menu" class="dropdown-setting dropdown-menu">
                            <li class="theme-bg">
                                <div id="button-bg"></div>
                                <div id="button-bg2"></div>
                                <div id="button-bg3"></div>
                                <div id="button-bg5"></div>
                                <div id="button-bg6"></div>
                                <div id="button-bg7"></div>
                                <div id="button-bg8"></div>
                                <div id="button-bg9"></div>
                                <div id="button-bg10"></div>
                                <div id="button-bg11"></div>
                                <div id="button-bg12"></div>
                                <div id="button-bg13"></div>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a class="toggle-left" href="#">
                            <span style="font-size:20px;" class="entypo-list-add"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="skin-select">
        <div id="logo">
            <h1>COCO<span>v-1.5</span></h1>
        </div>
        <a id="toggle">
            <span class="entypo-menu"></span>
        </a>
        <div class="dark">
            <form action="#">
                <span>
                    <input type="text" name="search" value="" class="search rounded id_search" placeholder="Search Menu..." autofocus />
                </span>
            </form>
        </div>
        <div class="search-hover">
            <form id="demo-2">
                <input type="search" placeholder="Search Menu..." class="id_search">
            </form>
        </div>
        <div class="skin-part">
            <div id="tree-wrap">
                <div class="side-bar">
                    <?php
                    if ($this->session->userdata('role') == 1) {
                        ?>
                        <ul class="topnav menu-left-nest">

                            <li>
                                <a class="tooltip-tip ajax-load" href="<?php echo base_url('dashboard'); ?>" title="Dashboard">
                                    <i class="icon-window"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a class="tooltip-tip2 ajax-load" href="<?php echo base_url(); ?>rolemanage" title="Role Management"><i class="entypo-doc-text"></i><span>Role Management</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="<?php echo base_url(); ?>userListing" title="User Management"><i class="entypo-doc-text"></i><span>User Management</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip ajax-load" href="#" title="Farmhouse Management">
                                    <i class="icon-document-edit"></i>
                                    <span>Farmhouse Setting</span>
                                </a>
                                <ul>
                                    <li>
                                        <a class="tooltip-tip2 ajax-load" href="<?php echo base_url(); ?>farmhouse_info" title="Farmhouse Step"><i class="entypo-doc-text"></i><span>Farmhouse Step</span></a>
                                    </li>
                                  
                                    <li>
                                        <a class="tooltip-tip2 ajax-load" href="<?php echo base_url(); ?>addfarm_img" title="addfarm_img"><i class="entypo-newspaper"></i><span>Farmhouse Images</span></a>
                                    </li>
                                    <li>
                                        <a class="tooltip-tip2 ajax-load" href="<?php echo base_url(); ?>farm_img" title="farm_img"><i class="entypo-newspaper"></i><span>Farmhouse Edit Img & Vid</span></a>
                                    </li>

                                     <li>
                                        <a class="tooltip-tip2 ajax-load" href="<?php echo base_url(); ?>farmhouseDetail" title="farmhouseDetail"><i class="entypo-newspaper"></i><span>Farmhouse Detail</span></a>
                                    </li>
                                    <li>
                                        <a class="tooltip-tip2 ajax-load" href="<?php echo base_url(); ?>services" title="Services"><i class="entypo-newspaper"></i><span>Services</span></a>
                                    </li>
                                    <li>
                                        <a class="tooltip-tip2 ajax-load" href="<?php echo base_url(); ?>surroundings" title="Surroundings"><i class="entypo-newspaper"></i><span>Surroundings</span></a>
                                    </li>
                                    
                                    <li>
                                        <a class="tooltip-tip2 ajax-load" href="<?php echo base_url(); ?>location" title="Location"><i class="entypo-newspaper"></i><span>Location</span></a>
                                    </li>
                                    <li>
                                        <a class="tooltip-tip2 ajax-load" href="<?php echo base_url(); ?>farmhouse_videos" title="Location"><i class="entypo-newspaper"></i><span>Farmhouse Youtube Videos</span></a>
                                    </li>

 
                                </ul>
                            </li>


                        </ul>

                        <ul id="menu-showhide" class="topnav menu-left-nest">
                            <li>
                                <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                                    <span class="component"></span>
                                    <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>publicholiday" title="Public Holiday">
                                    <i class="icon-home"></i>
                                    <span>Public Holiday</span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>yearlyRates" title="Yearly Rates">
                                    <i class="fa fa-money"></i>
                                    <span>Yearly Rates</span>
                                </a>
                            </li>
                                                        <li>
                                <a class="tooltip-tip ajax-load" href="<?php echo base_url(); ?>ratematrix" title="Rate Matrix">
                                    <i class="fa fa-money"></i>
                                    <span>Rate Matrix</span>
                                </a>
                            </li>

                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>updateratematrix" title="Update Rate Matrix">
                                    <i class="fa fa-money"></i>
                                    <span>Update Rate Matrix</span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>packages_crud" title="login">
                                    <i class="fa fa-plus-square-o"></i>
                                    <span>Create Package Rates </span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>packagemaster" title="Active Packages">
                                    <i class="icon-home"></i>
                                    <span>Add/Activate Packages </span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>rateslots" title="Rate Slots">
                                    <i class="fa fa-money"></i>
                                    <span>Rate Slots</span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip ajax-load" href="<?php echo base_url(); ?>empTargets" title="Employee Targets">
                                    <i class="icon-calendar"></i>
                                    <span>Employee Targets</span>
                                </a>
                            </li>

                        </ul>
                    <?php
                    }
                    ?>
                    <?php
                    if ($this->session->userdata('role') == 1 || $this->session->userdata('role') == 2) {
                        ?>
                        <ul class="topnav menu-left-nest">
                            <li>
                                <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                                    <span class="widget-menu"></span>
                                    <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                                </a>
                            </li>


                        </ul>
                        <ul class="topnav menu-left-nest">
                            <li>
                                <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                                    <span class="design-kit"></span>
                                    <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip ajax-load" href="<?php echo base_url(); ?>addNew_booking" title="Add booking">
                                    <i class="icon-mail"></i>
                                    <span>Add booking</span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip ajax-load" href="<?php echo base_url(); ?>booked" title="Booking">
                                    <i class="icon-document-new"></i>
                                    <span>Booking</span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip ajax-load" href="<?php echo base_url(); ?>bookingcalender" title="Booking Calendar">
                                    <i class="icon-calendar"></i>
                                    <span>Booking Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip ajax-load" href="<?php echo base_url(); ?>map" title="Map">
                                    <i class="icon-location"></i>
                                    <span>Map</span>
                                </a>
                            </li>

                        </ul>
                        
                        <!-- REPORTS  -->
                        <ul id="menu-showhide" class="topnav menu-left-nest">
                            <li>
                                <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                                    <span>REPORTS</span>
                                    <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                                </a>
                            </li>


          <?php   if ($this->session->userdata('role') == 1) {
                        ?> 

                           <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>reports_allRole" title="Public Holiday">
                                    <i class="fa fa-file-text-o"></i>
                                    <span>By All Role</span>
                                </a>
                            </li>
                        
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>reports_date" title="Public Holiday">
                                    <i class="fa fa-file-text-o"></i>
                                    <span>By Date to Date</span>
                                </a>
                            </li>
                        
                           <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>booking_reports" title="Public Holiday">
                                    <i class="fa fa-file-text-o"></i>
                                    <span>By Invoice NO</span>
                                </a>
                            </li>
                            
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>reports_FarmhouseName" title="Public Holiday">
                                    <i class="fa fa-file-text-o"></i>
                                    <span>By Farmhouse Name</span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>reports_Yearly" title="Public Holiday">
                                    <i class="icon-home"></i>
                                    <span>By Yearly</span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>reports_Monthly" title="Public Holiday">
                                    <i class="fa fa-file-text-o"></i>
                                    <span>By Monthly</span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>reports_timeslot" title="Public Holiday">
                                    <i class="fa fa-file-text-o"></i>
                                    <span>By Time Slot</span>
                                </a>
                            </li>

                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>reports_Status" title="Public Holiday">
                                    <i class="fa fa-file-text-o"></i>
                                    <span>Status</span>
                                </a>
                            </li>

                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>reports_Bookedby" title="Public Holiday">
                                    <i class="icon-home"></i>
                                    <span>By Booked Role</span>
                                </a>
                            </li>


                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>reports_Executive_Name" title="Public Holiday">
                                    <i class="fa fa-file-text-o"></i>
                                    <span>By Executive_Name</span>
                                </a>
                            </li>

                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>report_employee_target" title="Public Holiday" target="_blank">
                                    <i class="fa fa-file-text-o"></i>
                                    <span>Employee Target</span>
                                </a>
                            </li>



                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>all_pdf_report" title="Public Holiday">
                                    <i class="fa fa-file-text-o"></i>
                                    <span>All Report</span>
                                </a>
                            </li>

                <?php } else{  ?>
                            <li>
                                <a class="tooltip-tip " href="<?php echo base_url(); ?>reports_by_role" title="Public Holiday">
                                    <i class="icon-home"></i>
                                    <span>Your Bookings</span>
                                </a>
                            </li>
               <?php }?>



                        </ul>
                    <?php }
                    if ($this->session->userdata('role') == 3) {
                        ?>

                        <ul class="topnav menu-left-nest">
                            <li>
                                <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                                    <span class="design-kit"></span>
                                    <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip ajax-load" href="<?php echo base_url(); ?>addNew_booking" title="Add booking">
                                    <i class="icon-mail"></i>
                                    <span>Add booking</span>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip ajax-load" href="<?php echo base_url(); ?>booked" title="Booking">
                                    <i class="icon-document-new"></i>
                                    <span>Booking</span>
                                </a>
                            </li>
                        </ul>


                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-fluid" style="margin-left:250px; width:auto;">
        <div class="container-fluid paper-wrap bevel tlbr">
            <div class="row">
                <div id="paper-top">
                    <div class="col-lg-3">
                        <h2 class="tittle-content-header">
                            <i class="icon-window"></i>
                            <span>Dashboard
                            </span>
                        </h2>
                    </div>
                    <div class="col-lg-9">
                        <div class="devider-vertical visible-lg"></div>
                        <div class="tittle-middle-header">
                            <div class="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <span class="tittle-alert entypo-info-circled"></span>
                                Welcome back,&nbsp;
                                <strong><?= ucwords($this->session->userdata('name')); ?></strong>&nbsp;&nbsp;Your last
                                sig in at <?php print_r($loginhistory['logindatatime']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul id="breadcrumb">
                <li>
                    <span class="entypo-home"></span>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="Dashboard" title="Dashboard">Home</a>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="<?php echo $this->uri->segment(1); ?>" title="Dashboard"><?php print_r($breadcrums[$this->uri->segment(1)]); ?></a>
                </li>
                <!-- <li class="pull-right">
                    <div class="input-group input-widget">
                        <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                    </div>
                </li> -->
            </ul>
            <div class="content-wrap">