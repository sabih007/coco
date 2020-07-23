<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>COCO | FARMHOUSES</title>
        <meta name="description" content="">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
        <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->

        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/fontello.css">
        <link href="<?php echo base_url();?>public/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?php echo base_url();?>public/assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="<?php echo base_url();?>public/assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/price-range.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/lightslider.min.css">

        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/responsive.css">

    </head>


    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

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
                                <li><a href="https://www.facebook.com/Thecocofarmhouse/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/coco_farm"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/watch?v=mnI83k4-I-c"><i class="fa fa-youtube fa-1x"></i></a></li>
                                <li><a href="https://www.instagram.com/cocofarmhouse/"><i class="fa fa-instagram"></i></a></li>

                                <li><a href="<?php echo base_url("login") ?>"><i class="fa fa-sign-in fa-1x"></i><span style="font-size:16px;">LOGIN</span></a></li>

                                <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End top header -->

        <nav class="navbar navbar-default " id="myHeader">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
               <a class="navbar-brand" href="<?php echo base_url();?>welcome"><img src="<?php echo base_url();?>public/assets/img/coco_logo.png" alt=""></a>
                  <!--   <a class="navbar-brand" href="<?php echo base_url();?>welcome"><h4 class="resort"><span class="heading_resort">COCO</span> FARMHOUSE</h4></a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo base_url();?>welcome"> Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>about"> About</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>gallery" > Gallery</a>

                            </li>


                        <li class="dropdown yamm-fw" data-wow-delay="0.4s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Farm House <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown_farmhouse">
                                <li>
                                <div class="yamm-content">
                                <div class="row yamm_content_row">
                                <?php
                                    foreach ($farmhouse_menu as $farm) { ?>

  <div class="col-lg-3">
          <ul>
          <li>

            <div class="row">
              <div class="col-md-6 farm_about">
   <a href="<?php echo base_url() . 'farmhouse/' . $farm['HouseID'];  ?>"class="farmhouse_name">
    <b> <?php echo $farm['Name']; ?></b><br>
  </a>
    RENT:<?php echo $farm['Rent']; ?><br>Capacity:<?php echo $farm['Capacity']; ?>
    <!-- <span data-toggle="modal" data-target="#myModal"> -->

  <a href="<?php echo base_url() .'farmhouse/' .$farm['HouseID']; ?>"><i class="btn btn-danger btn-sm" id="nav-advseacrh"> Book now </i></a>


  <!-- </span> -->
  <br>

   <span>

</div>
<div class="col-md-6">
         <a href="<?php echo base_url() . 'farmhouse/' . $farm['HouseID'];  ?>"> <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $farm['Logo']; ?>"class="farmhouse_represantation" alt=""></a>

    </div>
    </div>

    </li>
     </ul>
    </div>
    <?php } ?>
    </div>
            </div>
                                    <!-- /.yamm-content -->
                                </li>
                            </ul>
                        </li>


            <li class="dropdown yamm-fw" data-wow-delay="0.1s">
    <a href="package" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Packages <b class="caret"></b></a>
    <ul class="dropdown-menu responsive responsives">
                            <li>
    <div class="yamm-content">
                 <div class="row fav">

           <?php for ($i = 0; $i < count($package1); $i++) { ?>

      <div class="col-lg-3 col-md-3 col-3" id="lap">
      <a  href="<?php echo base_url('packages/' . str_replace(" ", "_", trim($package1[$i]['shortname'])) . ''); ?>"> <p class="farmhouse_n"><?php echo $package1[$i]['shortname']; ?> Package </p>
         </a>


                                                <h5>
<strong>
    <div class="container_pack">

<a href="<?php echo base_url('packages/' . str_replace(" ", "_", trim($package1[$i]['shortname'])) . ''); ?>"> <img  src="<?php echo base_url(); ?>public/assets/img/farmhouses/<?php echo $package1[$i]['Logo']?>" class="package_image" >
    </a>
      <div class="overlay overlay_package">
    <div class="text_ss"><a href="<?php echo base_url('packages/' . str_replace(" ", "_", trim($package1[$i]['shortname'])) . ''); ?>">Check Package</a></div>
  </div>

</div>




                                                        </strong>
                                                    </a>
                                                </h5>
                                <?php

             foreach($packagemaster as $pack):
                  if($pack['PackageName'] == $package1[$i]['shortname']):
                                ?>
              <?php
                                                endif;
                                                endforeach;
                                            ?>
                                    </div>
                                <?php } ?>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
<li class="wow " ><a  href="<?php echo base_url();?>testimonials">Feedback</a></li>
 <li class="wow " ><a href="<?php echo base_url();?>contact">Contact</a></li>
<!--  <button class="btn  toggle-btn" type="button" style="">
            <i class="fa fa-search-plus" data-toggle="modal" data-target="#myModal" ></i></button> -->
        </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
