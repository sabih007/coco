
<!-- End of nav bar -->
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title " style="color:white;">Farmhouse Booking Process</h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->
<!-- property area -->
<div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">
        <div class="clearfix">
            <div class="wizard-container">
                <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                    <form id="forms" method="post" action="<?php echo base_url('booking_web'); ?>">
                        <div class="wizard-header">
                            <h3 class="book_head" >
                                <b>Submit</b> your Booking For Farmhouse <br>
                                <!-- <small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small> -->
                            </h3>
                        </div>
                        <ul>
                            <li><a href="#step1" data-toggle="tab">Step 1 </a></li>
                            <!-- <li><a href="#step2" data-toggle="tab">Step 2 </a></li> -->
                            <li><a href="#step3" data-toggle="tab">Step 2 </a></li>
                            <li><a href="#step4" data-toggle="tab">Finished </a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="step1">
                                <div class="row p-b-15  ">
                                    <h4 class="info-text">Booking for
                                        <strong><?php echo $formdata['HouseName']; ?></strong></h4>
                                    <h5 class="info_ar"> Capacity :
                                        <?php foreach ($farmhouse_menu as $value) {
                                            if ($formdata['HouseName'] == $value['Name']) {
                                                echo $value['Capacity'];
                                            }
                                        } ?></h5>
                                    <h5 class="info_arq"> &nbsp; &nbsp; Arrival Date:
                                        <?php echo $formdata['ArrivalDate']; ?> &nbsp; <i class="fa fa-arrow-right"></i>
                                        &nbsp; Departure Date:<?php echo $formdata['DepartureDate']; ?></h5>
                                    <div class="col-md-12">
                                        <?php
                                        if ($this->session->userdata('role') == "" || $this->session->userdata('role') == "1") {
                                            ?>
                                            <h4  class="info_ara">I already have an account</h4>
                                            <hr>
                                            <div class="col-md-6">
                                                <div class="form-group form-float">
                                                    <input type="text" class="form-control" placeholder="Email *" name="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-float">
                                                    <input type="password" class="form-control" placeholder="Password *" name="password" id="password">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success loginbooking">Login</button>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                        <h4 class="info_con">Contact details</h4>

                                                  <div class="col-md-12 form_page_a">
                                            <div class="form-group form-float form_group_label ">
                                                <div class="col-md-3">
                                                <label class="label_top">Full name<small class="star_req">*</small></label>
                                                <input type="text" class="form-control " placeholder="Full name *" name="name" value="<?php echo empty($this->session->userdata('name')) ? "" : $this->session->userdata('name'); ?>" id="fullname" required>
                                            </div>
                                        </div>
                                          <div class="form-group form-float">
                                                  <div class="col-md-3">
                                                <label class="label_top">Cnic</label>
                                                <input type="text" class="form-control" id="Cnic"   placeholder="Cnic" name="Cnic" value="<?php echo empty($userdata[0]['Cnic']) ? "" : $userdata[0]['Cnic']; ?>">
                                            </div>
                                        </div>
                                            <div class="form-group form-float">
                                                  <div class="col-md-3">
                                                <label class="label_top">E-mail<small class="star_req">*</small></label>
                                                <input type="email" class="form-control " <?php echo empty($this->session->userdata('name')) ? "" : " disabled " ?> placeholder="E-mail *" name="New_Email" id="email" onchange="showHint(this.value)" required value="<?php echo empty($userdata[0]['EmailID']) ? $this->session->userdata('email') : $userdata[0]['EmailID']; ?>">
                                                <span id="myid" class="glyphicon"></span>
                                            </div>
                                        </div>



                                            <div class="form-group form-float">
                                                  <div class="col-md-3">
                                                <label class="label_top">password<small class="star_req"> *</small></label>
                                                <input type="password" required <?php echo empty($this->session->userdata('name')) ? " name='New_Password' " : " disabled " ?> class="form-control" placeholder="Password *" id="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form_page_a">
                                            <div class="form-group form-float">
                                                  <div class="col-md-3">
                                                <label class="label_top">Address<small class="star_req"> *</small></label>
                                                <input type="text" class="form-control" placeholder="Address *" required name="Address" id="addres" value="<?php echo empty($userdata[0]['Adress1']) ? "" : $userdata[0]['Adress1']; ?>">
                                            </div>
                                        </div>
                                            <div class="form-group form-float">
                                                  <div class="col-md-3">
                                                <label class="label_top">Post code<small class="star_req"> *</small></label>
                                                <input type="number" class="form-control" placeholder="Post code *" name="Postcode" id="postcode">
                                            </div>
                                        </div>


                                            <div class="form-group form-float">
                                                  <div class="col-md-3">

                                                <label class="label_top" >City<small class="star_req"> *</small></label>
                                                <input type="text" class="form-control" placeholder="City *" id="city" name="City" required value="<?php echo empty($userdata[0]['City']) ? "" : $userdata[0]['City']; ?>">
                                            </div>
                                        </div>
                                            <div class="form-group form-float">
                                                  <div class="col-md-3">
                                                <label class="label_top">Country<small class="star_req">*</small></label>
                                                <input type="text" class="form-control" placeholder="Country *" name="Country" id="country" required value="<?php echo empty($userdata[0]['Area']) ? "" : $userdata[0]['Area']; ?>">
                                            </div>
                                        </div>
                                            <div class="form-group form-float">
                                                  <div class="col-md-3 phone_group">
                                                <label class="label_top">Phone <small class="star_req"> *</small></label>
                                                <input type="number" class="form-control" placeholder="Phone *" name="Phone" id="phone" required value="<?php echo empty($userdata[0]['ContactNo']) ? "" : $userdata[0]['ContactNo']; ?>">
                                            </div>
                                        </div>
                                            <div class="form-group form-float">
                                                  <div class="col-md-3 phone_group">
                                                <label class="label_top">Mobile<small class="star_req"> *</small></label>
                                                <input type="Mobile" class="form-control" placeholder="Mobile *" name="Mobile" id="mobile" required value="<?php echo empty($userdata[0]['MobileNo']) ? "" : $userdata[0]['MobileNo']; ?>">
                                            </div>
                                        </div>
                                       <!--      <div class="form-group form-float" id="otps">
                                                <label>Mobile Varifiction code<small>*</small></label>
                                                <input type="Mobile" class="form-control" placeholder="opt *" name="opt" id="opt" required>
                                            </div> -->
                                            <div class="form-group form-float" id="emailotps">
                                                  <div class="col-md-3 phone_group">
                                                <label class="label_top">Email Varifiction code<small class="star_req"> *</small></label>
                                                <input type="Mobile" class="form-control" placeholder="opt *" name="emailopt" id="emailopt" required>
                                            </div>
                                        </div>
                                            <div class="form-group form-float">
                                                  <div class="col-md-3 phone_group">
                                                <label class="label_top">Company<small class="star_req"> *</small></label>
                                                <input type="text" class="form-control" id="company" required placeholder="Company *" name="Company" value="<?php echo empty($userdata[0]['Occupation']) ? "" : $userdata[0]['Occupation']; ?>">
                                            </div>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End step 1 -->

                            <!-- End step 2 -->
                            <div class="tab-pane" id="step3">
                                <h4 class="info-text"> SUMMARY </h4>
                                <table class="table table-responsive table-bordered">
                                    <tbody>
                                        <tr>
                                            <th class="booking_head">Booking details</th>
                                            <th class="booking_head">Billing address</th>
                                        </tr>
                                        <tr>
                                            <td class="booking_body">
                                                Check in : <strong><?php echo $formdata['ArrivalDate']; ?></strong><br>
                                                Check out :<strong><?php echo $formdata['DepartureDate']; ?></strong><br>
                                                Booking For : <strong id="bokingfor"></strong><?php echo $formdata['BookingFor']; ?><br>

                                                <input type="" name="BookingFor" value="<?php echo  $formdata['BookingFor']; ?>" hidden>
                                                Total Persons : <strong id="member">
                                                    <?php
                                                        $data = $formdata['Adults'] + $formdata['childs'];
                                                        print_r($data); ?>
                                                </strong> Persons
                                                <br>
                                                Adults :
                                                <strong><?php echo $formdata['Adults']; ?></strong><br>

                                                Childs :
                                                <strong><?php echo $formdata['childs']; ?></strong><br>

                                                <?php if (isset($formdata['extra'])) { ?>

                                                    extra :
                                                    <strong><?php echo $formdata['extra']; ?></strong><br>

                                                <?php } ?>

                                                <?php
                                                if (isset($formdata['morethencapacity'])) { ?>
                                                    <strong style="color: red;">More Then House Capacity :
                                                        <?php echo $formdata['morethencapacity']; ?></strong><br>
                                                <?php } ?>



                                                <div class="form-group form-float" hidden>
                                                    <label>ArrivalDate</label>
                                                    <input type="text" name="ArrivalDate" id="ArrivalDate" value="<?php echo $formdata['ArrivalDate']; ?>">
                                                </div>
                                                <div class="form-group form-float" hidden>
                                                    <label>DepartureDate</label>
                                                    <input type="text" name="DepartureDate" id="DepartureDate" value="<?php echo $formdata['DepartureDate']; ?>">
                                                </div>
                                                <div class="form-group form-float" hidden>
                                                    <label>Check</label>
                                                    <input type="text" name="HouseName" id="HouseName" value="<?php echo $formdata['HouseName']  ?>">
                                                </div>
                                                <div class="form-group form-float" hidden>
                                                    <label>Check</label>
                                                    <input type="text" name="timeslot" id="timeslot" value="<?php echo $formdata['timeslot']; ?>">
                                                </div>



                                            </td>
                                            <td id="sum1">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-responsive table-bordered">

                                    <tbody>
                                        <tr>
                                            <!-- <th>Room</th> -->
                                            <th class="booking_head">Farmhouse</th>
                                            <th class="booking_head">Capacity</th>
                                            <th class="text-center">Total <small>( in RS )</small></th>
                                        </tr>
                                        <tr>
                                            <?php
                                            foreach ($farmhouse_menu as $value) {
                                                if ($formdata['HouseName'] == $value['Name']) {
                                                    $hid = $value['HouseID'];
                                                    ?>
                                                    <input type="hidden" name="HouseID" id="HouseID" value="<?php echo $value['HouseID']; ?>" />
                                                    <td class="farm_center"><?php echo $value['Name']; ?></td>
                                                    <td class="farm_center"><?php echo $value['Capacity']; ?></td>
                                                    <td class="text-right price farm_center" width="15%"><?php echo $discountrate[0]['Rates']; ?></td>
                                                    <input type="hidden" name="Deal_ID" value="----">
                                                    <input type="hidden" name="DealTitle" value="----">
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="text-right" id="pers"></th>
                                            <td class="text-right price" id="personss" width="15%"></td>
                                        </tr>
                                        <tr>
                                            <?php if (isset($formdata['extra'])) {   ?>
                                                <th colspan="2" class="text-right">Extra <?php echo $formdata['extra']; ?> Persons Pay</th>
                                                <td class="text-right price" width="15%"><?php
                                                                                                $exratotal = $formdata['extra'] * 400;
                                                                                                echo $exratotal;
                                                                                            }
                                                                                            ?></td>
                                        </tr>
                                        <tr>
                                            <?php
                                            if (isset($exratotal)) {
                                                $total = $exratotal + $discountrate[0]['Rates'] ?>

                                                <th colspan="2" class="text-right">Total (incl. tax)</th>
                                                <td class="text-right" width="15%"> <?php echo $total; ?></td>
                                                <input type="text" name="BookedAmount" hidden="" value="<?php echo $total; ?> ">
                                            <?php } else { ?>
                                                <th colspan="2" class="text-right">Total (incl. tax)</th>
                                                <td class="text-right" width="15%"> <?php echo $discountrate[0]['Rates']; ?>
                                                    <input type="text" name="BookedAmount" hidden="" value="<?php echo $discountrate[0]['Rates']; ?> ">
                                                <?php  } ?>



                                                <div class="form-group form-float" hidden>
                                                    <label>Check</label>

                                                </div>
                                                </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                       <p>Special Request</p>

<div>
  <input type="checkbox" id="Separator" name="drone" value="huey"
         checked>
  <label for="Seprator">Separator</label>
</div>

<div>
  <input type="checkbox" id="Transport" name="drone" value="dewey">
  <label for="transport">Travel</label>
</div>
<div>
  <input type="checkbox" id="Catring" name="drone" value="dewey">
  <label for="Catring">Catring</label>
</div>

<div>
  <input type="checkbox" id="Housework" name="drone" value="louie">
  <label for="louie">Housework</label>
</div>

                                        <textarea name="discription" class="form-control"> </textarea>
                                    </div>
                                </div>
                                <div class=" ">
                                    <strong> Payment Mood : </strong>
                                    <!--       <label>
                                        <input type="radio" name="paymentmode" value="on arrival" required />
                                        <strong> On arrival</strong>
                                    </label> -->
                                    <label>
                                        <input class="radio_check"type="radio" name="paymentmode" checked="checked" value="on head office " />
                                        <strong>On head office</strong>
                                    </label>
                                </div>
                            </div>
                            <!--  End step 3 -->
                            <div class="tab-pane" id="step4">
                                <h4 class="info-text"> Finished and submit
                                </h4>
                                <div class="row">
                                    <div class="col-sm-12 terms">
                                        <div class="" style="height:400px; ">
                                            <br>
                                            <p>
                                                <label class="terms_conditions"><strong>Terms and Conditions</strong></label>
                                            </p>
                                            <hr>
                                            <section id="id-100" class="post single ">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6" style="float:left; width:50%;">
                                                        <h3 class="available_at"> Available at Farm House</h3>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">1.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Basic Crockery ( Large
                                                                Plates
                                                                (20), 3
                                                                Tray with Rice Spoon).
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">2.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Gas cylinder with Strov
                                                                - 1Kg Gas
                                                                Available good for 15 persons cooking (provide on
                                                                demand)</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">3.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Barbeque Sticks ( 10
                                                                Nos. )</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">4.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Generator with Fuel
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">5.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Deep Freezer</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">6.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring"><b>Dispenser</b></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">7.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Hand Football game with
                                                                ball
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">8.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Carrom with Striker set
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6" style="float:left; width:50%;">
                                                        <h3 class="available_at"> What to Bring: </h3>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">1.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Towels, Soaps</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">2.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Mosquitoes Coil / Spray
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">3.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Music System, CD's
                                                                (Video or
                                                                Audio)
                                                                <small>(Domestic use category)</small></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">4.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Coal & Bar B Q Sticks (
                                                                if
                                                                required)
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">5.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Games<small>(Cards,
                                                                    Ludo,
                                                                    Scrabble,Chess,Badminton,BatBall,Football
                                                                    etc)</small>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">6.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Water Sports, Tubes,
                                                                Arm Support,
                                                                Costumes</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">7.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Extra Mattress/Blanket
                                                                (if
                                                                required )
                                                                in winter</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">8.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring"><b>Water Bottles (19
                                                                    Liters)</b>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">9.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Tea Pot / Electric
                                                                Kettle, Tea,
                                                                Milk,
                                                                Sugar etc.</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">10.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Disposable Glass and
                                                                cups.</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1 col-sm-1">11.</div>
                                                            <div class="col-md-11 col-sm-11 farm_bring">Spoons</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6" style="float:left; width:50%;">
                                                        <h3><span class="available_at"> Charges</span> <small>( In case of missing or damage )</small>
                                                        </h3>
                                                        <div class="row">

                                                            <div class="col-md-12 farm_bring">Ball Rs.40/- (of Hand Football
                                                                game)
                                                            </div>
                                                            <div class="col-md-12 farm_bring farm_bring">Carrom Pieces / Coins each
                                                                Rs.75/-,Striker Rs.400/-</div>
                                                            <div class="col-md-12 farm_bring">Snooker Ball Rs.500/- each, Stick
                                                                Rs.2500/- each</div>
                                                            <div class="col-md-12 farm_bring">Plate Rs.200/-</div>
                                                            <div class="col-md-12 farm_bring">Rics Spoon Rs.200/-</div>
                                                            <div class="col-md-12 farm_bring">Dish Rs.600/-</div>
                                                            <div class="col-md-12 farm_bring">Tray Rs.600/-</div>
                                                            <div class="col-md-12 farm_bring">BBQ Sticks Rs.100/-</div>
                                                            <div class="col-md-12 farm_bring">Chair Rs.1800/-</div>
                                                            <div class="col-md-12 farm_bring">Windows Net Rs.1000/-</div>
                                                            <div class="col-md-12 farm_bring">Pan Peak Cleaning & plenty
                                                                Rs.500/-
                                                                <b> Ù¾Ø§Ù† ØªÚ¾ÙˆÚ©Ù†Ø§</b></div>
                                                            <div class="col-md-12 farm_bring">Plants, Glass, Furniture etc
                                                                shall be
                                                                charged 60% abouve on market rate due to remote
                                                                area.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 urdus" style="float:left; width:50%;">
                                                        <h3 class="available_at"> What to Bring: </h3>
                                                        <div class="row">
                                                            <div class="col-md-11 col-sm-11 farm_urdu">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                            <div class="col-md-1 col-sm-1">.1</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-11 col-sm-11 farm_urdu">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                            <div class="col-md-1 col-sm-1">.2</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-11 col-sm-11 farm_urdu">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                            <div class="col-md-1 col-sm-1">.3</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-11 col-sm-11 farm_urdu">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                            <div class="col-md-1 col-sm-1">.4</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-11 col-sm-11 farm_urdu">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                            <div class="col-md-1 col-sm-1">.5</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-11 col-sm-11 farm_urdu">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                            <div class="col-md-1 col-sm-1">.6</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-11 col-sm-11 farm_urdu">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                            <div class="col-md-1 col-sm-1" style="float:left; width:5%;">.7</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <div id="print" class="pbox" style="display: none; position:relative;">
                                                <div class="row clearfix">
                                                    <div class="col-md-12 col-sm-12 ">
                                                        <img src="<?php base_url(''); ?>public/admin/assets/img/invoice.png" alt="">
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 text-right">
                                                        <p class="m-b-0"><strong>Order Date:
                                                            </strong><?php echo date('d-m-Y'); ?></p>
                                                        <p class="m-b-0"><strong>Order Status: </strong> <span class="badge badge-warning m-b-0">Pending</span></p>
                                                        <p><strong>Order ID: </strong> <?php
                                                                                        $houid = $getid['BookingID'] + 1;
                                                                                        echo date("my", strtotime($formdata['ArrivalDate'])) . "-" . $hid . "-" . sprintf("%04d", $houid);  ?></p>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-md-12 ">
                                                        <div class="table-responsive">
                                                            <table class="table table-responsive table-bordered">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Booking details</th>
                                                                        <th>Billing address</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Check in :
                                                                            <strong><?php echo $formdata['ArrivalDate']; ?></strong><br>
                                                                            Check out :
                                                                            <strong><?php echo $formdata['DepartureDate']; ?></strong><br>
                                                                            Booking For : <strong id="bokingfor"><?php echo $formdata['BookingFor']; ?></strong><br>
                                                                            Total Persons : <strong id="member">
                                                                                <?php
                                                                                    $data = $formdata['Adults'] + $formdata['childs'];
                                                                                    print_r($data); ?>
                                                                            </strong> Persons

                                                                            <div class="form-group form-float" hidden>
                                                                                <label>ArrivalDate</label>
                                                                                <input type="text" name="ArrivalDate" id="ArrivalDate" value="<?php echo $formdata['ArrivalDate']; ?>">
                                                                            </div>
                                                                            <div class="form-group form-float" hidden>
                                                                                <label>DepartureDate</label>
                                                                                <input type="text" name="DepartureDate" id="DepartureDate" value="<?php echo $formdata['DepartureDate']; ?>">
                                                                            </div>
                                                                            <div class="form-group form-float" hidden>
                                                                                <label>Check</label>
                                                                                <input type="text" name="HouseName" id="HouseName" value="<?php echo $formdata['HouseName']  ?>">
                                                                            </div>
                                                                            <div class="form-group form-float" hidden>
                                                                                <label>Check</label>
                                                                                <input type="text" name="timeslot" id="timeslot" value="<?php echo $formdata['timeslot']; ?>">
                                                                            </div>
                                                                        </td>
                                                                        <td id="sum">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <table class="table table-responsive table-bordered">
                                                                <tbody>
                                        <tr>
                                            <!-- <th>Room</th> -->
                                            <th>Farmhouse</th>
                                            <th>Capacity</th>
                                            <th class="text-center">Total <small>( in RS )</small></th>
                                        </tr>
                                        <tr>
                                            <?php
                                            foreach ($farmhouse_menu as $value) {
                                                if ($formdata['HouseName'] == $value['Name']) {
                                                    $hid = $value['HouseID'];
                                                    ?>
                                                    <input type="hidden" name="HouseID" id="HouseID" value="<?php echo $value['HouseID']; ?>" />
                                                    <td><?php echo $value['Name']; ?></td>
                                                    <td><?php echo $value['Capacity']; ?></td>
                                                    <td class="text-right price" width="15%"><?php echo $discountrate[0]['Rates']; ?></td>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="text-right" id="pers"></th>
                                            <td class="text-right price" id="personss" width="15%"></td>
                                        </tr>
                                        <tr>
                                            <?php if (isset($formdata['extra'])) {   ?>
                                                <th colspan="2" class="text-right">Extra <?php echo $formdata['extra']; ?> Persons Pay</th>
                                                <td class="text-right price" width="15%"><?php
                                                                                                $exratotal = $formdata['extra'] * 400;
                                                                                                echo $exratotal;
                                                                                            }
                                                                                            ?></td>
                                        </tr>
                                        <tr>
                                            <?php
                                            if (isset($exratotal)) {
                                                $total = $exratotal + $discountrate[0]['Rates'] ?>

                                                <th colspan="2" class="text-right">Total (incl. tax)</th>
                                                <td class="text-right" width="15%"> <?php echo $total; ?></td>
                                                <input type="text" name="BookedAmount" hidden="" value="<?php echo $total; ?> ">
                                            <?php } else { ?>
                                                <th colspan="2" class="text-right">Total (incl. tax)</th>
                                                <td class="text-right" width="15%"> <?php echo $discountrate[0]['Rates']; ?>
                                                    <input type="text" name="BookedAmount" hidden="" value="<?php echo $discountrate[0]['Rates']; ?> ">
                                                <?php  } ?>



                                                <div class="form-group form-float" hidden>
                                                    <label>Check</label>
                                                    <!--   <input type="text" name="BookedAmount" value="<?php //echo $total;
                                                                                                            ?> "> -->


                                                </div>
                                                </td>
                                        </tr>
                                    </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="row clearfix">
                                                    <div class="col-md-12 col-sm-12">
                                                        <h5>Note</h5>
                                                        <p>Etsy doostang zoodles disqus groupon greplin oooj voxy
                                                            zoodles, weebly ning heekya
                                                            handango imeem plugg dopplr jibjab, movity jajah plickers
                                                            sifteo edmodo ifttt zimbra.
                                                        </p>
                                                    </div>
                                                </div> -->
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h6>Order No: <?php
                                                                                        $houid = $getid['BookingID'] + 1;
                                                                                        echo date("my", strtotime($formdata['ArrivalDate'])) . "-" . $hid . "-" . sprintf("%04d", $houid);  ?>  </h6>

                                                            <?php
                                            foreach ($farmhouse_menu as $value) {
                                                if ($formdata['HouseName'] == $value['Name']) {
                                                    $hid = $value['HouseID'];
                                                    ?>
                                                    <h6>Name: Testing<br><br>
                                                        FarmHouse: <?php echo $value['Name'];?><br><br>
                                                            Date: <?php echo date('d-m-Y');?><br><br>
                                                            Ph: 0300-1234567 </h6>
                                            <?php
                                                }
                                            }
                                            ?>
                                                        <h6 class="text-center">PLEASE HELP TO SERVE YOU BETTER</h6>
                                                        <div class="col-sm-7">
                                                            <h5>SERVICES</h5>
                                                            <h6>Overfall Farm House Enviroment</h6>
                                                            <h6>General cleanlliness</h6>
                                                            <h6>Washroom Cleaning (once a day)</h6>
                                                            <h6>Staff Behaviour</h6>
                                                            <h6>Swimming Pool Cleaning</h6>
                                                            <h6>Electrical/ Electronic Items Working</h6>
                                                            <h6>Rating________________ / 10</h6>
                                                        </div>
                                                        <div class="col-sm-2 text-center">
                                                            <h5>Excellent</h5>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                        </div>
                                                        <div class="col-sm-1 text-center">
                                                            <h5>Good</h5>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                        </div>
                                                        <div class="col-sm-1 text-center">
                                                            <h5>Normal</h5>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                        </div>
                                                        <div class="col-sm-1 text-center">
                                                            <h5>Poor</h5>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                            <h6><i class="fa fa-smile-o"></i></h6>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <p>Comments/Suggestions_______________________________________________________________________________
                                                                _____________________________________________________________________________________________________
                                                                ___________________________________________________________
                                                                Thanks for Your valueable comments. See you soon<br> For
                                                                any Suggestions please E-mail:
                                                                sarwat.coordinator@sipka-engineering.com.pk,
                                                                zahid@sipka-engineering.com.pk </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <section id="id-100" class="post single ">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6" style="float:left; width:50%;">
                                                            <h3> Available at Farm House</h3>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">1.</div>
                                                                <div class="col-md-11 col-sm-11">Basic Crockery ( Large
                                                                    Plates
                                                                    (20), 3
                                                                    Tray with Rice Spoon).
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">2.</div>
                                                                <div class="col-md-11 col-sm-11">Gas cylinder with Strov
                                                                    - 1Kg Gas
                                                                    Available good for 15 persons cooking (provide on
                                                                    demand)</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">3.</div>
                                                                <div class="col-md-11 col-sm-11">Barbeque Sticks ( 10
                                                                    Nos. )</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">4.</div>
                                                                <div class="col-md-11 col-sm-11">Generator with Fuel
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">5.</div>
                                                                <div class="col-md-11 col-sm-11">Deep Freezer</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">6.</div>
                                                                <div class="col-md-11 col-sm-11"><b>Dispenser</b></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">7.</div>
                                                                <div class="col-md-11 col-sm-11">Hand Football game with
                                                                    ball
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">8.</div>
                                                                <div class="col-md-11 col-sm-11">Carrom with Striker set
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6" style="float:left; width:50%;">
                                                            <h3> What to Bring: </h3>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">1.</div>
                                                                <div class="col-md-11 col-sm-11">Towels, Soaps</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">2.</div>
                                                                <div class="col-md-11 col-sm-11">Mosquitoes Coil / Spray
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">3.</div>
                                                                <div class="col-md-11 col-sm-11">Music System, CD's
                                                                    (Video or
                                                                    Audio)
                                                                    <small>(Domestic use category)</small></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">4.</div>
                                                                <div class="col-md-11 col-sm-11">Coal & Bar B Q Sticks (
                                                                    if
                                                                    required)
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">5.</div>
                                                                <div class="col-md-11 col-sm-11">Games<small>(Cards,
                                                                        Ludo,
                                                                        Scrabble,Chess,Badminton,BatBall,Football
                                                                        etc)</small>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">6.</div>
                                                                <div class="col-md-11 col-sm-11">Water Sports, Tubes,
                                                                    Arm Support,
                                                                    Costumes</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">7.</div>
                                                                <div class="col-md-11 col-sm-11">Extra Mattress/Blanket
                                                                    (if
                                                                    required )
                                                                    in winter</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">8.</div>
                                                                <div class="col-md-11 col-sm-11"><b>Water Bottles (19
                                                                        Liters)</b>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">9.</div>
                                                                <div class="col-md-11 col-sm-11">Tea Pot / Electric
                                                                    Kettle, Tea,
                                                                    Milk,
                                                                    Sugar etc.</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">10.</div>
                                                                <div class="col-md-11 col-sm-11">Disposable Glass and
                                                                    cups.</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1 col-sm-1">11.</div>
                                                                <div class="col-md-11 col-sm-11">Spoons</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6" style="float:left; width:50%;">
                                                            <h3> Charges <small>( In case of missing or damage )</small>
                                                            </h3>
                                                            <div class="row">
                                                                <div class="col-md-12">Ball Rs.40/- (of Hand Football
                                                                    game)
                                                                </div>
                                                                <div class="col-md-12">Carrom Pieces / Coins each
                                                                    Rs.75/-,Striker Rs.400/-</div>
                                                                <div class="col-md-12">Snooker Ball Rs.500/- each, Stick
                                                                    Rs.2500/- each</div>
                                                                <div class="col-md-12">Plate Rs.200/-</div>
                                                                <div class="col-md-12">Rics Spoon Rs.200/-</div>
                                                                <div class="col-md-12">Dish Rs.600/-</div>
                                                                <div class="col-md-12">Tray Rs.600/-</div>
                                                                <div class="col-md-12">BBQ Sticks Rs.100/-</div>
                                                                <div class="col-md-12">Chair Rs.1800/-</div>
                                                                <div class="col-md-12">Windows Net Rs.1000/-</div>
                                                                <div class="col-md-12">Pan Peak Cleaning & plenty
                                                                    Rs.500/-
                                                                    <b> Ù¾Ø§Ù† ØªÚ¾ÙˆÚ©Ù†Ø§</b></div>
                                                                <div class="col-md-12">Plants, Glass, Furniture etc
                                                                    shall be
                                                                    charged 60% abouve on market rate due to remote
                                                                    area.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 urdus" style="float:left; width:50%;">
                                                            <h3> What to Bring: </h3>
                                                            <div class="row">
                                                                <div class="col-md-11 col-sm-11">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                    Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                    Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                                <div class="col-md-1 col-sm-1">.1</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-11 col-sm-11">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                    Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                    Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                                <div class="col-md-1 col-sm-1">.1</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-11 col-sm-11">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                    Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                    Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                                <div class="col-md-1 col-sm-1">.1</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-11 col-sm-11">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                    Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                    Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                                <div class="col-md-1 col-sm-1">.1</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-11 col-sm-11">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                    Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                    Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                                <div class="col-md-1 col-sm-1">.1</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-11 col-sm-11">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                    Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                    Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                                <div class="col-md-1 col-sm-1">.1</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-11 col-sm-11">Ø§ÙˆØ± Ø¨Ø§Ø²Ø§Ø± Ø³Û’ Ù„Û’ Ø¢Ø¦Û’ Ø§Ú¯Ø±
                                                                    Ù¹ÙˆÙ¹ Ú¯ÛŒØ§
                                                                    Ø³Ø§ØºØ±Ù Ø¬Ù… Ø³Û’ Ù…Ø±Ø§ Ø¬Ø§Ù…Ù Ø³ÙØ§Ù„ Ø§Ú†Ù‘Ú¾Ø§ ÛÛ’</div>
                                                                <div class="col-md-1 col-sm-1" style="float:left; width:5%;">.1</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input type="checkbox" /> I
                                                            heraby Agree
                                                            on the above terms & conditions
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <input type="checkbox" name="agree" value="1" id="chckterm" required> I
                                    heraby Agree
                                    on the above terms & conditions
                                    <label for="agree" class="error block">Please agree to our policy!</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' id="button" class='btn btn-next btn-booking btn-primary btn_last' onclick="myFunc()" name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-primary btn_last ' name='finish' value='Finish' />
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-default btn_last9' name='previous' value='Previous'/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunc() {
        // alert('abc');
        document.getElementById("sum1").innerHTML = " Name : " + document.getElementById("fullname").value +
            "<br> E-mail : " + document.getElementById("email").value + " <br> Address : " + document.getElementById(
                "addres").value + "<br> Postal Code : " + document.getElementById("postcode").value + "<br> Mobile No : " +
            document.getElementById("mobile").value + "<br> Company: " + document.getElementById("company").value;
        // document.getElementById("member").innerHTML = document.getElementById("totalPerson").value;
        // document.getElementById("bokingfor").innerHTML = document.getElementById("bookingFor").value;

        // let content = document.getElementById("sum1").textContent;
        // alert(content);

        document.getElementById("sum").innerHTML = document.getElementById("sum1").textContent;
    }
</script>
