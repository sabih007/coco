    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style type="text/css">
        .form-control {
            width: 100%;
        }

        a#dropdownMenuLink {
            width: 100%;
        }
    </style>
    <div class="row">
        <div class="col-sm-12">
            <div class="nest" id="maskedClose">
 
               
            </div>
            <div class="nest" id="maskedClose1">
                <div class="title-alt">
                    <h6><strong>
                            Eidt Booking</h6></strong>
            
                </div>
                <div class="body-nest" id="masked1" style="display: block;">
                    <div class="form_center">
                       <form class="form-horizontal" action="<?php echo base_url() ?>User/update_Booking" method="post" role="form">
                        <div class="row">
                            <div class="well">

                                <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Arrival Date</span>
                                 <input placeholder="Full name" type="text" class="form-control parsley-error"   name="ArrivalDate" value="<?php echo $invoicedata[0]['ArrivalDate']; ?>" required="">
                                </div>

                                <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Departure  Date</span>
                                 <input placeholder="Departure Date" type="text" class="form-control parsley-error"  name="DepartureDate" value="<?php echo $invoicedata[0]['DepartureDate']; ?>" required="" >
                                </div>

                                <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Booking For</span>
                                 <input placeholder="Booking For" type="text" class="form-control parsley-error"
                                  name="BookingFor" value="<?php echo $invoicedata[0]['BookingFor']; ?>" required="" data-parsley-id="7">
                                </div>

                                <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Total Person</span>
                                 <input placeholder="Total Person" type="text" class="form-control parsley-error"  name="BookingPerson" value="<?php echo $invoicedata[0]['TotalPerson']; ?>" required="" data-parsley-id="7">
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="well">

                                <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Name</span>
                                 <input placeholder="Booking Person Name" type="text" class="form-control parsley-error" name="BookingPerson" value="<?php echo $invoicedata[0]['BookingPerson']; ?>" required="">
                                </div>

                                <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Email</span>
                                 <input placeholder="Email" type="text" class="form-control parsley-error"  name="Email" value="<?php echo $invoicedata[0]['Email']; ?>" required="" >
                                </div>
<!-- 
                                <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Adress</span>
                                 <input placeholder="Adress" type="text" class="form-control parsley-error"
                                  name="Adress1" value="<?php //echo $invoicedata[0]['Adress1']; ?>" required="">
                                </div> -->

                                <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Mobile No</span>
                                 <input placeholder="Mobile No" type="text" class="form-control parsley-error"  name="MobileNo" value="<?php echo $invoicedata[0]['MobileNo']; ?>" required="" >
                                </div>

                                      <div class="input-group col-sm-3" style="display: none;">
                                 <span class="input-group-addon"> BookingID</span>
                                 <input  type="text" class="form-control parsley-error"  name="BookingID" value="<?php echo $invoicedata[0]['BookingID']; ?>" required="" >
                                </div>
     <div class="input-group col-sm-2">
                                 <button type="submit" class="btn btn-primary" id=" ">Submit</button>
                                </div>
                            </div>
                        </div>
<!-- 
                        <div class="row">
                            <div class="well"> -->

                        <!--         <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Occupation</span>
                                 <input placeholder="Occupation" type="text" class="form-control parsley-error" name="Occupation" value="<?php //echo $invoicedata[0]['Occupation']; ?>" required="">
                                </div> -->

                         <!--        <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> House Name</span>
                                 <input placeholder="House Name" type="text" class="form-control parsley-error"  name="HouseName" value="<?php //echo $invoicedata[0]['Name']; ?>" required="" >
                                </div>
 -->
<!--                                 <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Total Person</span>
                                 <input placeholder="Total Person" type="text" class="form-control parsley-error"
                                  name="TotalPerson" value="<?php //echo $invoicedata[0]['TotalPerson']; ?>" required="">
                                </div> -->

<!--                                 <div class="input-group col-sm-3">
                                 <span class="input-group-addon"> Mobile No</span>
                                 <input placeholder="Mobile No" type="text" class="form-control parsley-error"  name="MobileNo" value="<?php //echo $invoicedata[0]['MobileNo']; ?>" required="" >
                                </div> -->


                          
<!-- 
                            </div>
                       
                        </div> -->

                        <!-- <div class="row">
                            <div class="well">
                                <div class="input-group col-sm-2">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="City" type="text" class="form-control parsley-error" name="City" required="" value="" data-parsley-id="75">
                                </div>
                                <div class="input-group col-sm-2">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="Adress" type="text" class="form-control parsley-error" name="Adress" required="" data-parsley-id="76">
                                </div>
                                <div class="input-group col-sm-2">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="Posta Code" type="text" class="form-control parsley-error" name="PostalCode" required="" data-parsley-id="77">
                                </div>
                                <div class="input-group col-sm-2">
                                    <span class="input-group-addon btn-success"><i class="fa fa-home"></i>
                                    </span>
                                    <input placeholder="Mobile No" type="number" class="form-control parsley-error" id="mobileno" name="MobileNo" required="" data-parsley-id="5">
                                </div>
                                <div class="input-group col-sm-2">
                                    <span class="input-group-addon btn-success"><i class="fa fa-home"></i>
                                    </span>
                                    <input placeholder="Cnic" type="number" class="form-control parsley-error" id="Cnic" name="Cnic" required=""  >
                                </div>

                                <div class="input-group col-sm-2">
                                 <button type="submit" class="btn btn-primary" id=" ">Submit</button>
                                </div>

                            </div>
                        </div> -->
                       
                        </form>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
     