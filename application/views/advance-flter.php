<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title" style="color: white;">Farmhouse Booking</h1>
            </div>
        </div>
    </div>
</div>
<div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">
        <div class="clearfix"></div>
        <!-- <div class="row new-rw-cls-uz search-form wow pulse animated" style="background-color:#fff;">
                <div class="search-form wow pulse" data-wow-delay="0.8s">
                    <form action="<?php echo base_url('check'); ?>" class=" form-inline" method="post">
                        <div class="form-group">
                            <input type="date" value="<?php echo empty($postdata['ArrivalDate']) ? "" : $postdata['ArrivalDate']; ?>" name="ArrivalDate" class="form-control" placeholder="Key word" required>
                        </div>
                        <div class="form-group">
                            <input type="date" value="<?php echo empty($postdata['DepartureDate']) ? "" : $postdata['DepartureDate']; ?>" class="form-control" placeholder="Key word" name="DepartureDate" required>
                        </div>
                        <div class="form-group">
                            <select id="lunchBegins" name="HouseName" class="selectpicker" title="Select your city" required>
                                <?php foreach ($farmhouse as  $value) { ?>
                                    <option <?php if ($postdata['HouseName'] == $value['Name']) echo 'selected'; ?> value="<?php echo $value['Name']; ?>"><?php echo $value['Name']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="lunchBegins" name="timeslot" class="selectpicker" title="Select your city" required>
                                <option <?php if ($postdata['timeslot'] == "8AM to 5PM") echo 'selected'; ?> value="8AM to 5PM">8AM to 5PM</option>
                                <option <?php if ($postdata['timeslot'] == "8PM to 7AM") echo 'selected'; ?> value="8PM to 7AM">8PM to 7AM</option>
                                <option <?php if ($postdata['timeslot'] == "21 Hours") echo 'selected'; ?> value="21 Hours">21 Hours</option>
                            </select>
                        </div>
                        <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div> -->
        <div class="row">
            <div class="col-md-12  padding-top-40 properties-page">
                <div class="col-md-12 ">
                    <div id="list-type" class="proerty-th-list">
                        <!--<pre>
                            <?php print_r($advance); ?>
                            <?php print_r($discountrate); ?></pre> -->
                        <?php
                        $i = 0;
                        foreach ($advance as $key => $value) { ?>
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>">
                                            <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $value['Logo']; ?>" alt=""></a>
                                    </div>
                                    <div class="item-entry overflow">
                            <form action="<?php echo base_url('booking'); ?>" class=" form-inline" method="post">
                                            <!-- <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button> -->
                                            <div class="form-group" style="display: none !important;">
                                                <input type="date" value="<?php echo empty($postdata['ArrivalDate']) ? "" : $postdata['ArrivalDate']; ?>" name="ArrivalDate" class="form-control" placeholder="Key word" required>
                                            </div>
                                        <div class="form-group" style="display: none !important;">
                                                <input type="date" value="<?php echo empty($postdata['DepartureDate']) ? "" : $postdata['DepartureDate']; ?>" class="form-control" placeholder="Key word" name="DepartureDate" required>
                                            </div>
                                            <div class="form-group" style="display: none !important;">
                                                <input type="text" value="<?php echo empty($postdata['BookingFor']) ? "" : $postdata['BookingFor']; ?>" class="form-control" placeholder="Key word" name="BookingFor" required>
                                            </div>
                                            <div class="form-group" style="display: none !important;">
                                                <input type="number" value="<?php echo empty($postdata['Adults']) ? "" : $postdata['Adults']; ?>" class="form-control" placeholder="Key word" name="Adults" required>
                                            </div>
                                            <div class="form-group" style="display: none !important;">
                                                <input type="number" value="<?php echo empty($postdata['childs']) ? "" : $postdata['childs']; ?>" class="form-control" placeholder="Key word" name="childs" required>
                                            </div>



                                            <div class="form-group" style="display: none !important;">
                                                <select id="lunchBegins" name="HouseName" class="selectpicker" title="Select your city" required style="visibility:none;">
                                                    <option selected value="<?php echo $value['Name']; ?>"><?php echo $value['Name']; ?></option>
                                                </select>
                                            </div>
                                            <div class="form-group" style="display: none !important;">
                                                <select hidden id="lunchBegins" name="timeslot" class="selectpicker" title="Select your city" required>
                                                    <option <?php if ($postdata['timeslot'] == "8AM to 5PM") echo 'selected'; ?> value="8AM to 5PM">8AM to 5PM</option>
                                                    <option <?php if ($postdata['timeslot'] == "8PM to 7AM") echo 'selected'; ?> value="8PM to 7AM">8PM to 7AM</option>
                                                    <option <?php if ($postdata['timeslot'] == "21 Hours") echo 'selected'; ?> value="21 Hours">21 Hours</option>
                                                </select>
                                            </div>

                                            <h5>
                                                <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>"><?php echo $value['HouseName']; ?></a>
                                                <span class="pull-right">Actual Rates :Rs <?php echo $value['ActuallRates']; ?> </span>
                                            </h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b>Capacity : </b>
                                                <?php echo $value['Capacity']; ?> <i class="pe-7s-users"></i></span>
                                            <span class="proerty-price pull-right"><strong>Discounted Amount RS:
                                                    <?php print_r($discountrate[$i][0]['Rates']); ?>/-</strong><i class="pe-7s-home"></i></span>
                                            <br>
                                            <span class="pull-left"><b>Facility / Acitivity: </b>
                                                <?php echo $value['Activities']; ?> <i class="pe-7s-users"></i></span>
                                            <p style="display: none;"><?php echo $value['Description']; ?>
                                            </p>
                                            <input type="submit" name="submit" class="btn btn-danger avaliable_button pull-right" value="Book Now">
                                            <p style="display: none; padding:0 !important;">
                                                <?php foreach ($facilities_info as $key => $value) { ?>
                                                    <span class="property-info-icon icon-bed">
                                                        <img src="<?php echo base_url(); ?>public/assets/img/icon/<?php echo $value['Facilities']; ?>.png">
                                                    </span>
                                                <?php  } ?>
                                            </p>

                                            <p style="display: none; ">
                                                <strong> Available For Booking </strong></p>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        <?php
                            $i++;
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>