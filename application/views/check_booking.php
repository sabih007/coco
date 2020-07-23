<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Farmhouse Booking</h1>
            </div>
        </div>
    </div>
</div>

<div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">
        <div class="clearfix"></div>


        <?php
        if ($msg == 'Yes Avilable') {

            foreach ($farmhouse as $value) {
                if ($postdata['HouseName'] == $value['Name']) { ?>
                    <div class="col-md-12  padding-top-40 properties-page">
                        <div class="col-md-12 ">
                            <div id="list-type" class="proerty-th-list">
                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>">
                                                <img  class="booked_image"src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $value['Logo']; ?>" alt=""></a>
                                        </div>
                                        <div class="item-entry overflow">
                                            <form action="<?php echo base_url('booking'); ?>" class=" form-inline" method="post">
                                                <!-- <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button> -->
                                                <div class="form-group" style="display: none !important;">
                                                    <!-- <option value="09-Hours (8AM to 5PM)">09-Hours (8AM to 5PM)</option>
                                <option value="11-Hours (8PM to 7AM)">11-Hours (8PM to 7AM)</option>
                                <option value="21-Hours (8PM to 5PM)">21-Hours (8PM to 5PM)</option> -->
                                                    <select hidden id="lunchBegins" name="timeslot" class="selectpicker" title="Select your city" required>
                                                        <option <?php if ($postdata['timeslot'] == "09-Hours (8AM to 5PM)") echo 'selected'; ?> value="09-Hours (8AM to 5PM)">09-Hours (8AM to 5PM)</option>
                                                        <option <?php if ($postdata['timeslot'] == "11-Hours (8PM to 7AM)") echo 'selected'; ?> value="11-Hours (8PM to 7AM)">11-Hours (8PM to 7AM)</option>
                                                        <option <?php if ($postdata['timeslot'] == "21-Hours (8PM to 5PM)") echo 'selected'; ?> value="21-Hours (8PM to 5PM)">21-Hours (8PM to 5PM)</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" style="display: none !important;">
                                                    <input type="date" value="<?php echo empty($postdata['ArrivalDate']) ? "" : $postdata['ArrivalDate']; ?>" name="ArrivalDate" class="form-control" placeholder="Key word" required>
                                                </div>
                                                <div class="form-group" style="display: none !important;">
                                                    <input type="date" value="<?php echo empty($postdata['DepartureDate']) ? "" : $postdata['DepartureDate']; ?>" class="form-control" placeholder="Key word" name="DepartureDate" required>
                                                </div>
                                                <div class="form-group" style="display: none !important;">
                                                    <select id="lu  nchBegins" name="HouseName" class="selectpicker" title="Select your city" required style="visibility:none;">
                                                        <option selected value="<?php echo $value['Name']; ?>"><?php echo $value['Name']; ?></option>
                                                    </select>
                                                </div>

                                                <div class="form-group" style="display: none !important;">
                                                    <select hidden id="BookingFor" name="BookingFor" class="selectpicker" title="Select your city" required>
                                                         <option value="0"style="display: none">Select Booking </option>
                                     <option <?php if ($postdata['BookingFor'] == "Birthday Party") echo 'selected'; ?> value="Birthday Party">Office</option>

                                          <option <?php if ($postdata['BookingFor'] == "Office") echo 'selected'; ?> value="Office">Office</option>
                                                        <option <?php if ($postdata['BookingFor'] == "Party") echo 'selected'; ?> value="Party">Party</option>
                                                        <option <?php if ($postdata['BookingFor'] == "Family") echo 'selected'; ?> value="Family">Family</option>
                                                        <option <?php if ($postdata['BookingFor'] == "Married Coupels") echo 'selected'; ?> value="Married Coupels">Married Coupels</option>
                                                        <option <?php if ($postdata['BookingFor'] == "Music Festival") echo 'selected'; ?> value="Music Festival">Music Festival</option>
                                                        <option <?php if ($postdata['BookingFor'] == "Office Colleague") echo 'selected'; ?> value="Office Colleague">Office Colleague</option>
                                                        <option <?php if ($postdata['BookingFor'] == "School") echo 'selected'; ?> value="School">School</option>
                                                        <option <?php if ($postdata['BookingFor'] == "University") echo 'selected'; ?> value="University">University</option>
                                                        <option <?php if ($postdata['BookingFor'] == "Friends (Boys Only)") echo 'selected'; ?> value="Friends (Boys Only)">Friends (Boys Only)</option>
                                                        <option <?php if ($postdata['BookingFor'] == "Corporate") echo 'selected'; ?> value="Corporate">Corporate</option>
                                                    </select>
                                                </div>
                                                <input type="text" value="<?php echo $postdata['childs']; ?>" class="form-control" placeholder="Key word" name="childs" required style="display: none !important;">
                                                <h5>
                                                    <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>"><?php echo $value['Name']; ?>&nbsp;
                                                        <span class="pull-right">Actual Rates :Rs
                                                            <?php echo $value['Rent']; ?>/-</span></a>
                                                </h5>
                                                <div class="dot-hr"></div>
                                                <span class="pull-left"><b>Capacity : </b>
                                                    <?php echo $value['Capacity']; ?> <i class="pe-7s-users"></i></span>
                                                <span class="proerty-price pull-right"><strong>Discounted Amount Rs:
                                                        <?php echo  $discountrate[0]['Rates'] . '/-</br> For ' . $postdata['upto'] . ' Persons'; ?> </strong></span>
                                                <br>
                                                <span class="pull-left"><b>BookingFor</b>
                                                    <?php echo $postdata['BookingFor']; ?>/-</span>
                                                </br>
                                                <span class="pull-left"><b>Adults :</b>
                                                    <?php echo $postdata['Adults']; ?></span>
                                                </br>
                                                <input type="text" value="<?php echo $postdata['Adults']; ?>" class="form-control" placeholder="Key word" name="Adults" required style="display: none !important;">
                                                <?php
                                                    $Capacity = explode('-', $value['Capacity']);

                                                    $Capacity_no = json_decode($Capacity[1], true);
                                               $Adults_no = json_decode($postdata['Adults'], true);
                                               $childs_no = json_decode($postdata['childs'], true);
                                               $upto_no = json_decode($postdata['upto'], true);


                             if($postdata['BookingFor'] ==  "School"){
                            $TotalPerson = $Adults_no+$childs_no;
                             }
                             else{
                            $TotalPerson = $Adults_no;
                             }


                        if ($TotalPerson > $upto_no ) {

                            $extra = $TotalPerson -  $upto_no; ?>
                        <input type="text" value="<?php echo $extra; ?>" class="form-control" placeholder="Key word" name="extra" required style="display: none !important;">
                        <?php $extrapay = $extra * 400;
                                        $total = $extrapay + $discountrate[0]['Rates']; ?>
                        <span class="proerty-price pull-right"><strong class="extrapay"> <?php echo $extra . " Persons Excced </br>Extra Charges:  Rs. " . $extrapay . "</br>Total Amount : Rs. " . $total; ?>
                            </strong></span>


                    <?php  } ?>


                <span class="pull-left"><b>Childs : </b>
                    <?php echo $postdata['childs']; ?> <i class="fa fa-users"></i></span></br>
                <span class="pull-left"><b>Extra Charge @ 400 <i class="fa fa-users"></i></span></br>
                <span class="pull-left" style="color:green;"><b> Available For Booking</span>
                <?php
                        $morethencapacity = $Adults_no  - $Capacity_no;
                            echo ($Adults_no  > $Capacity_no) ? '<p style="display: none; color: red;">Note : ' . $morethencapacity . ' Persons are More Then House Capacity Kindly Contact with Administration</p><input  type="text" value="' . $morethencapacity . '" class="form-control" placeholder="Key word" name="morethencapacity" required style="display:none ">' : '';
                ?>
                <p style="display: none;"><?php echo $value['Description']; ?>
                </p>
                <p style=" padding:0 !important;" class="pull-left pull_left_a">
                    <?php foreach ($facilities_info as $key => $value) { ?>
                        <span class="property-info-icon icon-bed ">
                            <img  class="icon_farm_d"src="<?php echo base_url(); ?>public/assets/img/icon/<?php echo $value['Facilities']; ?>.png">
                        </span>
                    <?php  } ?>
                </p>
                <p  class="pull-right up">
                    <input type="submit" name="" class="btn btn-danger add_book_e" value="BookNow">

                                            </form>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php  }
                }
            }

            else { ?>
                 <p style="color: red;font-weight: bold;text-align: center;">Farm House Not Available Continue With Others.<span style="color: black;font-weight: bold;"> Thank You!</span></p>
            <div class="row new-rw-cls-uz search-form wow pulse animated" style="background-color:#fff;">
                <div class="search-form wow pulse" data-wow-delay="0.8s">
                    <form action="<?php echo base_url('check'); ?>" class=" form-inline" method="post">
                        <!-- <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button> -->
                        <div class="form-group not_booked">

                            <select id="lunchBegins" name="timeslot" class="selectpicker " title="Select Timeslot" required id="timeslot" >
                                <option  value="09-Hours (8AM to 5PM)">9 Hrs. (8AM to 5PM)</option>
                                <option  value="11-Hours (8PM to 7AM)">11 Hrs. (8PM to 7AM)</option>
                                <option  value="21-Hours (8PM to 5PM)">21 Hrs. (8PM to 5PM) </option>
                            </select>
                        </div>

                        <div class="form-group not_booked">
                            <input type="date" id="arr" value="<?php echo empty($postdata['ArrivalDate']) ? "" : $postdata['ArrivalDate']; ?>" name="ArrivalDate" class="form-control " placeholder="Key word" required>
                        </div>
                        <div class="form-group not_booked">
                            <input type="date" id="dep" value="<?php echo empty($postdata['DepartureDate']) ? "" : $postdata['DepartureDate']; ?>" class="form-control " placeholder="Key word" name="DepartureDate" required>
                        </div>
                        <div class="form-group not_booked">
                            <select id="lunchBegins" name="HouseName" class="selectpicker " title="Select your city"  required>
                                <?php foreach ($farmhouse as  $value) { ?>
                                    <option <?php if ($postdata['HouseName'] == $value['Name']) echo 'selected'; ?> value="<?php echo $value['Name']; ?>"><?php echo $value['Name']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                         <div class="form-group" style="display: none;">

                                <input type="number" class="form-control" value="<?php echo empty($postdata['childs']) ? "" : $postdata['childs']; ?>" name="childs" required>

                            </div>

                              <div class="form-group" style="display: none;">

                                <input type="number" class="form-control" value="<?php echo empty($postdata['Adults']) ? "" : $postdata['Adults']; ?>" name="Adults" required>

                            </div>



                            <div class="form-group" style="display: none;">

                                <input type="number" class="form-control" value="<?php echo empty($postdata['upto']) ? "" : $postdata['upto']; ?>" name="upto" required>

                            </div>


                            <div class="form-group" style="display: none;">
                                <label>Booking For:</label>
                                <select name="BookingFor" id="bookingFor" class="selectpicker" title="Booking For">
                                     <option value="0"style="display: none">Select Booking </option>

                            <option value="<?php echo $postdata['BookingFor']; ?>" selected><?php echo $postdata['BookingFor']; ?></option>

                                </select>
                            </div>




                        <button class="btn search-btn not_booked_button" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>





            <div class="row">

                <div class="col-md-12  padding-top-40 properties-page">
                    <div class="col-md-12 ">
                          <p style="color: black;font-weight: bold;text-align: left;font-size: 136%;">Farm Houses with currently selected timeslot.</p>
                        <div id="list-type" class="proerty-th-list">
                            <?php foreach ($farmhouse_all_data as $key => $value) { ?>
                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>">
                                                <img  class="booked_image"src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $value['Logo']; ?>" alt=""></a>
                                        </div>
                                        <div class="item-entry overflow">

                                              <form action="<?php echo base_url('check'); ?>" class=" form-inline" method="post">
                        <!-- <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button> -->

                        <div class="form-group" style="display: none;">

                            <select id="lunchBegins" name="timeslot" class="selectpicker" title="Select Timeslot" required id="timeslot" readonly>
                                <option  <?php if ($postdata['timeslot'] == "09-Hours (8AM to 5PM)") echo 'selected'; ?> value="09-Hours (8AM to 5PM)">9 Hrs. (8AM to 5PM)</option>
                                <option  <?php if ($postdata['timeslot'] == "11-Hours (8PM to 7AM)") echo 'selected'; ?> value="11-Hours (8PM to 7AM)">11 Hrs. (8PM to 7AM)</option>
                                <option  <?php if ($postdata['timeslot'] == "21-Hours (8PM to 5PM)") echo 'selected'; ?> value="21-Hours (8PM to 5PM)">21 Hrs. (8PM to 5PM) </option>
                            </select>
                        </div>
                        <div class="form-group" style="display: none;">
                            <input type="date" id="arr" value="<?php echo empty($postdata['ArrivalDate']) ? "" : $postdata['ArrivalDate']; ?>" name="ArrivalDate" class="form-control" placeholder="Key word" required>
                        </div>
                        <div class="form-group" style="display: none;">
                            <input type="date" id="dep" value="<?php echo empty($postdata['DepartureDate']) ? "" : $postdata['DepartureDate']; ?>" class="form-control" placeholder="Key word" name="DepartureDate" required>
                        </div>



                                                <div class="form-group" style="display: none;">
                                                    <select id="lunchBegins" name="HouseName" class="selectpicker" title="Select your city" required >
                                                        <option selected value="<?php echo $value['Name']; ?>"><?php echo $value['Name']; ?></option>
                                                    </select>
                                                </div>


                         <div class="form-group" style="display: none;">

                                <input type="number" class="form-control" value="<?php echo empty($postdata['childs']) ? "" : $postdata['childs']; ?>" name="childs" required>

                            </div>

                              <div class="form-group" style="display: none;">

                                <input type="number" class="form-control" value="<?php echo empty($postdata['Adults']) ? "" : $postdata['Adults']; ?>" name="Adults" required>

                            </div>



                            <div class="form-group" style="display: none;">

                                <input type="number" class="form-control" value="<?php echo empty($postdata['upto']) ? "" : $postdata['upto']; ?>" name="upto" required>

                            </div>


                            <div class="form-group" style="display: none;">
                                <label>Booking For:</label>
                                <select name="BookingFor" id="bookingFor" class="selectpicker" title="Booking For">

                            <option value="<?php echo $postdata['BookingFor']; ?>" selected><?php echo $postdata['BookingFor']; ?></option>

                                </select>
                            </div>
                            <h5>
                                                    <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>"><?php echo $value['Name']; ?></a>
                                                </h5>
                                                <div class="dot-hr"></div>
                                                <span class="pull-left"><b>Capacity : </b>
                                                    <?php echo $value['Capacity']; ?> <i class="pe-7s-users"></i></span>
                                                <span class="proerty-price pull-right"><strong>RS:
                                                        <?php echo $value['Rent']; ?> </strong><i class="pe-7s-home"></i></span>
                                                <p style="display: none;"><?php echo $value['Description']; ?>sdasdasd
                                                </p>
                                                <p style="display: none; padding:0 !important;">
                                                    <?php foreach ($facilities_info as $key => $value) { ?>
                                                        <span class="property-info-icon icon-bed">
                                                            <img src="<?php echo base_url(); ?>public/assets/img/icon/<?php echo $value['Facilities']; ?>.png" class="icons_faculty">
                                                        </span>
                                                    <?php  } ?>
                                                </p>
                                                <p style="display: none; ">
                                                    <strong> Available For Booking </strong></p>




                           <input style="margin-bottom: 2%; width:25%;" type="submit" name="" class="btn btn-danger btn-sm " value="Book Now">

                    </form>



                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php $this->load->view('includes/footer');?>
