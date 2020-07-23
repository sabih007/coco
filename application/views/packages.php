<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title" style="color:white;">Packages</h1>
            </div>
        </div>
    </div>
</div>
<div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
    <div class=" pagewi">
        <div class="clearfix">
            <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
                <div class="container">
                    <?php
                        $URL1 = $this->uri->segment(2);
                        $URL2 = str_replace("_", " ", $URL1);
                        $shortname = $URL2;
                        foreach ($package as $pack) {
                            if ($shortname == $pack['shortname']) {
                                //echo $pack['PackageID'];
                    ?>
                                <input type="text" id="PackageID" class="PackageID" value="<?php echo $pack['PackageID']; ?>" style="display:none">
                    <?php
                            }
                        }
                    ?>

                    <!-- Farmhouse Name -->
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title package_titile_2">
                            <h2> <?php echo $shortname; ?> <b> Package </b></h2>
                            <br>
                        </div>
                    </div>
                    <!-- End farmhouse name -->

                    <!-- Show Packages -->
                    <div class="card" style="background: white;">

                        <div class="card-header">
                                    <div class="item">
                                        <div>
                                             <?php foreach($farmhouse_image as $fmg){ ?>
   <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $fmg['Logo']; ?>" alt="" class="image_package">
<?php }?>
                                        <!-- <div class="ribbon"><span>

                                                <?php print_r($packagesbyname[0]['discount']);  ?>% OFF

                                            </span></div> -->
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
                    <div class="body-nest">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table m-b-0 table-bordered text-center table-responsive">
                            <thead class="thead">
                                <tr>
                                <tr>
                                    <th class="weekday" colspan="3" scope="colgroup" style="text-align: center; color:#fff; background: #860A08;border: 1px solid #860a08;">
                                        <b>WORKING DAYS (Upto 70%
                                            OFF)</b>
                                    </th>
                                    <th class="frisat" colspan="3" scope="colgroup" style="text-align: center; color:#fff; background: #860A08;border: 1px solid #860a08;">FRIDAY TO SATURDAY<span> (Upto 60%
                                            OFF)</span></th>
                                    <th class="weekend" colspan="3" scope="colgroup" style="text-align: center; color:#fff; background: #860A08;border: 1px solid #860a08;">SATURDAY TO SUNDAY<span> (Upto
                                            50%
                                            OFF}</span></th>
                                </tr>
                                <tr>
                                    <th class="fx tblecolorth" colspan="3" style="text-align: center;">MON TO THU</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup" style="text-align: center;">FRI-NIGHT</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup" style="text-align: center;">SATURDAY</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup" style="text-align: center;">FRI-SAT</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup" style="text-align: center;">SAT-NIGHT</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup" style="text-align: center;">SUNDAY</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup" style="text-align: center;">SAT-SUN</th>
                                </tr>
                                <tr>
                                    <th class="fx tblecolorth" scope="col" style="text-align: center;">DAY (9Hrs) 8am to 5pm</th>
                                    <th class="fx tblecolorth" scope="col" style="text-align: center;">NIGHT (11Hrs) 8pm to 7am</th>
                                    <th class="fx tblecolorth" scope="col" style="text-align: center;">DAY-NIGHT (21Hrs)</th>
                                    <th class="fx tblecolorth" scope="col" style="text-align: center;">NIGHT (11Hrs) 8pm to 7am</th>
                                    <th class="fx tblecolorth" scope="col" style="text-align: center;">DAY (9Hrs) 8am to 5pm</th>
                                    <th class="fx tblecolorth" scope="col" style="text-align: center;">DAY-NIGHT (21Hrs)</th>
                                    <th class="fx tblecolorth" scope="col" style="text-align: center;">NIGHT (9Hrs) 8pm to 7am</th>
                                    <th class="fx tblecolorth" scope="col" style="text-align: center;">DAY (9Hrs) 8am to 5pm</th>
                                    <th class="fx tblecolorth" scope="col" style="text-align: center;">DAY-NIGHT (21Hrs)</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><b><?php print_r($packseventy[0]['Rates']); ?></b></td>
                                    <td><b><?php print_r($packseventy[1]['Rates']); ?></b></td>
                                    <td><b><?php print_r($packseventy[2]['Rates']); ?></td>
                                    <td><b><?php print_r($packsixty[0]['Rates']); ?></b></td>
                                    <td><b><?php print_r($packsixty[1]['Rates']); ?></b></td>
                                    <td><b><?php print_r($packsixty[2]['Rates']); ?></b></td>
                                    <td><b><?php print_r($packfifty[0]['Rates']); ?></b></td>
                                    <td><b><?php print_r($packfifty[1]['Rates']); ?></b></td>
                                    <td><b><?php print_r($packfifty[2]['Rates']); ?></b></td>
                                </tr>

                                <tr>
                                    <td><button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packseventy[0]['TimeSlot']); ?>">Book Now</button></td>
                                    <td><button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packseventy[1]['TimeSlot']); ?>">Book Now</button></td>
                                    <td><button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packseventy[2]['TimeSlot']); ?>">Book Now</button></td>
                                    <td><button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packseventy[0]['TimeSlot']); ?>">Book Now</button></td>
                                    <td><button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packsixty[1]['TimeSlot']); ?>">Book Now</button></td>
                                    <td><button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packsixty[2]['TimeSlot']); ?>">Book Now</button></td>
                                    <td><button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packfifty[0]['TimeSlot']); ?>">Book Now</button></td>
                                    <td><button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packfifty[1]['TimeSlot']); ?>">Book Now</button></td>
                                    <td><button class="btn btn-danger cls-uz-btn" data-toggle="modal" data-target="#bookbypckg" data-slotname="<?php print_r($packfifty[2]['TimeSlot']); ?>">Book Now</button></td>
                                </tr>


















                            </tbody>
                        </table>
                    </div>

                    <!-- <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <h5><strong>Note: </strong></h5>
                            </div>
                            <div class="col-md-9">
                                <p><strong>"Gazated Holiday"</strong> will be Count or Charge @ <strong>Weekend</strong>
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <h5><strong>Timings: </strong></h5>
                            </div>
                            <div class="col-md-9">
                                <p>* Day-9 Hrs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( 08:00am to
                                    05:00pm
                                    )<br>
                                    * Night-9 Hrs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( 08:00pm to 07:00am )<br>
                                    * Day-Night-9 Hrs ( 08:00pm to 05:00pm )</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5><strong>Persons: </strong></h5>
                            </div>
                            <div class="col-md-9">
                                <p>Extra Persons will be Charged @<strong> Rs.400/-</strong> Per Head cost.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5><strong>Advance Booking Payments: </strong></h5>
                            </div>
                            <div class="col-md-9">
                                <p><strong>"Minimum 50%"</strong> Amount will be Accepted at the time of booking.
                                    Balance 50%
                                    7days before booking.<br>
                                    <strong>**Rates can be changed without any period Notice. Shall not effect on booked
                                        farm.<br>**Force majeure condition apply and need client's cooperation.</strong>
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>






                    </div>
                    <!-- End packages code -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- modal -->
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
