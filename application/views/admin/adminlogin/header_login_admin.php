<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COCO <?php echo  '| ' . ucfirst($this->uri->segment(1)); ?></title>
    <meta name="description" content="GARO is a real-estate template">
    <meta name="author" content="Kimarotec">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notonastaliqurdudraft.css">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/fontello.css">
    <link href="<?php echo base_url(); ?>public/admin/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/admin/assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/admin/assets/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/price-range.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/lightslider.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/stylecoco.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/wizard.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/style1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/style.css">


</head>
<style type="text/css">
    .round-uz-class-clss {
        background-image: linear-gradient(#cb1b1a, #e02d31);
        color: white;
        font-size: 25px;
        font-weight: 400 !important;
        padding: 20px;
        border-radius: 50%;
        width: 120px;
        height: 110px;
        font-family: sans-serif;
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        border: 10px inset #f5f5dc;
    }

    .main-nav .SilverFritoSat {
        background-image: url(http://localhost/coco_new/public/admin/assets/img/pack_header_img.png) !important;
        color: #fff;
        background-position: 0 0px;
        background-size: cover;
        border-bottom: 3px solid #ac3220;
    }

    p.round-uz-class-clss {
        margin: 0 auto;
        display: inline-block;
        font-weight: bold !important;
        font-size: 13px !important;
    }

    .nav-tabs>li {
        float: none;
        margin-bottom: 0px;
        width: 33.333333333%;
    }

    .round-uz-class-clss {
        background-image: linear-gradient(#cb1b1a, #e02d31);
        color: white;
        font-size: 25px;
        font-weight: 400 !important;
        padding: 20px;
        border-radius: 50%;
        width: 120px;
        height: 110px;
        font-family: sans-serif;
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        border: 10px inset #f5f5dc;
    }

    .card-footers.SilverMontoThu.bbtm {
        background: #fff !important;
        padding: 10px;
    }

    p.round-uz-class-clss {
        margin: 0 auto;
        display: inline-block;
    }

    .tab-content ul li {
        margin-right: 0;
    }

    .list-group {
        padding-left: 0;
        margin-bottom: 0;
        padding: 0px 0 0px 0;
    }

    .card-footers.SilverMontoThu.bbtm {
        background: #fff !important;
    }
</style>

<body>
    <!-- <div id="preloader">
        <div id="status">&nbsp;</div>
    </div> -->
    <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="fa fa-phone"></i>021-34392681-2</span>
                                <span><i class="fa fa-envelope-o"></i>info@cocofarmhouse.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-4  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline ">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube fa-1x"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>'index'"><h4 class="resort"><span class="heading_resort">COCO</span> RESORTS</h4></a>
                </div>
             <h1 style="font-family: sans-serif; font-weight: 700;margin-left: 400px;">Back Office Login</h1>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse yamm" id="navigation">
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End of nav bar -->
    <!-- FOTTER -->