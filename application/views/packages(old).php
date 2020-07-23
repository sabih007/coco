
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title" style="color:white;">Packages</h1>
            </div>
        </div>
    </div>
</div>
<div class="content-area single-property " style="background-color: #FCFCFC;">&nbsp;
    <div class=" pagewi">
        <div class="clearfix">
            <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
                <div class="container ">
                    <?php
                    $URL1 = $this->uri->segment(2);

                    $URL2 = str_replace("_", " ", $URL1);
                    $shortname = $URL2;
                    foreach ($package as $pack) {
                        if ($shortname == $pack['shortname']) {
                            //echo $pack['PackageID']; 
                            ?>
                            <input type="text" id="PackageID" class="PackageID" value="<?php echo $pack['PackageID']; ?>" style="display:none">
                    <?php  }
                    }  ?>

                    <div class="row content_area_4">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title pack_tt1">
                            <h2 > <?php echo $shortname; ?> <b> Package </b></h2>
                            <br>
                        </div>
                    </div>
<div class="container-fluid">
                    <div class="row ">
 <?php foreach($farmhouse_image as $fmg){ ?>
                        <!-- 70 % card -->

                        <div class="col-md-4">
                               <h2 style="text-align: center; font-weight:800;color:#860a08;">   <?php print_r($packseventy[0]['WeekDays']); ?></h2>
                            <div class="card card_s">
                                <div class="card-header">
                                    <div class="item">
                                        <div>
                                            
   <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $fmg['Logo']; ?>" alt="" class="image_package">
<?php }?>
                                        <div class="ribbon"><span>

                                                <?php print_r($packagesbyname[0]['discount']);  ?>% OFF

                                            </span></div>
                                        </div>
                                        <!-- <div class="client-text ib-cls-rw SilverFritoSat btop"> -->
                                           <!--  <p class="round-uz-class-clss" style="font-size: 16px !important;">
                                                <?php echo $shortname; ?> Package </p> -->
  
                                       <!--      <div class="ribbon"><span>

                                                <?php print_r($packagesbyname[0]['discount']);  ?>% OFF

                                            </span></div>
                                        </div> -->
                                        <div class="client-face wow fadeInRight" data-wow-delay=".9s">

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs Package_tab" style="display: flex;" role="tablist" id="myTab<?php //echo $id; 
                                                                                                            ?>">
      <li class="active"><a href="#previousIssue<?php  //echo $id;
     ?>" role="tab" data-toggle="tab">Day</a></li>
 
                                
                                        <li><a href="#currentIssue<?php //echo $id; 
                                                                    ?>" role="tab" data-toggle="tab">Night</a></li>
                                        <li><a href="#nextIssue<?php //echo $id; 
                                                                ?>" role="tab" data-toggle="tab">Day/Night</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content package_tab_content">
                                        <div class="tab-pane active" id="previousIssue<?php //echo $id; 
                                                                                        ?>">
                                            <!-- <?php print_r($packagesbyname[0]['discount']); ?>% -->
                                            <!-- </p> -->
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Rs <?php print_r($packseventy[0]['Rates']); ?>
                                                <li class="list-group-item">
                                                    <?php print_r($packseventy[0]['TimeSlot']); ?>
                                                </li>
                                              <!--   <li class="list-group-item">
                                                    <?php print_r($packseventy[0]['WeekDays']); ?>
                                                </li> -->
                                                <li class="list-group-item list_item_footer">
                                                    <div class="card-footers  bbtm">
                                                        <button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packseventy[0]['TimeSlot']); ?>">Book Now</button>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="currentIssue<?php //echo $id; 
                                                                                ?>">
                                            <!-- <?php print_r($packagesbyname[0]['discount']); ?>% -->
                                            <!-- </p> -->
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Rs <?php print_r($packseventy[1]['Rates']); ?>
                                                <li class="list-group-item">
                                                    <?php print_r($packseventy[1]['TimeSlot']); ?>
                                                </li>
                                              <!--   <li class="list-group-item">
                                                    <?php print_r($packseventy[1]['WeekDays']); ?>
                                                </li> -->
                                                <li class="list-group-item list_item_footer">
                                                    <div class="card-footers  bbtm">
                                                        <button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packseventy[1]['TimeSlot']); ?>">Book Now</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="nextIssue<?php //echo $id; 
                                                                            ?>">
                                    <!-- <?php print_r($packagesbyname[0]['discount']); ?>% -->
                                            <!-- </p> -->
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Rs <?php print_r($packseventy[2]['Rates']); ?>
                                                <li class="list-group-item">
                                                    <?php print_r($packseventy[2]['TimeSlot']); ?>
                                                </li>
                                               <!--  <li class="list-group-item">
                                                    <?php print_r($packseventy[2]['WeekDays']); ?>
                                                </li> -->
                                                <li class="list-group-item list_item_footer">
                                                    <div class="card-footers">
                                                        <button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packseventy[2]['TimeSlot']); ?>">Book Now</button>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- 70 % card -->

                        <!-- 60 % card -->
                        <div class="col-md-4">
                            <h2 style="text-align: center;  font-weight:800;color:#860a08; ">  <?php print_r($packsixty[0]['WeekDays']); ?></h2>
                            <div class="card card_s">
                                <div class="card-header">
                                    <div class="item">
                                      <!--   <div class="client-text ib-cls-rw SilverFritoSat btop">
                                            <p class="round-uz-class-clss" style="font-size: 16px !important;">
                                                <?php echo $shortname; ?> Package </p>
                                            <div class="ribbon"><span><?php print_r($packagesbyname[1]['discount']);  ?>% OFF</span></div>
                                        </div> -->
                                             <div>
                                             <?php foreach($farmhouse_image as $fmg){ ?>
   <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $fmg['Logo']; ?>" alt="" class="image_package">
<?php }?>
                                        <div class="ribbon"><span>

                                                <?php print_r($packagesbyname[1]['discount']);  ?>% OFF

                                            </span></div>
                                        </div>
                                        <div class="client-face wow fadeInRight" data-wow-delay=".9s">

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs Package_tab" style="display: flex;" role="tablist" id="myTab1">
                                        <li class="active"><a href="#previousIssue1" role="tab" data-toggle="tab">Day</a></li>
                                        <li><a href="#currentIssue1" role="tab" data-toggle="tab">Night</a></li>
                                        <li><a href="#nextIssue1" role="tab" data-toggle="tab">Day/Night</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content package_tab_content">
                                        <div class="tab-pane active" id="previousIssue1">
                                            <!-- <?php print_r($packagesbyname[1]['discount']); ?>% -->
                                            <!-- </p> -->
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Rs <?php print_r($packsixty[0]['Rates']); ?>
                                                <li class="list-group-item">
                                                    <?php print_r($packsixty[0]['TimeSlot']); ?>
                                                </li>
                                               <!--  <li class="list-group-item">
                                                    <?php print_r($packsixty[0]['WeekDays']); ?>
                                                </li> -->
                                                <li class="list-group-item list_item_footer">
                                                    <div class="card-footers  bbtm">
                                                        <button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packsixty[0]['TimeSlot']); ?>">Book Now</button>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="currentIssue1">
                                           <!--  <?php print_r($packagesbyname[1]['discount']); ?>% -->
                                            <!-- </p> -->
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Rs <?php print_r($packsixty[1]['Rates']); ?>
                                                <li class="list-group-item">
                                                    <?php print_r($packsixty[1]['TimeSlot']); ?>
                                                </li>
                                              <!--   <li class="list-group-item">
                                                    <?php print_r($packsixty[1]['WeekDays']); ?>
                                                </li> -->
                                                <li class="list-group-item list_item_footer">
                                                    <div class="card-footers  bbtm">
                                                        <button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname=" <?php print_r($packsixty[1]['TimeSlot']); ?>">Book Now </button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="nextIssue1">
                                           <!--  <?php print_r($packagesbyname[1]['discount']); ?>% -->
                                            <!-- </p> -->
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Rs <?php print_r($packsixty[2]['Rates']); ?>
                                                <li class="list-group-item">
                                                    <?php print_r($packsixty[2]['TimeSlot']); ?>
                                                </li>
                                               <!--  <li class="list-group-item">
                                                    <?php print_r($packsixty[2]['WeekDays']); ?>
                                                </li> -->
                                                <li class="list-group-item list_item_footer">
                                                    <div class="card-footers   bbtm">
                                                        <button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packsixty[2]['TimeSlot']); ?>">Book Now</button>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                </div>
                            </div>
                                  <div class="col-md-4">
                            <h2 style="text-align: center;  font-weight:800;color:#860a08; ">  <?php print_r($packsixty[0]['WeekDays']); ?></h2>
                            <div class="card card_s">
                                <div class="card-header">
                                    <div class="item">
                                      <!--   <div class="client-text ib-cls-rw SilverFritoSat btop">
                                            <p class="round-uz-class-clss" style="font-size: 16px !important;">
                                                <?php echo $shortname; ?> Package </p>
                                            <div class="ribbon"><span><?php print_r($packagesbyname[1]['discount']);  ?>% OFF</span></div>
                                        </div> -->
                                             <div>
                                             <?php foreach($farmhouse_image as $fmg){ ?>
   <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $fmg['Logo']; ?>" alt="" class="image_package">
<?php }?>
                                        <div class="ribbon"><span>

                                                <?php print_r($packagesbyname[1]['discount']);  ?>% OFF

                                            </span></div>
                                        </div>
                                        <div class="client-face wow fadeInRight" data-wow-delay=".9s">

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs Package_tab" style="display: flex;" role="tablist" id="myTab1">
                                        <li class="active"><a href="#previousIssue1" role="tab" data-toggle="tab">Day</a></li>
                                        <li><a href="#currentIssue1" role="tab" data-toggle="tab">Night</a></li>
                                        <li><a href="#nextIssue1" role="tab" data-toggle="tab">Day/Night</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content package_tab_content">
                                        <div class="tab-pane active" id="previousIssue1">
                                            <!-- <?php print_r($packagesbyname[1]['discount']); ?>% -->
                                            <!-- </p> -->
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Rs <?php print_r($packsixty[0]['Rates']); ?>
                                                <li class="list-group-item">
                                                    <?php print_r($packsixty[0]['TimeSlot']); ?>
                                                </li>
                                               <!--  <li class="list-group-item">
                                                    <?php print_r($packsixty[0]['WeekDays']); ?>
                                                </li> -->
                                                <li class="list-group-item list_item_footer">
                                                    <div class="card-footers  bbtm">
                                                        <button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packsixty[0]['TimeSlot']); ?>">Book Now</button>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="currentIssue1">
                                           <!--  <?php print_r($packagesbyname[1]['discount']); ?>% -->
                                            <!-- </p> -->
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Rs <?php print_r($packsixty[1]['Rates']); ?>
                                                <li class="list-group-item">
                                                    <?php print_r($packsixty[1]['TimeSlot']); ?>
                                                </li>
                                              <!--   <li class="list-group-item">
                                                    <?php print_r($packsixty[1]['WeekDays']); ?>
                                                </li> -->
                                                <li class="list-group-item list_item_footer">
                                                    <div class="card-footers  bbtm">
                                                        <button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname=" <?php print_r($packsixty[1]['TimeSlot']); ?>">Book Now </button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="nextIssue1">
                                           <!--  <?php print_r($packagesbyname[1]['discount']); ?>% -->
                                            <!-- </p> -->
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Rs <?php print_r($packsixty[2]['Rates']); ?>
                                                <li class="list-group-item">
                                                    <?php print_r($packsixty[2]['TimeSlot']); ?>
                                                </li>
                                               <!--  <li class="list-group-item">
                                                    <?php print_r($packsixty[2]['WeekDays']); ?>
                                                </li> -->
                                                <li class="list-group-item list_item_footer">
                                                    <div class="card-footers   bbtm">
                                                        <button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packsixty[2]['TimeSlot']); ?>">Book Now</button>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                </div>


                        <!-- 60 % card -->

                        <!-- 50 % card -->

                        <!-- 50 % card -->

                



<!-- <div>
    <?php foreach($farmhouse_image as $fmg){ ?>
   <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $fmg['Logo']; ?>" alt="" class="img-rounded">
<?php }?>
</div> -->

<div class="modal fade bookbypckg" id="bookbypckg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal_contant_advanceS">
                <div class="modal-header  header_modal" >
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title modal_title_c" id="myModalLabel">Check Availability</h4>
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
                </div>
                <div class="modal-footer advance">

                </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
