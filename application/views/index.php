        <div class="slider-area">
            <div class="slider">

        <div id="bg-slider" class="owl-carousel owl-theme owl_image">
            <div class="item"><img src="<?php echo base_url();?>public/assets/img/farmhouses/home.jpg" alt="GTA V"></div>
           <div class="item"><img src="<?php echo base_url();?>public/assets/img/farmhouses/MAPLE SUPER/5.jpg" alt="GTA V"></div>
         <div class="item"><img src="<?php echo base_url();?>public/assets/img/farmhouses/MAPLE SUPER/9.jpg" alt="GTA V"></div>

                </div>
            </div>
           <div class="slider-content">
                    <div class="container">
                <div class="row ">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-12">
                       <h2><span class="welcome_to">WELCOME TO</span> <span class="coco_front"> COCO </span> <span class="farm_front"> FARM HOUSE </span></h2>
                        <p class="gradient-text" >lots of fun & entertainment in a healthy environment</p>
                    </div>
                    </div>


                        <div class="row button_row">

                        <div class="search-form" >
                        <div class="col-sm-6 col-xs-6 col-md-6 col-lg-3">
                        <button class="navbar-btn nav-button wow FadeInUp login btn-round buut_on" data-wow-delay="0.4s" type="button"  data-toggle="modal" data-target="#bookbypckg">
                            Book now
                </button>
            </div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-3">
                   <a href="#farmhouse"><button class="navbar-btn nav-button wow FadeInUp login btn-round buut_on" data-wow-delay="0.4s" type="button"  s>
                             Explore
                </button></a>
            </div>

                <!-- Taimoor code-->
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-3">
      <?php foreach ($flashdeals_count as $fd) {
                    if($fd['DealStatus'] == "Active"){
                ?>
                <a href="#flashdeals"><button class="navbar-btn nav-button wow FadeInUp login btn-round buut_on" data-wow-delay="0.4s" type="button" >
                             Flash Deals
                </button></a>
                <?php
                    }
                }
                ?>
                <!-- End Taimoor code -->
            </div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-3">
                <button class="navbar-btn nav-button wow FadeInUp login btn-round  buut_on" data-wow-delay="0.4s" type="button"  style="" data-toggle="modal" data-target="#checkavail">
                        CheckAvailability
                </button>
            </div>
       </div>
   </div>


            </div>


                            </div>

            <div class="search-form wow pulse slider_form" data-wow-delay="" id="bookingsearch" style="display:none">
                     <button class="btn search-btn" id="closesearchbar"><span aria-hidden="true">&times;</span></button>
                    <form action="<?php echo base_url();?>check" class=" form-inline form_inline " method="post">
                         <div class="form-group extra form_slider">
                            <label for="ArrivalDate">Time Slot</label>
                            <select id="lunchBegins" name="timeslot" id="timeslot" class="form-control timeslot" title="Select your Timing" required>
                                <option selected>Select Timeslot</option>
                                <option value="09-Hours (8AM to 5PM)">09-Hours (8AM to 5PM)</option>
                                <option value="11-Hours (8PM to 7AM)">11-Hours (8PM to 7AM)</option>
                                <option value="21-Hours (8PM to 5PM)">21-Hours (8PM to 5PM)</option>
                            </select>
                        </div>
                        <div class="form-group extra form_slider">
                            <label for="ArrivalDate">ArrivalDate</label>
                            <input type="date" name="ArrivalDate" id="ArrivalDate" class="datepicker form-control" placeholder="MM/DD/YYYY" required>
                        </div>
                        <div class="form-group extra form_slider">
                            <label for="ArrivalDate">DepartureDate</label>
                            <input type="date" class="form-control" placeholder="Key word" name="DepartureDate" id="DepartureDate" required>
                        </div>

                        <div class="form-group extra form_slider">
                            <label for="housename">HouseName</label>
                            <select class="form-control HouseName" id="housename" name="HouseName">
                                <option id="pp">Select Farmhouse</option>
                            </select>
                        </div>
                        <div class="form-group extra">
                            <label for="Adults" id="myid">
                                Adults
                            </label>
                            <input type="number" class="form-control" placeholder="upto" name="upto" id="upto" readonly style="display:none;">
                            <input type="number" class="form-control" placeholder="capacity" name="capacity" id="capacity" readonly style="display:none;">
                            <input type="number" min="0" class="form-control" placeholder="Adults" name="Adults" id="Adults" required>
                        </div>
                        <div class="form-group extra form_slider">
                            <label for="Childs">Childs</label>
                            <input type="number" min="0" class="form-control" placeholder="Childs" name="childs" required>
                        </div>
                        <div class="form-group extra form_slider">
                            <label>Booking For:</label>
                            <select name="BookingFor" id="bookingFor" class="form-control" title="Booking For">
                                <?php foreach ($bookingfor as $value) { ?>
                                    <option value="<?php echo $value['BookingFor']; ?>"><?php echo $value['BookingFor']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button class="btn search-btn co_but" type="submit" style="margin-top: 25px;"><i class="fa fa-search"></i></button>

                    </form>

                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- property area -->
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2 id="farmhouse">THE COCO FARMHOUSE</h2>
                        <!-- <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies . </p> -->
                    </div>
                </div>
  <div class="col-md-12 ">
                        <div id="list-type" class="proerty-th">
                            <?php foreach ($farmhouse_all_data as $key => $value) { ?>

                      <div class="col-sm-6 col-md-3 p0">
                    <div class="box-two proerty-item">
                             <div class="item-thumb">
                              <div class="">
                  <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>">

             <img class="vave" src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $value['Logo']; ?>" alt="" class="img-rounded"></a>
                                   </div>
                                        </div>
                            <div class="item-entry overflow">
                                <?php foreach ($discount_percentage as $disc) { ?>

                              <!--   <p class="percent"><?php echo $disc['discount_percent']; ?> OFF</p> -->

                                       <?php } ?>

                          <h5><a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>"><?php echo $value['Name']; ?>

                                                </a>

                                                <span class="proerty-price pull-right small_s1">
                                                  <small class="small-s"> <i class="pe-7s-home"></i> Rs:
                                                        <?php echo $value['Rent']; ?></small>
                                                </span>
                                            </h5>
                                            <div class="dot-hr"></div>

                                            <span class="pull-left cap-b ">
                                                <b>Capacity: </b> <?php echo $value['Capacity']; ?></span>
                                            <span class="rates_s pull-right " >
                                                <i class="fa fa-check "></i>
                                                <b>Rs.</b> <b><?php echo $value['WD_DayNightRates']; ?></b> |&nbsp<b class="samall-b"><?php echo $value['WD_Discount']; ?></b>% OFF</span>

                                            <p style="display: none;"><?php echo $value['Description']; ?></p>


                                            <?php
                                            foreach ($packagemaster as $pack) :
                                                if ($pack['PackageID'] == $value['package_id']) :
                                            ?>

                                                    <br>

                                           <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>"><input type="button" name="packages"
                                            value="Book now" class="btn btn-sm Best_Deals "></a>


                                            <?php
                                                endif;
                                            endforeach;
                                            ?>
                                            <!--       the discount rates info starts here -->

                        <p class="rates" style="display: none;">
                 <button style="align-content: right; float:right; "
                    class="navbar-btn nav-button wow bounceInRight login"
       data-wow-delay="0.4s" type="button" id="searchbar" data-toggle="modal" data-target="#myModal">
                                                    Book now
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
            </div>
        </div>



<!-- Taimoor code -->
<!-- Taimoor code -->
<div id="flashdeals"></div>

    <!-- Packages -->
    <?php
        foreach ($flashdeals_count as $fd) {
            if($fd['DealStatus'] == "Active"){
    ?>
    <section class="our_packages_heading">
        <!-- <h2 class="text-center" id="flashdeals"><span class="blinking"><b>Flash Deals</b></span></h2> -->
        <h1 class="text-center ml15">
        <span class="word" style="color:#860a08;">Flash</span>
        <span class="word" style="color:#860a08;">Deals</span>
        </h1>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


        <!-- Tabs for deals -->


        <div class="wrapper">

    <div class="tab-wrapper">
        <ul class="tabs">
            <?php if(count($get_all_flashdeals_by_today) > 0){
                echo '  <li class="tab-link active" data-tab="1">Now</li>
                        <li class="tab-link" data-tab="2">Upcoming</li>';
            }else{
                echo '  <li class="tab-link active" data-tab="2">Upcoming</li>';
            }?>

        </ul>
    </div>


    <div class="content-wrapper">

        <?php
            if(count($get_all_flashdeals_by_today) > 0){
        ?>

        <!-- First tab Start -->
        <div id="tab-1" class="tab-content active tab-flash">
           <!-- Packages -->
                <div class="container-fluid">
                    <div class=" col-lg-12 col-md-12 col-12">
                        <div id="owl-demo" class="owl-carousel owl-theme">

            <?php
                foreach ($get_all_flashdeals_by_today as $value) {
                    $dealRatioInNumb = ($value['DealValue']/100);
                    $DealValue = ($value['Rent']*$dealRatioInNumb);
                    $finalDealValue = $value['Rent']-$DealValue;
            ?>
                    <div class="carousel-item deals_item">
                        <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $value['Logo']; ?>">
                        <div class="ribbon ribbon_style"><span class="ribbon_name"><?php echo $value['DealValue'];?> % OFF</span></div>

                        <div class="row flash_deals_row">
                                <div class="col-lg-12 col-md-12">
                                    <h5><a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>"><?php echo $value['Name']; ?> </a></h5>
                                <div class="dot-hr"></div>
                                </div>

                                <div class="col-lg-5 col-md-6">
                                    <span class="proerty-price pull-right">
                                        <i class="fa fa-home "></i><small>Rs:</small><strong class="" style="text-decoration:line-through;">
                                          <?php echo $value['Rent']; ?>  </strong>
                                    </span>
                                </div>

                                <div class="col-lg-7 col-md-6">
                                    <span>
                                        <a href="#" style="color:green;"> <i class="fa fa-check-circle" style="color:green;"></i> <small>Rs:<?php echo $finalDealValue;?>
                                        </small> </a>
                                    </span>
                                </div>
                        </div>

                        <span> <i class="fa fa-gift flash_buttons_icon" style=></i></span>
                        <button class="navbar-btn nav-button wow bounceInRight login flash_deal_button get_deal" type="button" id="<?php echo $value['HouseID'];?>" data-deal="<?php echo $value['DealID'];?>" data-toggle="modal" data-target="#myGetDealModal"> <span class="blinking flash_deal_get">Get now!</span></button>
                    </div>

<?php
    }
?>
                    </div>
                </div>
            </div>
    <!-- End Packages -->
    </div>
        <!-- First tab end -->

        <!-- Second tab start -->
        <div id="tab-2" class="tab-content tab-flash">
        <!-- Packages -->
                <div class="container-fluid">
                    <div class="col-md-12">
                <div id="owl-demo1" class="owl-carousel owl-theme">
        <?php foreach ($get_all_flashdeals as $value) {
        ?>
        <div class="carousel-item1 deals_item">
                        <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $value['Logo']; ?>">
                        <div class="ribbon ribbon_style "><span  class="ribbon_name"><?php if($value['DealStatus'] == 'Active'){ echo $value['DealValue']." % OFF";} else{ echo "Coming Soon";}?></span></div>

                        <div class="row flash_deals_row">
                                <div class="col-lg-12 col-md-12">
                                    <h5><a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>"><?php echo $value['Name']; ?> </a></h5>
                                <div class="dot-hr"></div>
                                </div>

                                <div class="col-lg-5 col-md-6 float-right">
                                    <span class="proerty-price pull-right">
                                        <i class="fa fa-home "></i><small>Rs:<?php echo $value['Rent']; ?></small>
                                    </span>
                                </div>
                        </div>

                        <span> <i class="fa fa-gift flash_buttons_icon" style="margin-top:-10px;"></i></span>
                        <button class="navbar-btn nav-button wow bounceInRight login flash_deal_button get_deal" type="button" id="<?php echo $value['HouseID'];?>"> <span class="flash_deal_get">Soon!</span></button>
                    </div>

        <?php
            }
        ?>
                </div>
            </div>
        </div>
        <!-- End Packages -->
        </div>
        <!-- Second tab end -->

        <?php
            }
            else{
        ?>

        <!-- Second tab start -->
        <div id="tab-2" class="tab-content active tab-flash">
        <!-- Packages -->
                <div class="container-fluid">
                    <div class="col-md-12">
                <div id="owl-demo1" class="owl-carousel owl-theme">
        <?php foreach ($get_all_flashdeals as $value) {
        ?>
        <div class="carousel-item1 deals_item">
                        <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $value['Logo']; ?>">
                        <div class="ribbon ribbon_style"><span  class="ribbon_name"><?php if($value['DealStatus'] == 'Active'){ echo $value['DealValue']." % OFF";} else{ echo "Coming Soon";}?></span></div>

                        <div class="row flash_deals_row">
                                <div class="col-lg-12 col-md-12">
                                    <h5><a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>"><?php echo $value['Name']; ?> </a></h5>
                                <div class="dot-hr"></div>
                                </div>

                                <div class="col-lg-6 col-md-6 float-right">
                                    <span class="proerty-price pull-right">
                                    <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                        <small><p id="demo" ></p></small>
                                        </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="col-lg-6 col-md-6 float-right">
                                    <span class="proerty-price pull-right">
                                    <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                        <small><p id="demos" ></p></small>
                                        </div>
                                        </div>
                                    </span>
                                </div>
                        </div>

                        <span> <i class="fa fa-gift flash_buttons_icon" style="margin-top:-10px;"></i></span>
                        <button class="navbar-btn nav-button wow bounceInRight login flash_deal_button get_deal" type="button" id="<?php echo $value['HouseID'];?>"> <span class="flash_deal_get">Soon!</span></button>
                    </div>

        <?php
            }
        ?>
                </div>
            </div>
        </div>
        <!-- End Packages -->
        </div>
        <!-- Second tab end -->


        <?php
            }
        ?>
    </div>

</div>
        <!-- End tabs for deals -->
    </section>



    <section class="our_packages_heading">
    <h1 class="text-center" id="ourpackagae" style="color: #860a08">COCO PACKAGES</h1>
    </section>


            <!-- Packages -->
            <!--Welcome area -->
                <div class="Welcome-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 Welcome-entry  col-sm-12">
                            <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                                <div class="welcome_text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">

                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                            <a href="<?php echo base_url(); ?>packages">
                                                <h2>Coco packages</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="welcome_services wow fadeInRight">
                                    <div class="row">
                                        <div class="col-xs-12 slider-origin">
                                            <?php
                                            $rotate    = (360 / count($packageactive));
                                            $i = 0;
                                            foreach ($packageactive as $value) {
                                                echo '
                          <a href="packages/' . str_replace(" ", "_", trim($value['PackageName'])) . '">
                <div class="slider-item" style="border-radius: 8% 50%; transform: rotate(' . $rotate * $i . 'deg);">
                 <h3  class="flower_welcome" style="text-align:center; color:white; transform: rotate(-' . $rotate * $i . 'deg);">' . $value['PackageName'] . '</h3>
                     </div> </a>';
                                $i++;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Packages -->
        <?php
                }else{
        ?>

    <section class="our_packages_heading">
        <h2 class="text-center" id="ourpackagae">COCO PACKAGES</h2>
    </section>

        <!-- Packages -->
            <!--Welcome area -->
                <div class="Welcome-area"  >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 Welcome-entry  col-sm-12">
                            <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                                <div class="welcome_text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">

                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                            <a href="<?php echo base_url(); ?>packages">
                                                <h2>Coco packages</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="welcome_services wow fadeInRight">
                                    <div class="row">
                                        <div class="col-xs-12 slider-origin">
                                            <?php
                                            $rotate    = (360 / count($packageactive));
                                            $i = 0;
                                            foreach ($packageactive as $value) {
                                                echo '
                          <a href="packages/' . str_replace(" ", "_", trim($value['PackageName'])) . '">
                <div class="slider-item" style="border-radius: 8% 50%; transform: rotate(' . $rotate * $i . 'deg);">
                 <h3  class="flower_welcome" style="text-align:center; color:white; transform: rotate(-' . $rotate * $i . 'deg);">' . $value['PackageName'] . '</h3>
                     </div> </a>';
                                $i++;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Packages -->

        <?php
            }}
        ?>
<!-- End Taimoor code -->




















        <!--TESTIMONIALS -->
        <div class="testimonial-area recent-property">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Our Customers Said  </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="row testimonial">
                        <div class="col-md-12">
                        <div id="testimonial-slider">
                            <?php foreach ($testimonial as $test) { ?>
                                <div class="item">
                                <div class="client-face wow fadeInRight" data-wow-delay=".9s">
                                    </div>
                                    <div class="client-text">
                                        <p><i><?php echo $test['messege']; ?></i></p>
                                        <h4  class="cs"><strong><?php echo $test['fullname']; ?></strong> - <i>
                                                <?php echo $test['company']; ?></i>
                                        </h4>

                                        <h6 class="rat-r">
                                        <?php echo "<br>Rating : "?>
                                            <?php for($i=0; $i<$test['rating']; $i++){
                                                echo "&#9733";
                                            } ?>
                                            <?php echo "/&#9733 &#9733 &#9733
                                        &#9733 &#9733"?>
                            </h6>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="lightbox">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body mtbk" id="packages">

                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn_book align-content-center" id="close_modal" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="working">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 align="center" style="color: red;">OOOPPPSSSS!!!!Under Construction</h2>
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn_book align-content-center" id="close_modal" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- View Packages Modal Close -->
    <!-- Modal start -->



    <div class="modal fade" id="bookbypckg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content modal_contant_advance">
                <div class="modal-header header_modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title modal_title_c " id="myModalLabel">Book Now</h4>
                </div>
                <div class="modal-body" id="moodal">
                    <div class="container check_availability">
                        <form action="<?php echo base_url('check'); ?>" class=" form-inline" method="post">
                            <div class="row advance new-cls-clss-uz">
                                 <div class="form-group pckg">
                                    <label for="ArrivalDate">Time Slot</label>
                                    <select id="lunchBegins" name="timeslot" id="timeslot" class="form-control timeslot" title="Select your Timing" required>
                                        <option selected value="">Select your time</option>
                                        <option value="09-Hours (8AM to 5PM)">09-Hours (8AM to 5PM)</option>
                                        <option value="11-Hours (8PM to 7AM)">11-Hours (8PM to 7AM)</option>
                                        <option value="21-Hours (8PM to 5PM)">21-Hours (8PM to 5PM)</option>
                                    </select>
                                </div>
                                <div class="form-group pckg">
                                    <label for="ArrivalDate">ArrivalDate</label>
                                    <input type="date" name="ArrivalDate" id="ArrivalDate1" class="datepicker form-control" placeholder="DD/MM/YYYY" required>
                                </div>
                                <div class="form-group pckg">
                                    <label for="ArrivalDate">DepartureDate</label>
                                    <input type="date" class="form-control" placeholder="dd/mm/yy" name="DepartureDate" id="DepartureDate" required>
                                </div>

                                <div  class="form-group pckg">
                                    <label for="housename">HouseName</label>
                                    <select class="form-control  housename1" id="housename1" name="HouseName">
                                    </select>
                                </div>
                                <div class="form-group extra extra_adult">
                                    <label for="Adults" id="myid1">
                                        Adults
                                    </label>
                                    <input type="number" class="form-control" placeholder="upto" name="upto" id="upto1" readonly style="display:none;">
                                    <input type="number" class="form-control" placeholder="capacity" name="capacity" id="capacity1" readonly style="display:none;">
                                    <input type="number" class="form-control" placeholder="Adults" name="Adults" id="Adults1" min="0" required>
                                </div>
                                <div class="form-group pckg">
                                    <label for="Childs">Childs</label>
                                    <input type="number" min="0" class="form-control" placeholder="Childs" name="childs" id="childs" required>
                                </div>
                                <div class="form-group pckg">
                                    <label>Booking For:</label>
                                    <select name="BookingFor" id="bookingFor" class="form-control" title="Booking For">
                                        <option value="0"style="display: none"> Booking </option>
                                        <?php foreach ($bookingfor as $value) { ?>
                                            <option value="<?php echo $value['BookingFor']; ?>"><?php echo $value['BookingFor']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn search-btn searh_advance" type="submit" ><i class="fa fa-search"></i></button>
                                </div>
                            </div>

                    </div>
                </div>
               <!--  <div class="modal-footer advance">

                </div> -->
                </form>
            </div>
        </div>
    </div>
<!-- Modal end -->
<!-- Modal end -->
<div class="container">
    <div class="cool-lg-12 col-md-12 col-12">
<div class="modal fade" id="checkavail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal_contant_advance " id="check_
            available_name">
                <div class="modal-header header_modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title  " id="myModalLabel1">Search Available Farmhouse</h4>
                </div>
                <div class="modal-body" id="moodal">
                    <div class="container check_availability">
                        <form action="<?php echo base_url('check_avail'); ?>" class=" form-inline" method="post">
                            <div class="row advance new-cls-clss-uz">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                 <div class="form-group pckg" style="width:250px;">
                                    <label for="ArrivalDate">Time Slot</label>
                                    <select id="lunchBegins" name="timeslot" id="timeslot" class="form-control timeslot" title="Select your Timing" required>
                                        <option selected value="">Select your time</option>
                                        <option value="09-Hours (8AM to 5PM)">09-Hours (8AM to 5PM)</option>
                                        <option value="11-Hours (8PM to 7AM)">11-Hours (8PM to 7AM)</option>
                                        <option value="21-Hours (8PM to 5PM)">21-Hours (8PM to 5PM)</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3" >
                                <div class="form-group pckg" style="width: 250px;">
                                    <label for="ArrivalDate">ArrivalDate</label>
                                    <input type="date" name="ArrivalDate" id="ArrivalDate1" class="datepicker form-control" placeholder="DD/MM/YYYY" required>
                                </div>
                                </div>
                                  <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group pckg"  style="width: 250px;">
                                    <label for="ArrivalDate">DepartureDate</label>
                                    <input type="date" class="form-control" placeholder="dd/mm/yy" name="DepartureDate" id="DepartureDate" required>
                                </div>
                            </div>
                               <div class="col-lg-2 col-md-2 col-sm-2">
                                <div class="form-group ">
                                    <button class="btn search-btn searh_advance" type="submit" ><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            </div>

                    </div>
                </div>
               <!--  <div class="modal-footer advance">

                </div> -->
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<?php $this->load->view('includes/footer.php');?>
<!-- Taimoor code -->
<script type="text/javascript">
    $(document).ready(function() {

    $("#owl-demo").owlCarousel({
        navigation : true
    });

    $("#owl-demo1").owlCarousel({
        navigation : true
    });


anime.timeline({loop: true})
  .add({
    targets: '.ml15 .word',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 800,
    delay: (el, i) => 800 * i
  }).add({
    targets: '.ml15',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });



});
</script>
<script>
    $(document).ready(function(){
    $('.get_deal').click(function() {
        $('#get_deals_form')[0].reset();
        var get_deal_id = $(this).attr('data-deal');
        // alert(get_deal_id);
        // return false;
        var get_deal_housename = $(this).attr('id');
        $.ajax({
            method:'POST',
            dataType:'json',
            url:'<?php echo base_url();?>Welcome/testing',
            data:{
                get_deal_housename:get_deal_housename,
                get_deal_id:get_deal_id
            },
            success:function(data){
                // alert(data['farmhouse_data'][0].HouseID);
                $('#housename4').empty();
                $('#housename4').append('<option value="0">Select farmhouse</option>');
                $('#housename4').append('<option value="'+data['farmhouse_data'][0].HouseName+'">'+data['farmhouse_data'][0].HouseName+'</option>');
                var dealValueInNumb = parseInt(data['deal_data'][0].DealValue)/100;
                // alert(dealValueInNumb);
                var DealValue = parseInt(data['farmhouse_data'][0].ActualRates)*dealValueInNumb;
                var finalDealValue = parseInt(data['farmhouse_data'][0].ActualRates)-DealValue;
                $('#deal_value').val(finalDealValue);
                // alert(finalDealValue);
                $('#Deal_Title').val(data['deal_data'][0].DealTitle);
            }
        });
    });

    $('.tab-link').click( function() {

    var tabID = $(this).attr('data-tab');

    $(this).addClass('active').siblings().removeClass('active');

    $('#tab-'+tabID).addClass('active').siblings().removeClass('active');
});
});
</script>
<!-- End Taimoor code -->

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

<!-- <script>
moment().format('[The time is] h:mm:ss a');
'The time is 4:47:09 pm'
</script> -->
<script>
let date_ob = new Date();

// adjust 0 before single digit date
let date = ("0" + date_ob.getDate()).slice(-2);

// current month
let month = ("0" + (date_ob.getMonth() + 1)).slice(-2);

// current year
let year = date_ob.getFullYear();

// prints date in YYYY-MM-DD format
  document.getElementById("demos").innerHTML =(date + "-" + month + "-" + year);
</script>
