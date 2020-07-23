    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style type="text/css">
        .form-control {
            width: 100%;
        }

        a#dropdownMenuLink {
            width: 100%;
        }

            .input-group-addon:last-child {
    border-left: 0;
    width: 125px !important;
    padding: 0 0 !important;
}
    </style>
    <div class="row">
        <div class="col-sm-12">
            <div class="nest" id="maskedClose">
                <div class="title-alt">
                    <form role="form" id="addUser" action="<?php echo base_url() ?>user/New_booking_add" enctype="multipart/form-data" method="post" role="form">
                        <h6><strong>
                                Farm House Booking</strong></h6>
                        <div class="titleClose">
                            <a class="gone" href="#maskedClose">
                                <span class="entypo-cancel"></span>
                            </a>
                        </div>
                        <div class="titleToggle">
                            <a class="nav-toggle-alt" href="#masked"><span class="entypo-up-open"></span></a>
                        </div>
                </div>
                <div class="body-nest" id="masked" style="display: block;">
                    <div class="form_center">
                        <div class="row">
                            <div class="well">
                                <div class="input-group col-sm-6">
                                    <span class="input-group-addon btn-success"><i class="fa fa-calendar"></i>
                                    </span>
                                    <span class="input-group-addon ">Arrival Date</span>
                                    <input type="text" class="form-control parsley-error" name="BookingDate" value="<?php echo date('Y-m-d') ?>" required="" data-parsley-id="7" id="BookingDate" style="display:none;">
                                    <input type="Date" class="form-control parsley-error" name="ArrivalDate" required="" id="ArrivalDate" data-parsley-id="5">
                                    
                                </div>
                                <div class="input-group col-sm-6">
                                    <span class="input-group-addon btn-success"><i class="fa fa-calendar"></i>
                                    </span>
                                     <span class="input-group-addon ">Departure Date</span>
                                    <input type="Date" class="form-control parsley-error" name="DepartureDate" required="" id="DepartureDate" data-parsley-id="7">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="well">
                                <div class="input-group col-sm-6">
                                    <span class="input-group-addon btn-success"><i class="fa fa-clock-o"></i>
                                    </span>
                                    <span class="input-group-addon ">  Time Slot</span>
                                    <select class="form-control parsley-error dropdown show" name="timeslot" id="timeslot" title="Select your Timing" required>
                                        <option value=bo"">Select Time Slot</option>
                                        <option value="09-Hours (8AM to 5PM)">09-Hours (8AM to 5PM)</option>
                                        <option value="11-Hours (8PM to 7AM)">11-Hours (8PM to 7AM)</option>
                                        <option value="21-Hours (8PM to 5PM)">21-Hours (8PM to 5PM)</option>
                                        <!-- <option value="8AM to 5PM">8AM to 5PM</option>
                                    <option value="8PM to 7AM">8PM to 7AM</option>
                                    <option value="21 Hours">21 Hours</option> -->
                                    </select>
                                    
                                </div>
                                <div class="input-group col-sm-6">
                                    <span class="input-group-addon btn-success"><i class="fa fa-home"></i>
                                    </span>
                                      <span class="input-group-addon ">Farmhouse</span>
                                    <select class="form-control parsley-error dropdown show" id="HouseName" name="HouseName" disabled>
                                        <option selected disabled>Select Farmhouse</option>
                                    </select>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="well">
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success">Total Person
                                    </span>
                                    <input placeholder="Total Person" type="number" class="form-control parsley-error" id="totalPerson" name="TotalPerson" min="0" required="" data-parsley-id="5">
                                    
                                </div>
                                
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success">% Discount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span>
                                    <input placeholder="% Discount " type="text" class="form-control parsley-error" id="otherdiscount" name="otherdiscount" />
                                </div>
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success">Further Discount
                                    </span>
                                    <input placeholder="Further Discount " type="text" class="form-control parsley-error" id="furtherdiscount" name="furtherdiscount" />
                                </div>
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success">Advance Amount
                                    </span>
                                    <input placeholder="Advance Amount" type="text" class="form-control parsley-error" id="advanceamount" name="advanceamount" required />
                                </div> 
                            </div>
                        </div>
                         <div class="row">
                            <div class="well">

                                 <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success">No. Ext. Person
                                    </span>
                                    <input placeholder="Extra Person" readonly type="number" class="form-control parsley-error" id="extra_allowed"  name="extrap" required="" data-parsley-id="5">
                                   
                                </div>
                         


                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success">Ext. Person Amt 
                                    </span>
                                    <input placeholder="Extra Person" readonly type="number" class="form-control parsley-error" id="extraperson"  name="extrap" required="" data-parsley-id="5">
                                   
                                </div>
                         
                          
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success">Discount Value
                                    </span>
                                    <input placeholder="Discount Value" readonly type="number" class="form-control parsley-error" id="discountValue"  name="discountValue" required="" data-parsley-id="5">
                                   
                                </div>
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success">Total Discount
                                    </span>
                                    <input placeholder="Total Discount" readonly type="number" class="form-control parsley-error" id="totalDiscount"  name="totalDiscount" required="" data-parsley-id="5">
                                   
                                </div>
                          </div>
                        </div>        
                        <div class="row">
                          <div class="well">
                               <div class="input-group col-sm-4">
                                    <span class="input-group-addon btn-success">Payable Amount
                                    </span>
                                    <input placeholder="Payable Amount" readonly type="text" class="form-control parsley-error" id="payable" name="payable" required />
                                </div>
                                <div class="input-group col-sm-4">
                                    <span class="input-group-addon btn-success">ActualRent
                                    </span>
                                    <input readonly type="number" class="form-control parsley-error" name="ActualRent" placeholder="ActualRent" required="" id="ActualRent">
                                    <!-- <span class="input-group-addon ">Arrival Date</span> -->
                                </div>
                                <div class="input-group col-sm-4">
                                    <span class="input-group-addon btn-success">Discounted Rent
                                    </span>
                                    <input placeholder="Discounted Rent" readonly type="number" class="form-control parsley-error" name="Package_discount" required="" id="discounted">
                                    <!-- <span class="input-group-addon ">Departure Date</span> -->
                                </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="well">
                                
                                <div class="input-group col-sm-4">
                                    <span class="input-group-addon btn-success">Package Discount
                                    </span>
                                    <input placeholder="Package Discount" readonly type="text" class="form-control parsley-error" name="Discount" required id="dicount">
                                    <!-- <span class="input-group-addon ">Time Slot</span> -->
                                </div>
                                <div class="input-group col-sm-4">
                                    <span class="input-group-addon btn-success">Discounted Capacity
                                    </span>
                                    <input placeholder="Capacity" readonly type="text" class="form-control parsley-error" id="capacity" required="" data-parsley-id="5">
                                    <!-- <span class="input-group-addon ">Farmhouse</span> -->
                                </div>
                                <div class="input-group col-sm-4">
                                    <span class="input-group-addon btn-success">Booked Amount
                                    </span>
                                    <input placeholder="Booked Amount" readonly type="text" class="form-control parsley-error" id="bookedAmount" name="BookedAmount" required />
                                    <!-- <span class="input-group-addon ">Farmhouse</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nest" id="maskedClose1">
                <div class="title-alt">
                    <h6><strong>
                            Booking For</h6></strong>
                    <div class="titleClose">
                        <a class="gone" href="#maskedClose1">
                            <span class="entypo-cancel"></span>
                        </a>
                    </div>
                    <div class="titleToggle">
                        <a class="nav-toggle-alt" href="#masked1"><span class="entypo-up-open"></span></a>
                    </div>
                </div>
                <div class="body-nest" id="masked1" style="display: block;">
                    <div class="form_center">
                        <div class="row">
                            <div class="well">

                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="BookingPerson" required="" data-parsley-id="7">
                                </div>
                                <div class="input-group col-sm-3">
                                        <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                        </span>
                                    <input placeholder="Contact No" type="number" class="form-control parsley-error" name="ContactNo" required="" data-parsley-id="72">
                                </div>
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="Email" type="email" class="form-control parsley-error" name="Email" required="" data-parsley-id="7">
                                </div>
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-home"></i>
                                    </span>
                                    <select class="form-control parsley-error dropdown show" name="BookingFor" required="" data-parsley-id="71">
                                        <option class="btn btn-secondary" value="Birthday Party">Birthday Party</option>
                                        <option class="btn btn-secondary" value="Corporate">Corporate</option>
                                        <option class="btn btn-secondary" value="Family">Family</option>
                                        <option class="btn btn-secondary" value="Friends(Boys Only)">Friends(Boys Only)</option>
                                        <option class="btn btn-secondary" value="Married Couples">Married Couples</option>
                                        <option class="btn btn-secondary" value="Music Festival">Music Festival</option> 
                                        <option class="btn btn-secondary" value="Office">Office</option>
                                        <option class="btn btn-secondary" value="Office Colleague">Office Colleague</option>
                                        <option class="btn btn-secondary" value="Party">Party</option>
                                        <option class="btn btn-secondary" value="School">School</option>
                                        <option class="btn btn-secondary" value="University">University</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="well">
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="City" type="text" class="form-control parsley-error" name="City" required="" data-parsley-id="75">
                                </div>
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="Adress" type="text" class="form-control parsley-error" name="Adress" required="" data-parsley-id="76">
                                </div>
                                <!--<div class="input-group col-sm-3">-->
                                <!--    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>-->
                                <!--    </span>-->
                                <!--    <input placeholder="Posta Code" type="text" class="form-control parsley-error" name="PostalCode" required="" data-parsley-id="77">-->
                                <!--</div>-->
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-home"></i>
                                    </span>
                                    <input placeholder="Mobile No" type="number" class="form-control parsley-error" id="mobileno" name="MobileNo" required="" data-parsley-id="5">
                                </div>

                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="Cnic" type="text" class="form-control parsley-error" name="Cnic"   >
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="well">
                                
                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="Company Name" type="text" class="form-control parsley-error" name="CompanyName"   >
                                </div>

                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="Source / Reference" type="text" class="form-control parsley-error" name="SourceReference"   >
                                </div>

                                <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="Whatsapp Number" type="text" class="form-control parsley-error" name="whatsappNo"   >
                                </div>
                                       <div class="input-group col-sm-3">
                                    <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                    </span>
                                    <input placeholder="Selles man" type="text" class="form-control parsley-error"  name="Selles_man" required="" data-parsley-id="7">
                                </div>
                                <div class="input-group col-sm-3" style="float: right: ">
                                    <button type="submit" class="btn btn-primary" id="formsubmit">Submit</button> 
                                    <p id="person_msg" style="color: red;">Persons exceed</p>
                                </div>
                                 
                            </div>
                        </div>

                        
                        </form>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#person_msg').hide();
            //     var number = document.getElementById('bookedamounts');

            // // Listen for input event on numInput.
            // number.onkeydown = function(e) {
            //     if (!((e.keyCode > 95 && e.keyCode < 106) ||
            //             (e.keyCode > 47 && e.keyCode < 58) ||
            //             e.keyCode == 8)) {
            //         return false;
            //     }
            // }
            // $("#advanceamount").val(0);
            //     disable();
            // var number = document.getElementById('totalPerson');

            // // Listen for input event on numInput.
            // number.onkeydown = function(e) {
            //     if (!((e.keyCode > 95 && e.keyCode < 106) ||
            //             (e.keyCode > 47 && e.keyCode < 58) ||
            //             e.keyCode == 8)) {
            //         return false;
            //     }
            // }
            $('#timeslot').change(function() {
                var ArrivalDate = $('#ArrivalDate').text();
                var DepartureDate = $('#DepartureDate').text();
                var timeslot = $('#timeslot').text();
                var data = {
                    'ArrivalDate': $('#ArrivalDate').val(),
                    'DepartureDate': $('#DepartureDate').val(),
                    'timeslot': $('#timeslot').val(),
                }
                $.ajax({
                    url: 'check_booking',
                    method: 'post',
                    data: data,
                    dataType: 'json',
                    success: function(data) {
                        $('#HouseName').prop('disabled', false);
                        $('#HouseName').html(data);
                    },
                });
            });
            $('#totalPerson').keyup(function() {
                console.log($(this).val());
                cal();
            })

            function cal() {
                // console.log($('#capacity').val());
                // console.log($('#totalPerson').val());
                if (parseInt($('#capacity').val()) < parseInt($('#totalPerson').val())) {
                    var cal = $('#totalPerson').val() - $('#capacity').val();
                    // console.log((cal * 400) + parseInt($('#discounted').val()));
                    // console.log(cal);
                    $('#bookedAmount').val((cal * 400) + parseInt($('#discounted').val()));
                    $('#extraperson').val(parseInt((cal * 400)));
                } else {
                    $('#bookedAmount').val($('#discounted').val());
                    $('#extraperson').val(0);
                }
            }
            $('#otherdiscount').keyup(function() {
                cal();
                //advance();
                if ($('#otherdiscount').val() != "") {
                    disc=$('#bookedAmount').val() * ($(this).val() / 100);
                    var per = $('#bookedAmount').val() - ($('#bookedAmount').val() * ($(this).val() / 100));
                    console.log(disc);
                    if ($('#furtherdiscount').val() != '') {
                        disc=$('#bookedAmount').val() * ($(this).val() / 100);
                           var sum = disc + parseInt($('#furtherdiscount').val());
                           $('#discountValue').val(disc);
                    $('#totalDiscount').val(sum);
                        }
                            else{
                                 disc=$('#bookedAmount').val() * ($(this).val() / 100);
                                $('#discountValue').val(disc);
                            }
                    // $('#discountValue').val(disc);   
                    $('#bookedAmount').val(per);
                     advance();

                }
            })
            // discount by ammount
            $('#furtherdiscount').keyup(function() {
                cal();
                //advance();
                if ($('#furtherdiscount').val() != "" && $('#otherdiscount').val() != "") {
                    var per = $('#bookedAmount').val() - ($(this).val() );
                    var sum = parseInt($('#discountValue').val()) + parseInt($('#furtherdiscount').val());
                    console.log(sum);
                        $('#totalDiscount').val(sum);
                            $('#bookedAmount').val($('#bookedAmount').val()-sum);
                    // $('#bookedAmount').val(per);
                     advance();

                }
                if ($('#otherdiscount').val() == "" && $('#furtherdiscount').val() != "") {
                    if ($('#totalPerson').val() == 0) {
                         alert('Insert Persons');
                    }
                    else{
                         var per = $('#bookedAmount').val() - ($(this).val() );
                        $('#totalDiscount').val($(this).val());
                            $('#bookedAmount').val($('#bookedAmount').val()-$(this).val());
                            advance();
                    }
                        }
            })
            // end of discount by ammount

            function discounted() {
                // var amount = $('#advanceamount').val($('#bookedAmount').val());
                $('#payable').val($('#bookedAmount').val());

            }
            $('#advanceamount').keyup(function() {
                advance();
            })

            function advance() {
                if ($('#advanceamount').val() != "") {
                    var pay = $('#bookedAmount').val() - $('#advanceamount').val();
                    $('#payable').val(pay);
                    console.log(pay);
                } else {
                    $('#payable').val($('#bookedAmount').val());

                }
            }
            $('#formsubmit').click(function() {
                var msg = $('#bookingperson').val() + ' have booked farmhouse ' + $('#HouseName').val() + ' on Arival at ' + $('#ArrivalDate').val() + ' on time Slot ' + $('#timeslot').val();
                var user = '923152977502';
                var pass = '1285';
                var mobile = $('#mobileno').val().replace(/^.{1}/g, '92');
                // alert(msg);
                // alert(mobile);
                var url = 'https://sendpk.com/api/sms.php?username=' + user + '&password=' + pass + '&mobile=' + mobile + '&sender=sender&message=' + msg + '&format=json';
                $.ajax({
                    url: url,
                    method: 'post',
                    // data: data,
                    dataType: 'json',
                    success: function(data) {},
                });
            });

            $('#HouseName').change(function() {
                var data = {
                    'HouseName': $('#HouseName').val(),
                    'ArrivalDate': $('#ArrivalDate').val(),
                    'timeslot': $('#timeslot').val(),
                }
                console.log(data);
                $.ajax({
                    url: 'check_book_price',
                    method: 'post',
                    data: data,
                    dataType: 'json',
                    success: function(data) {
                        // alert(data);
                        console.log(data);
                        console.log("click");
                        console.log(data[0]['Capacity']);
                        $('#discounted').val(data[1]['Rates']);
                        $('#ActualRent').val(data[0]['Rent']);
                        $('#dicount').val(data[2]['Dis']);
                        // var capacity = data[0]['PersonUpto'];
                        // var capacity = data[0]['Capacity'].split('-');
                        $('#capacity').val(data[0]['PersonUpto']);
                        $('#extra_allowed').val(data[0]['excess_person']);
                    },
                });
            });
        });
        // date function below
// $(function () {
//     var dtToday = new Date();
//     var month = dtToday.getMonth() + 1;
//     var day = dtToday.getDate();
//     var year = dtToday.getFullYear();
//     if (month < 10)
//         month = '0' + month.toString();
//     if (day < 10)
//         day = '0' + day.toString();
//     var minDate = year + '-' + month + '-' + day;
//     $("input[type='date']").attr('min', minDate);
// });
    </script>

<script>
    $( "#totalPerson" ).blur(function() {
        var excess_person=$('#extra_allowed').val();
        var person_capacity=$('#capacity').val();
        var sum=excess_person+person_capacity;

        if($('#totalPerson').val()>parseInt($('#extra_allowed').val())+parseInt($('#capacity').val())){
            alert("Persons Limit Reached");
            $('#formsubmit').prop('disabled',true);
            $('#person_msg').show();

        }
        else{
                 $('#formsubmit').prop('disabled',false);
                  $('#person_msg').hide();

        }



});


</script>
    