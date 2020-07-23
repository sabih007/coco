        <link rel="stylesheet" href="assets/css/lightslider.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
<!--         <div class="page-head">
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title" style="color:white;">Farm House Deatail's </h1>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End page header -->

        <!-- property area -->
        <?php foreach ($farmhouse_data as  $value) { ?>
        <div class="content-area farmhouse_detail single-property content_area_3" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">

                <div class="clearfix padding-top-40" >

                    <div class="col-md-6 single-property-content prp-style-2">
                        <div class="">
                            <div class="row">
                                <div class="light-slide-item">
                                <div class="clearfix">
                                <div class="favorite-and-print">
                                    <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                    <a class="printer-icon " href="javascript:window.print()">
                                        <i class="fa fa-print"></i>
                                    </a>
                                </div>


                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                    <?php
                                    $dirname = "public/assets/img/farmhouses/" . $value['Name'] . "/";
                                    $images = glob($dirname . "*");
                                    foreach ($images as $image) {
                                        $checkk = explode('.', $image);
                                        if ($checkk[1] == 'jpg') { ?>
                                            ?>

                                            <li data-thumb="<?php echo base_url() . $image; ?>">
                                                <img class="img_grand" src="<?php echo base_url() . $image; ?>" alt="">
                                            </li>
                                    <?php }
                                    } ?>

                                </ul>
                            </div>
                                </div>
                            </div>
                            <div class="single-property-wrapper">
                        <div class="single-property-header">
                            <?php foreach ($discount_percentage as $disc) { ?>

                                <!-- <p class="percent"><?php echo $disc['discount_percent']; ?>OFF</p> -->

                            <?php } ?>
                            <h1 class="property-title pull-left"><strong><?php echo $value['Name']; ?></strong> </h1>


                            <b><span class="property-price pull-right" style="margin-top: 10px;text-decoration: line-through;"><i class="pe-7s-home"></i>&nbsp;Rs:<?php echo $value['Rent']; ?>/-</span></b>


                        </div>
                        <h5 class="cap"><b>Capacity : </b> <?php echo $value['Capacity']; ?> <i class="pe-7s-users"></i></span></h5>
                        <span class="rates pull-right" >
                           <i class="fa fa-check icon_check" ></i>
                            <!-- <?php echo str_replace(" to ", "-", $value['WorkingDays']); ?> -->
                            <!-- <?php echo rtrim($value['WD_DayNightTime'], "(8PM to 5PM)"); ?> -->

       <b> Rs.</b> <b ><?php echo $value['WD_DayNightRates']; ?></b> |&nbsp<b ><?php echo $value['WD_Discount']; ?></b>% OFF</span>
        <?php
        foreach ($packagemaster as $pack) :
            if ($pack['PackageID'] == $value['package_id']) :
        ?>                      <input type="button"  name="packages" value="Book now" id="<?php echo $value['package_id']; ?>" class="btn btn-sm viewpack " style="width: 20%;
        background-color: #860A08;
        color: #fff !important;
        margin: 10px 0 20px 0 !important;
        padding: 5px;">

                        <?php
                    endif;
                endforeach;
                        ?>

        <div class="single-property-wrapper">

                            <div class="section">
                            <h4 class="s-property-title"><strong>Description</strong></h4>
                            <div class="s-property-content">
                                <p><strong><?php echo $value['Description']; ?></strong></p>
                            </div>
                        </div>

                                </div>

                                <!-- End description area  -->
                                <div class="property-meta entry-meta clearfix ">
                            <h4 class="s-property-title"><strong> Accommodation / Facilities</strong></h4>
                            <?php foreach ($facilities_in_farm as $key => $value) { ?>
                                <div class="col-xs-6 col-sm-4 col-md-3 p-b-15 column-2">
                                    <span class="property-info-icon icon-bed">
                                        <img class="ic"src="<?php echo base_url(); ?>public/assets/img/icon/IconDetails/<?php echo $value['Name']; ?>.png">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label" data-tooltip="<?php echo $value['Name']; ?>">
                                            <strong><?php echo $value['Name'] . ' ' . $value['Size'] . ' ' . $value['TotalUnits']; ?></strong>
                                        </span>
                                        <span class="property-info-value"> </span>
                                    </span>
                                </div>
                            <?php  } ?>
                        </div>
                        <!-- Activities strat -->
                        <div class="container" >
                            <div class="row">
                                <div class="property-meta entry-meta clearfix ">
                                    <h4 class="s-Bproperty-title"><strong>Activities</strong></h4>
                                    <?php foreach ($activities_in_farm as $key => $value) { ?>

                                        <div class="col-lg-2 col-sm-2 col-md-2 p-b-15 column">
                                            <span class="property-info-icon icon-bed">
                                                <img class="io"src="<?php echo base_url(); ?>public/assets/img/icon/IconDetails/<?php echo $value['Name']; ?>.png">
                                            </span>
                                            <span class="property-info-entry">
                                                <span class="property-info-label" data-tooltip="<?php echo $value['Name']; ?>">
                                                    <strong><?php echo $value['Name'] . ' ' . $value['Size'] . ' ' . $value['TotalUnits']; ?></strong>
                                                </span>
                                                <span class="property-info-value"> </span>
                                            </span>

                                        </div>

                                    <?php  } ?>
                                </div>

                            </div>
                        </div>
                        <!-- Activities  end -->
                        <?php
                                    } ?>
     <div class="section additional-details" >
         <h4 class="s-property-title"><strong>In_Surrounding / Nearby Details</strong></h4>
                 <ul class="additional-details-list clearfix">
                    <?php foreach ($surrounding_data as $key => $value) { ?>

                                <li>
                    <span class="col-xs-6 col-sm-4 col-md-6 add-d-title">&#x2022; <?php echo $value['Name']; ?></span>
                                        <!--  <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span> -->
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                                <!-- End additional-details area  -->

                                <div class="section property-features">
                            <h4 class="s-property-title"> <strong>Services</strong></h4>
                            <ul>
                                <?php foreach ($services_data as $key => $value) { ?>
                                    <li><a href=" "><strong><?php echo $value['Name']; ?></strong></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <h4 class="s-property-title"> <strong>Map</strong></h4>
                        <div style="width: 100%"><iframe width="100%" height="500" src="https://maps.google.com/maps?width=100%
                            &amp;height=500&amp;hl=en&amp;coord=24.972214,67.256374&amp;q=DAMBA%20Goth%D8%8C%20Super%20Hwy%20Link%2C%20Malir%20Cantonment%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2075400+(Coco%20farmhouse)&amp;ie=UTF8&amp;t=k&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            <a href="https://www.maps.ie/coordinates.html">find my location</a></iframe></div>


                            <?php foreach ($farmhouse_data as  $value) { ?>
                            <?php
                            foreach ($packagemaster as $pack) :
                                if ($pack['PackageID'] == $value['package_id']) :
                            ?>

                        <?php
                                endif;
                            endforeach;
                        } ?>
                        <div class="section property-features">
                          <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <h4 class="s-property-title"> <strong>Location</strong></h4>
                            <strong class="property_content_para"> <span class="location_style">Only 20 minutes drive from Soharab Goath & Airport, 4 km from Karachi Toll Plaza,
                                1 km from Wadi-e-Hussain Graveyard, <br> Mashallah Hotel's Street, Dumba Goath, Main Super Highway, Karachi.</span>
                            </strong>
                          </div>
</div>
                        </div>
                            <!-- End features area  -->
                            <?php foreach ($farmhouse_videos as  $value) { ?>
                                <div class="section property-video">
                                <h4 class="s-property-title">Property Video</h4>
                                <div class="video-thumb" style="width:50%!important">
                                    <a class="video-popup" title="Virtual Tour">
                                        <?php echo $value['Video_link']; ?>

                                    </a>
                                </div>
                                </div>
                                <?php
                            }?>
                                <!-- End video area  -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p0 farmhouse_detalis_2">
                        <aside class="sidebar sidebar-property blog-asside-right property-style2">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                <div class="clear">
                                <div class="col-xs-4 col-sm-4 dealer-face">
                                            <a href="">
                                              <!--   <img src="<?php echo base_url(); ?>public/assets/img/img_avatar.png" class="img-circle"> -->
                                            </a>
                                        </div>
                                        <ul class="dealer-contacts">
                                        <div class="col-xs-12 col-sm-12 ">
                                            <h3 class="dealer-name">
                                                <a href=""><?php echo $farmhouse_data[0]['ContactPerson']; ?></a><br>
                                                  </h3>
                                              <p>  <span class="farm_delaer"><?php echo $farmhouse_data[0]['Name']; ?></span></p>

                                            <div class="dealer-social-media">
                                                <a class="twitter" target="_blank" href="https://twitter.com/coco_farm">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="facebook" target="_blank" href="https://www.facebook.com/Thecocofarmhouse/">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="gplus" target="_blank" href="https://www.youtube.com/watch?v=mnI83k4-I-c">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                                <a class="youtube" target="_blank" href="https://www.youtube.com/watch?v=mnI83k4-I-c">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                                <a class="instagram" target="_blank" href="https://www.instagram.com/cocofarmhouse/">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                      </ul>
                                            <!-- <li><i class="pe-7s-map-marker strong"> </i> </li> -->

                                            <i class="fa fa-envelope" style="color:black;" >
                                             </i>  <?php echo $farmhouse_data[0]['Email']; ?>
<br>
                                            <i class="fa fa-phone " style="color:black;" >
                                            </i>  <span class="farm_con1"><?php echo $farmhouse_data[0]['ContactNo']; ?></span>
<br><br>
                                        <p> <?php echo $farmhouse_data[0]['Description']; ?> </p>
                                    </div>
                                </div>
                                        </div>

                                        <div class="clear">

                                        </div>
                                        <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                                <div class=" col-12 panel-heading">
                                    <h3 class="panel-title">Similar Farmhouse</h3>
                                </div>
                                <div class="panel-body search-widget">
                                <div class="panel-body recent-property-widget">
                                <ul>
                                    <?php foreach ($farmhouse_all_data as $key => $value) { ?>
                                        <li>
                                            <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>">
                                                <div class="col-md-3 blg-thumb p0">
                                                    <img src="<?php echo base_url() . 'public/assets/img/farmhouses/' . $value['Logo']; ?>">
                                                </div>
                                                <div class="col-md-8 blg-entry">
                                                    <h6 class="farm_deatail_farm"<?php if ($this->uri->segment(2) == $value['HouseID']) {
                                                                    echo "color:black;text-decoration: underline;";
                                                                } ?>><?php echo $value['Name']; ?></h6>
                                                    <span class="property-price">Rs:<?php echo number_format($value['Rent']); ?>&nbsp;<i class="pe-7s-home"></i></span>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="lightbox">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" id="packages">
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger modal_button" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal fade bookbypckg" id="bookbypckg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal_contant_advanceS">
                <div class="modal-header  header_modal" >
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title modal_title_c" id="myModalLabel">Check Availability</h4>
                </div>




                <div class="modal-body" id="moodal">
                    <div class="container-fliud">
                        <form action="<?php echo base_url('check'); ?>" class=" form-inline" method="post">
                            <div class="row advance new-cls-clss-uz not_same">
                                 <div class="form-group pckg">
                                    <label for="ArrivalDate">Time Slot</label>
                                    <select id="lunchBegins" name="timeslot" id="timeslot" class="form-control timeslot timeslot4" title="Select your Timing" required>
                                        <option selected value="">Select your time</option>
                                        <option value="09-Hours (8AM to 5PM)">09-Hours (8AM to 5PM)</option>
                                        <option value="11-Hours (8PM to 7AM)">11-Hours (8PM to 7AM)</option>
                                        <option value="21-Hours (8PM to 5PM)">21-Hours (8PM to 5PM)</option>
                                    </select>
                                </div>
                                <div class="form-group pckg">
                                    <label for="ArrivalDate">ArrivalDate</label>
                                    <input type="date" name="ArrivalDate" id="ArrivalDate" class="datepicker form-control" placeholder="DD/MM/YYYY" required>
                                </div>
                                <div class="form-group pckg">
                                    <label for="ArrivalDate">DepartureDate</label>
                                    <input type="date" class="form-control" placeholder="Key word" name="DepartureDate" id="DepartureDate" required>
                                </div>

                                <div class="form-group pckg">
                                    <label for="housename">HouseName</label>
                                    <select class="form-control housename3" id="housename3" name="HouseName" style="width: 106%;">
                                        <?php
                                        foreach ($farmhouse_data as $farm) {
                                            foreach ($packagemaster as $pack) :
                                                if ($pack['PackageID'] == $farm['package_id']) :
                                        ?>

                                                       <option value="0"style="display: none"> Booking </option>
                                                    <option value="<?php echo $farm['Name']; ?>"><?php echo $farm['Name']; ?></option>

                                        <?php
                                                endif;
                                            endforeach;
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group extra" style="margin-left: 8px !important;">
                                    <label for="Adults" id="myid1">
                                        Adults
                                    </label>
                                    <input type="number" class="form-control" placeholder="upto" name="upto" id="upto1" readonly style="display:none;">
                                    <input type="number" class="form-control" placeholder="capacity" name="capacity" id="capacity1" readonly style="display:none;">
                                    <input type="number" class="form-control" placeholder="Adults" name="Adults" id="Adults1" required>
                                </div>
                                <div class="form-group pckg">
                                    <label for="Childs">Childs</label>
                                    <input type="number" class="form-control" placeholder="Childs" name="childs" required />
                                </div>
                                <div class="form-group pckg">
                                    <label>Booking For:</label>
                                    <select name="BookingFor" id="bookingFor" class="form-control" title="Booking For">
                                         <option value="0" style="display: none">Select Booking </option>
                                        <?php foreach ($bookingfor as $value) { ?>
                                            <option value="<?php echo $value['BookingFor']; ?>"><?php echo $value['BookingFor']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                             <div class="form-group ">
                                    <button  type="submit" class="btn search-btn" style="margin-top:31px;" ><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer advance">

                </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>


        <?php $this->load->view('includes/footer');?>
<script type="text/javascript">
        $(document).ready(function() {
            $('.viewpack').click(function() {
                var package_id = $(this).attr("id");
                // $('#lightbox').modal("show");
                $.ajax({
                    url: "<?php echo base_url(); ?>test2",
                    method: "post",
                    data: {
                        package_id: package_id
                    },
                    success: function(data) {
                        $('#packages').html(data);
                        $('#lightbox').modal("show");
                    }
                });
            });
            let select = $('#bookingFor').val();
    // alert(select);
    if(select == 0){
      $('#button_search').hide();

    }
    $('#bookingFor').on('change',function(){

      $('#button_search').fadeIn('slow');
    });
        });
    </script>
