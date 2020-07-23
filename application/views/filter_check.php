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
                            <?php foreach ($searchfilter as $key => $value) { ?>
                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>">
                                                <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $value['Logo']; ?>" alt=""></a>
                                        </div>
                                        <div class="item-entry overflow">
                                            <form action="<?php echo base_url('Booking'); ?>" class=" form-inline" method="post">
                                                <!-- <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button> -->
                                                <div class="form-group" style="display: none !important;">
                                                    <input type="date" value="<?php echo empty($postdata['ArrivalDate']) ? "" : $postdata['ArrivalDate']; ?>" name="ArrivalDate" class="form-control" placeholder="Key word" required>
                                                </div>
                                                <div class="form-group" style="display: none !important;">
                                                    <input type="date" value="<?php echo empty($postdata['DepartureDate']) ? "" : $postdata['DepartureDate']; ?>" class="form-control" placeholder="Key word" name="DepartureDate" required>
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
                                                    <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>"><?php echo $value['Name']; ?></a>
                                                </h5>
                                                <div class="dot-hr"></div>
                                                <span class="pull-left"><b>Capacity : </b>
                                                    <?php echo $value['Capacity']; ?> <i class="pe-7s-users"></i></span>
                                                <span class="proerty-price pull-right"><strong>RS:
                                                        <?php echo $value['Rent']; ?> </strong><i class="pe-7s-home"></i></span>
                                                <p style="display: none;"><?php echo $value['Description']; ?>sdasdasd
                                                </p>
                                                <p >
                                                    <?php foreach ($facilities_info as $key => $value) { ?>
                                                        <span  class="property-info-icon icon-bed ">
                                                            <img class="icon_available" src="<?php echo base_url(); ?>public/assets/img/icon/<?php echo $value['Facilities']; ?>.png">
                                                        </span>
                                                    <?php  } ?>
                                                </p>
                                                <p style="display: none; ">
                                                    <strong> Available For Booking </strong></p>

                                                    <input type="submit" name="" class="btn btn-danger " value=" BookNow">
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $this->load->view('includes/footer');?>