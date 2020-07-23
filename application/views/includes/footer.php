<!-- Taimoor Code -->
<div class="modal fade bookbypckg" id="myGetDealModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal_contant_advanceS">
                <div class="modal-header  header_modal" >
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title modal_title_c" id="myModalLabel">Get Deal</h4>
                </div>

                <div class="modal-body" id="moodal">
                    <div class="container-fliud">
                        <form action="<?php echo base_url('check_deal'); ?>" class=" form-inline" method="post" id="get_deals_form">
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
                                    <input type="hidden" name="deal_value" id="deal_value">
                                    <input type="hidden" name="Deal_ID" id="Deal_ID">
                                    <input type="hidden" name="Deal_Title" id="Deal_Title">
                                    <select class="form-control housename4" id="housename4" name="HouseName" style="width: 106%;">
                                    </select>
                                </div>


                                <div class="form-group extra" style="margin-left: 8px !important;">
                                    <label for="Adults" id="myid2">
                                        Adults
                                    </label>
                                    <input type="number" class="form-control" placeholder="upto" name="upto" id="upto2" readonly style="display:none;">
                                    <input type="number" class="form-control" placeholder="capacity" name="capacity" id="capacity2" readonly style="display:none;">
                                    <input type="number" class="form-control" placeholder="Adults" name="Adults" id="Adults2" required>
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
                                    <button  type="submit" class="btn search-btn  " ><i class="fa fa-search"></i></button>
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
<!-- End Taimoor code -->
<!-- Modal start -->
    <div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content adv_head">
                <div class="modal-header hea">
                    <button type="button" class="close cc" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Advance Search</h4>
                </div>
                <div class="modal-body bb">
                    <div class="container" >
                        <form action="<?php echo base_url('check_fac'); ?>" class=" form-inline" id="target" method="post">
                            <div class="row advance" id="more">
                                <div class="form-group adv">
                                    <label for="ArrivalDate">Time Slot</label>
                                    <select id="lunchBegins" name="timeslot" id="timeslot" class="form-control timeslot" title="Select your Timing" required>
                                        <option value="09-Hours (8AM to 5PM)">09-Hours (8AM to 5PM)</option>
                                        <option value="11-Hours (8PM to 7AM)">11-Hours (8PM to 7AM)</option>
                                        <option value="21-Hours (8PM to 5PM)">21-Hours (8PM to 5PM)</option>
                                    </select>
                                </div>
                                <div class="form-group adv">
                                    <label for="ArrivalDate">ArrivalDate</label>
                                    <input type="date" name="ArrivalDate" id="ArrivalDate" class="datepicker form-control" placeholder="MM/DD/YYYY" required>
                                </div>
                                <div class="form-group adv">
                                    <label for="ArrivalDate">DepartureDate</label>
                                    <input type="date" class="form-control" placeholder="Key word" name="DepartureDate" id="DepartureDate" required>
                                </div>

                                <div class="form-group adv">
                                    <label for="Adults" id="myid">
                                        Adults
                                    </label>
                                    <input type="number" class="form-control" placeholder="upto" name="upto" id="upto" readonly style="display:none;">
                                    <input type="number" class="form-control" placeholder="capacity" name="capacity" id="capacity" readonly style="display:none;">
                                    <input type="number" min="0" class="form-control" placeholder="Adults" name="Adults" id="Adults" required>
                                </div>
                                <div class="form-group adv">
                                    <label for="Childs">Childs</label>
                                    <input type="number" min="0" class="form-control" placeholder="Childs" name="childs" required>
                                </div>

                                <div class="form-group adv">
                                    <label>Booking For:</label>
                                    <select name="BookingFor" id="BookingFor" class="form-control validate" title="Booking For">
                                        <?php foreach ($bookingfor as $value) { ?>
                                            <option value="<?php echo $value['BookingFor']; ?>"><?php echo $value['BookingFor']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group adv btn">
                                    <button class="btn search-btn" id="advance_btn_check" type="submit" ><i class="fa fa-search"></i></button>

                                </div>
                            </div>
                            </br>
                            <div class="row option">
                                <!-- <?php
                                if ($getfarmd) {
                                    foreach ($getfarmd as  $value) {
                                        $count = substr_count($value['size'], ",");
                                        $arrayloc = explode(',', $value['size']);
                                        $loc = "";
                                        for ($i = 0; $i < $count; $i++) {
                                            $loc .= '<option value="' . $arrayloc[$i] . '">' . $arrayloc[$i] . '</option>';
                                        } ?>
                                        <div class="col-md-3">
                                            <label class="mdb-main-label"><?php echo $value['Name']; ?></label>
                                            <select onchange="myfunc()" class="selectpicker" multiple data-live-search="true" name="<?php echo $value['Name'] . '[]'; ?>">
                                                <?php echo $loc; ?>
                                            </select>
                                        </div>
                                <?php }
                                }
                                ?> -->


                            </div>
                    </div>
                </div>
                <div class="modal-footer advance">

                </div>
                </form>
            </div>
        </div>
    </div>



        <!-- Footer area-->
        <div class="footer-area">
            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <!-- <a href="#"><h4 class=""><span class=>COCO</span> RESORTS</h4></a> -->
                                <!-- <h5 href="#">COCO RESORTS</h5> -->

                                <div class="footer-title-line"></div>

                                <!-- <img src="<?php echo base_url();?>public/assets/img/footer-logo.png" alt="" class="wow pulse" data-wow-delay="1s"> -->
                                <!-- <p>Lorem ipsum dolor cum necessitatibus su quisquam molestias. Vel unde, blanditiis.</p> -->
                                <ul class="footer-adress">
                            <li><i class="pe-7s-map-marker strong"> </i> 8-D, Block 6, P.E.C.H.S.,
                                Hotel Faran's Street Nursarry
                                Karachi - 75400 Pakistan.</li>
                            <li><i class="fa fa-envelope-o strong"> </i> info@cocofarmhouse.com</li>
                            <li><i class="fa fa-phone strong"> </i> Sale Person: 0315-7426421/2 / 3
                                <!-- :0331-7426421</li>
                            <li><i class="pe-7s-call strong"> </i> Incharge COCO : 0315-7426425</li>
                            <li><i class="pe-7s-call strong"> </i> Incharge MAPLE : 0323-7426423</li>
                            <li><i class="pe-7s-call strong"> </i> SUPERVISION : 0332-7426424</li> -->
                        </ul>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Quick links </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                            <li><a href="<?php echo base_url(); ?>gallery">Gallery</a> </li>
                            <li><a href="#ourpackagae">Packages</a> </li>
                            <li><a href="#farmhouse" >Farm Houses</a> </li>
                            <li><a href="<?php echo base_url();?>about">About</a> </li>
                            <li><a href="<?php echo base_url();?>testimonials">Testimonial </a></li>
                            <li><a href="<?php echo base_url();?>contact">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                        <div class="single-footer">
                        <h4>View Farms</h4>
                        <div class="footer-title-line"></div>
                        <ul class="footer-blog">
                            <?php
                            $max_loop = 3; //This is the desired value of Looping
                            $count = 0; //First we set the count to be zeo
                            foreach ($farmhouse_menu as $farm) {  ?>
                                <!-- //Print the value of the Array -->
                                <li>
                                    <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                        <a href="#">
                                            <img src="<?php echo base_url() ?>public/assets/img/farmhouses/<?php echo $farm['Logo']; ?>">
                                        </a>
                                        <span class="blg-date">Rs<?php echo $farm['Rent']; ?></span>
                                    </div>
                                    <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                        <h6> <a href="<?php echo base_url() . 'farmhouse/' . $farm['HouseID'];  ?>">
                                                <?php echo $farm['Name']; ?>
                                            </a></h6>
                                        <span data-toggle="modal" data-target="#myModal">
                                            <i class="btn btn-danger btn-sm btn-round" id="nav-advseacrh" style="color:#fff">Book now </i>
                                        </span>
                                    <!-- <?php echo $farm['package_id'];?> -->
                                    </div>
                                </li>
                            <?php
                                $count++;
                                if ($count == $max_loop) break;
                            } ?>

                        </ul>
                    </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
         <p>If you are planning and looking for best farm houses for picnic & parties, we are offering an
                            excellent collection of the finest farm houses at very competitive prices.</p>

                                <form>
                                    <div class="input-group">
                                        <!-- <input class="form-control" type="text" placeholder="E-mail ... "> -->
                                        <span class="input-group-btn">
                                            <!-- <button class="btn btn-primary subscribe" type="button"><i class="fa fa-paper-plane pe-2x"></i></button> -->
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form>

                                <div class="social pull-right">
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/coco_farm"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/Thecocofarmhouse/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.youtube.com/watch?v=mnI83k4-I-c" data-wow-delay="0.3s"><i class="fa fa-youtube"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.instagram.com/cocofarmhouse/" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                        <!-- <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <span> (C) <a href="http://www.cocofarmhouse.com">COCO Farmhouse</a> , All rights reserved 2019 |
                        Developed by <a href="http://www.core2plus.com">Core 2 Plus</a>
                    </span>
                <!-- </div>
                        <div class="bottom-menu pull-right">
                            <ul>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.2s">Home</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.3s">Property</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.4s">Faq</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s">Contact</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>

        <script src="<?php echo base_url();?>public/assets/js/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo base_url(); ?>public/admin/assets/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>public/assets/js/jquery-ui.min.js"></script>

        <script src="<?php echo base_url();?>public/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/js/bootstrap-select.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="<?php echo base_url();?>public/assets/js/easypiechart.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/js/jquery.easypiechart.min.js"></script>

        <script src="<?php echo base_url();?>public/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/js/wow.js"></script>
        <script src="<?php echo base_url(); ?>public/assets/js/lightslider.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/js/icheck.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/js/price-range.js"></script>
        <script src="<?php echo base_url(); ?>public/admin/assets/js/wizard.js"></script>
        <script src="<?php echo base_url(); ?>public/admin/assets/js/jquery.bootstrap.wizard.js"></script>
        <script src="<?php echo base_url(); ?>public/admin/assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>public/admin/assets/js/maincoco.js"></script>
        <script src="<?php echo base_url();?>public/assets/js/main.js"></script>
        <script src="<?php echo base_url();?>public/assets/js/custom.js"></script>

        <?php if ($this->uri->segment(1) == 'gallery' || $this->uri->segment(1) == 'gallery#') {
    ?>
    <!-- gallery -->
    <script type="text/javascript" src="<?php echo base_url();?>public/admin/assets/js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/admin/assets/js/lib/jquery.magnific-popup.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>public/admin/assets/js/lib/scripts.js"></script>
    <!-- gallery -->

<?php } ?>

<script>
    $(document).ready(function() {
        $('#searchbar').click(function() {
            $("#bookingsearch").css('display', 'block');
            // $("#searchbar").css('display', 'none');
        });
        $('#closesearchbar').click(function() {
            $("#bookingsearch").css('display', 'none');
            $("#searchbar").css('display', '');
        });

        $('#nav-search').click(function() {
            $("#bookingsearch").css('display', 'block');
        });


        $('.timeslot').change(function() {

            var data = {
                'ArrivalDate': $('#ArrivalDate').val(),
                'DepartureDate': $('#DepartureDate').val(),
                'timeslot': $(this).val()
            }
             console.log(data);


             showfarmavail(data);
        });



        function showfarmavail(data) {
            var xhttp;
            if (data.length == 0) {
                document.getElementById("myid").innerHTML = "";
                return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var text = this.responseText.split('|');
                    // console.log(text[1].replace(/\\\//g, "/"));
                    var str = text[1].replace(/\\\//g, "/");
                    var done = str.replace(/\\"/g, '"');

                    // alert("abc");
                    $('#housename').html(done);
                    $('#housename1').html(done);
                    // $('#housename2').html(done);


                    // document.getElementById("houseeee").innerHTML = done;
                }
            };
            // alert(done);
            xhttp.open("POST", "Booking/check_booking_ajax", data);
            xhttp.send();
        }
        $('#housename').change(function() {
            var house = $(this).val();
            console.log(house);
            var data = {
                'HouseName': house,
            }
            $.ajax({
                url: 'check_book_price_ajax',
                method: 'post',
                data: data,
                success: function(data12) {
                    var person = data12.split('PersonUpto":"')
                    var personUpto = person[1].split('","Logo":"')
                    console.log(personUpto[0]);
                    $('#upto').val(personUpto[0]);
                    var data = data12.split('","Capacity":"')
                    var data = data[1].split('","')
                    var capacity = data[0].split('-')
                    $('#capacity').val(capacity[1]);
                    console.log(capacity[1]);
                    document.getElementById("myid").innerHTML = "Adults";
                    $("#myid").css('color', 'black');
                    $("#Adults").val('0');
                },
            });
        });

        $('#Adults').change(function() {
            document.getElementById("myid").innerHTML = "Adults";
            $("#myid").css('color', 'black');
            $('.btn.search-btn').prop("disabled", false);
            var adults = $(this).val();
            var capacity = $('#capacity').val();
            if (parseInt(adults) > parseInt(capacity)) {
                console.log(adults + ' are more then capacity' + capacity);
                document.getElementById("myid").innerHTML = 'Max Capacity is ' + capacity;
                $("#myid").css('color', 'red');
                // $('.btn.search-btn').prop("disabled", true);
            } else {
                console.log('good to do');
                $("#myid").css('color', 'green');

                document.getElementById("myid").innerHTML = "Go for Booking";
            }


        });








        $('#otps').hide();
        $('#emailotps').hide();
        $('#mobile').focusout(function() {
            var phonemsg = Math.random().toString(36).substring(7);
            var emailmsg = Math.random().toString(36).substring(7);
            var user = '923453077205';
            var pass = '2587';
            // console.log(phonemsg);
            // console.log(emailmsg);
            var mobile = $('#mobile').val().replace(/^.{1}/g, '92');
            var url = 'https://sendpk.com/api/sms.php?username=' + user + '&password=' + pass + '&mobile=' + mobile + '&sender=sender&message=' + phonemsg + '&format=json';
            // $.ajax({
            //     url: url,
            //     method: 'post',
            //     // data: data,
            //     dataType: 'json',
            //     success: function(data) {},
            // });
            alert('Verification Code has been send to your email and mobile number please verifiy it to proceed your booking process, Thanks');
            $.ajax({
                url: 'emailsend',
                method: 'post',
                data: {
                    'email': $('#email').val(),
                    'verification': emailmsg
                },
                dataType: 'json',
                success: function(data) {},
            });
            passs(phonemsg, emailmsg);
        });

        function passs(phonemsg, emailmsg) {
            $('#otps').show();
            $('#emailotps').show();
            $('#otps').keyup(function() {
                if (phonemsg == $('#opt').val()) {
                    $('#otps').hide();
                } else {
                    $('#otps').removeClass('disabled');
                    $('.btn-booking').hide();
                }
            });
            $('#emailopt').keyup(function() {
                if (emailmsg == $('#emailopt').val()) {
                    $('.btn-booking').show();
                    $('#emailotps').hide();
                    $('#otps').hide();
                } else {
                    $('#emailotps').removeClass('disabled');
                    $('.btn-booking').hide();
                }
            });
        }

        function checkotp(msg) {
            if (msg == opt) {
                alert('otp match');
            } else {
                alert('otp not match');
            }
        }
        $('.btn-booking').hide();
    });

    function showHint(str) {
        var xhttp;
        if (str.length == 0) {
            document.getElementById("myid").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var text = this.responseText.split('|');
                //   var res = str.replace('<\','<', text[1]);
                // var tt = text[1];
                document.getElementById("myid").innerHTML = text[1].replace(/\\"/g, '"');
                //   console.log(text[1]);
                if (text[1] == "Email Already register") {
                    $("#myid").addClass("text-danger  glyphicon-remove");
                    $("#myid").removeClass("text-success  glyphicon-ok");
                    $(".glyphicon-ok").fadeToggle("slow");
                    // $("#button").attr('disabled', true);
                }
                if (text[1] == "Email Available") {
                    $("#myid").addClass("text-success  glyphicon-ok");
                    $("#myid").removeClass("text-danger  glyphicon-remove");
                    $(".glyphicon-remove").fadeToggle("slow");
                    // $("#button").attr('disabled', false);
                }
            }
        };
        xhttp.open("GET", "Booking/check_email_avalibility?email=" + str, true);
        xhttp.send();
    }


        function getTotal() {
            var total = 0;
            $('.price').each(function() {
                total += parseInt(parseFloat(this.innerHTML))
            });
            $('#total').text("Rs " + total);
            $('#invtotal').text("Rs " + total);
            $('#BookedAmount').val(total);
        }
        getTotal();

        function calculate() {
            var cal = $('#totalPerson').val() - $('#totalPersoncc').val();
            $("#totalPersonas").text("Person Extra : " + parseFloat(cal));
            $('#personss').html(cal * 400);
            $('#invpersonss').html(cal * 400);
        }
        if (parseInt($('#totalPersoncc').val()) < parseInt($('#totalPerson').val())) {
            var cal = $('#totalPerson').val() - $('#capacity').val();
            $('#bookedAmount').val((cal * 400) + parseInt($('#discounted').val()));
        } else {
            $('#bookedAmount').val($('#discounted').val());
        }
        $("#totalPerson").keyup(function() {
            if (parseInt($('#totalPersoncc').val()) < parseInt($('#totalPerson').val())) {
                var cal = $('#totalPerson').val() - $('#totalPersoncc').val();
                $("#totalPersonas").text("Person Extra : " + parseFloat(cal));
                $('#pers').html('Extra Persons ' + cal + " x 400");
                $('#invpers').html('Extra Persons ' + cal + " x 400");
                $('#personss').html(cal * 400);
                $('#invpersonss').html(cal * 400);
            } else {
                var cal = 0;
                $("#totalPersonas").text("Person Extra : " + parseFloat(cal));
                $('#pers').html('Extra Persons ' + cal + " x 400");
                $('#invpers').html('Extra Persons ' + cal + " x 400");
                $('#personss').html(cal * 400);
                $('#invpersonss').html(cal * 400);
            }
            getTotal();
        });

    $(document).ready(function() {
        // modal pending
        $(document).on('show.bs.modal','#bookbypckg', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            // var package = button.data('package')
            var slotname = button.data('slotname')
            var package = $('#PackageID').val()
            $.ajax({
                method: "post",
                url: "<?php echo base_url(); ?>Admin/Functions/check_farm_by_pckg",
                data: {
                    package: package
                },
                dataType: "json",
                success: function(data) {

                    // var res = $.parseJSON(data);
                    // alert(res['farmhouses']);
                    console.log(data['farmhouses']);
                    $('#housename1').html(data['farmhouses']);
                    // alert(data['farmhouses']);

                }
            });
            var modal = $(this)
            modal.find('.modal-body .timeslot1').val(slotname)
            modal.find('.modal-body .timeslot').val(slotname)

            // modal.find('.modal-body .housename1').val(slotname)

         modal.find('.modal-body #Package').val(package)


        })




$(document).on('show.bs.modal','.bookbypckg', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            // var package = button.data('package')
            var slotname = button.data('slotname')
            var package = $('#PackageID').val()
            $.ajax({
                method: "post",
                url: "<?php echo base_url(); ?>Admin/Functions/check_farm_by_pckg",
                data: {
                    package: package
                },
                dataType: "json",
                success: function(data) {

                    // var res = $.parseJSON(data);
                    // alert(res['farmhouses']);
                    console.log(data['farmhouses']);
                    $('#housename1').html(data['farmhouses']);

                }
            });
            var modal = $(this)
            // modal.find('.modal-body .timeslot1').val(slotname)
            modal.find('.modal-body .timeslot4').val(slotname)

         modal.find('.modal-body #Package').val(package)


        })

        $('#housename1').change(function() {
            var house = $(this).val();
            var data = {
                'HouseName': house,
            }
            $.ajax({
                url: "<?php echo base_url(); ?>check_book_price_ajax",
                method: 'post',
                data: data,
                success: function(data12) {
                    var person = data12.split('PersonUpto":"')
                    var personUpto = person[1].split('","Logo":"')
                    console.log(personUpto[0]);
                    $('#upto1').val(personUpto[0]);
                    var data = data12.split('","Capacity":"')
                    var data = data[1].split('","')
                    var capacity = data[0].split('-')
                    $('#capacity1').val(capacity[1]);
                    console.log(capacity[1]);
                    document.getElementById("myid1").innerHTML = "Adults";
                    $("#myid1").css('color', 'black');
                    $("#Adults1").val('0');
                },
            });
        });





        $('#housename3').change(function() {
            var house = $(this).val();
            var data = {
                'HouseName': house,
            }
            $.ajax({
                url: "<?php echo base_url(); ?>check_book_price_ajax",
                method: 'post',
                data: data,
                success: function(data12) {
                    var person = data12.split('PersonUpto":"')
                    var personUpto = person[1].split('","Logo":"')
                    console.log(personUpto[0]);
                    $('#upto1').val(personUpto[0]);
                    var data = data12.split('","Capacity":"')
                    var data = data[1].split('","')
                    var capacity = data[0].split('-')
                    $('#capacity1').val(capacity[1]);
                    console.log(capacity[1]);
                    document.getElementById("myid1").innerHTML = "Adults";
                    $("#myid1").css('color', 'black');
                    $("#Adults1").val('0');
                },
            });
        });


// Taimoor code //
        $('#housename4').change(function() {
            var house = $(this).val();
            var data = {
                'HouseName': house,
            }
            $.ajax({
                url: "<?php echo base_url(); ?>check_book_price_ajax",
                method: 'post',
                data: data,
                success: function(data12) {
                    var person = data12.split('PersonUpto":"')
                    var personUpto = person[1].split('","Logo":"')
                    console.log(personUpto[0]);
                    $('#upto2').val(personUpto[0]);
                    var data = data12.split('","Capacity":"')
                    var data = data[1].split('","')
                    var capacity = data[0].split('-')
                    $('#capacity2').val(capacity[1]);
                    console.log(capacity[1]);
                    document.getElementById("myid2").innerHTML = "Adults";
                    $("#myid2").css('color', 'black');
                    $("#Adults2").val('0');
                },
            });
        });
        // End Taimoor code

        // Taimoor Code //
        $('#Adults2').change(function() {
            document.getElementById("myid2").innerHTML = "Adults";
            $("#myid2").css('color', 'black');
            $('.btn.search-btn').prop("disabled", false);
            var adults = $(this).val();
            var capacity = $('#capacity2').val();

            if (parseInt(adults) > parseInt(capacity)) {
                console.log(adults + ' are more than capacity' + capacity);
                document.getElementById("myid2").innerHTML = 'Max Capacity is ' + capacity;
                $("#myid2").css('color', 'red');
                // $('.btn.search-btn').prop("disabled", true);
            } else {
                console.log('good to do');
                $("#myid2").css('color', 'green');

                document.getElementById("myid2").innerHTML = "Go for Booking";
            }
        });
        // End Taimoor Code //







        $('#Adults1').change(function() {
            document.getElementById("myid1").innerHTML = "Adults";
            $("#myid1").css('color', 'black');
            $('.btn.search-btn').prop("disabled", false);
            var adults = $(this).val();
            var capacity = $('#capacity1').val();
            if (parseInt(adults) > parseInt(capacity)) {
                console.log(adults + ' are more than capacity' + capacity);
                document.getElementById("myid1").innerHTML = 'Max Capacity is ' + capacity;
                $("#myid1").css('color', 'red');
                // $('.btn.search-btn').prop("disabled", true);
            } else {
                console.log('good to do');
                $("#myid1").css('color', 'green');

                document.getElementById("myid1").innerHTML = "Go for Booking";
            }


        });
        // ----end----///
    });

    // $('select').selectpicker();
    // date function below
    $(function() {
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();
        var minDate = year + '-' + month + '-' + day;
        $("input[type='date']").attr('min', minDate);
    });

    //// ibrahim ajax requestss //////////////Farmhouseâ€œ


    // $('#advance_btn_check').click(function() {
    //     alert('ssss');
    //                 $('.filter-option pull-left').each(function() {
    //     var rate = $(this).text();
    //      if (rate == 0) {
    //          alert(rate);
    //     }
    // });
    // });



    $('.form-control.validate').change(function() {
        var count = 0;
        $('.filter-option.pull-left').each(function() {
            var rate = $(this).text();
            if (rate == "Nothing selected") {
                // console.log('plsease select any');
                count++;
            }
        });
        console.log(count);
        if (count == 12) {

            $('#advance_btn_check').prop("disabled", true);
        }

    });




    $('.selectpicker').click(function() {
        var count = 0;
        alert("ddd");

    });



    function myfunc() {
        $('#advance_btn_check').prop("disabled", false);
    }
</script>

</body>
</html>
