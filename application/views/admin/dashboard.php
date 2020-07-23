    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-3 col-md-6 col-sm-6">

 <?php if ($this->session->userdata('role') == 1 || $this->session->userdata('role') == 2) {  ?>

            <div class="card  b-rb overflowhidden number-chart" id="bookedAmount">
                <div class="body">
                    <div class="number">
                        <h6>BOOKED AMOUNT</h6>
                        <span>Rs.<?php echo number_format($count['BookedAmount']); ?></span>
                    </div>
                    <small class="text-muted">Total Booked Amount</small>
                </div>
                <li>
                    <div class="linebar2">5,7,8,9,3,5,3,8,5</div>
                </li>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card  b-rb overflowhidden number-chart" id="recievableAmount">
                <div class="body">
                    <div class="number">
                        <h6>RECIEVABLE</h6>
                        <span>Rs.<?php echo number_format($count['recievable']); ?></span>
                    </div>
                    <small class="text-muted">Total Recievable Amount</small>
                </div>
                <li>
                    <div class="linebar">5,7,8,9,3,5,3,8,5</div>
                </li>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card  b-rb overflowhidden number-chart" id="recievedAmount">
                <div class="body">
                    <div class="number">
                        <h6>RECEIVED AMOUNT</h6>
                        <span>Rs.<?php echo $balance = number_format($count['BookedAmount'] - $count['recievable']); ?></span>
                    </div>
                    <small class="text-muted">Total Received Amount</small>
                </div>
                <li>
                    <div class="linebar2">9,7,8,9,5,9,6,8,7</div>
                </li>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card  b-rb overflowhidden number-chart" id="bookingStatus">
                <div class="body">
                    <div class="number">
                        <h6> <i class="fa fa-dot-circle-o"></i> Pending booking |
                            <?php echo $count['pending']; ?></h6>
                        <h6><i class="fa fa-check-square-o"></i> Completed booking |
                            <?php echo $count['completed']; ?></h6>
                    </div>
                    <small class="text-muted">Booking Status</small>
                </div>
                <li>
                    <div class="linebar3">5,7,8,9,3,5,3,8,5</div>
                </li>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card  b-g">
                <div class="card-header">
                    <h5>Bookings </h5>
                </div>
                <div class="body">
                    <ul class="list-unstyled list-referrals userdata">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="siteClose" class="nest">
                <div class="title-alt b-rb">
                    <h6>
                        <span class="entypo-book"></span>&nbsp;Booking</h6>
                    <div class="titleClose">
                        <a class="gone" href="#siteClose">
                            <span class="entypo-cancel"></span>
                        </a>
                    </div>
                    <div class="titleToggle">
                        <a class="nav-toggle-alt" href="#site">
                            <span class="entypo-up-open"></span>
                        </a>
                    </div>
                </div>
                <div id="site" class="body-nest" style="min-height:296px;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($rolescount as $value) {
                                    ?>
                                    <tr>
                                        <td class="armada-devider">
                                            <div class="armada">
                                                <span style="background:#65C3DF">
                                                    <span class="entypo-users"></span>&nbsp;&nbsp;<?php echo $value['role']; ?></span>
                                                <p>
                                                    <span class="icon icon-graph-pie"></span>&nbsp;<?php echo $value['count']; ?><i>Booking</i>&emsp;
                                                    <span class="entypo-money"></span>&nbsp;<i> Sales Amount </i> Rs.
                                                    <?php echo $value['booked']; ?>
                                                    <span class="entypo-money"></span>&nbsp;<i> Received Amount </i> Rs.
                                                    <?php echo $value['Advance']; ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="driver-devider">
                                            <img class="armada-pic img-circle" alt="" src="<?php echo base_url(); ?>public/assets/img/default.jpg">
                                            <h3><?php echo $value['name']; ?></h3>
                                            <br>
                                            <p><?php echo $value['mobile']; ?></p>
                                        </td>
                                        <td class="progress-devider">
                                            <section id="basic">
                                                <article>
                                                    <div class="number-pb">
                                                        <div class="bar" style="width:<?php
                                                                                            $percent = ($value['pay'] / $value['booked']) * 100;
                                                                                            echo  number_format($percent);
                                                                                            ?>%;"></div>
                                                        <div class="shownum" style="left:<?php echo  $percent; ?>%;">
                                                            <?php echo  number_format($percent); ?></div>
                                                    </div>
                                                </article>
                                            </section>
                                            <span class="label pull-left">Payable</span>
                                            <span class="label pull-right">Recieved</span>
                                        </td>
                                    </tr>
                                <?php  }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="siteCloses" class="nest">
                <div class="title-alt b-rb">
                    <h6>
                        <span class="entypo-book"></span>&nbsp;Analytics</h6>
                    <div class="titleClose">
                        <a class="gone" href="#siteCloses">
                            <span class="entypo-cancel"></span>
                        </a>
                    </div>
                    <div class="titleToggle">
                        <a class="nav-toggle-alt" href="#sites">
                            <span class="entypo-up-open"></span>
                        </a>
                    </div>
                </div>
                <div id="sites" class="body-nest" style="min-height:296px;">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="donut">Farm House Booking</h4>
                            <div id="m_donut_chart"></div>
                        </div>
                        <div class="col-md-4">
                            <h4 class="donut">Time Slots Booking</h4>
                            <div id="m_donut_chart1"></div>
                        </div>
                        <div class="col-md-4">
                            <h4 class="donut">Total User</h4>
                            <div id="m_donut_chart2"></div>
                        </div>
                        <!-- <div class="col-md-3">
                            <h4 class="donut">Farm House Booking</h4>
                            <div id="m_donut_chart3"></div>
                        </div> -->
                    </div>
                </div>
            </div>
             <?php } else{?>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <?php    } ?>

        </div>

    </div>

    <!-- <div class="row">
        <div class="col-lg-6">
            <div id="siteCloses" class="nest">
                <div class="title-alt b-rb">
                    <h6>
                        <span class="entypo-book"></span>&nbsp;Analytics</h6>
                    <div class="titleClose">
                        <a class="gone" href="#siteCloses">
                            <span class="entypo-cancel"></span>
                        </a>
                    </div>
                    <div class="titleToggle">
                        <a class="nav-toggle-alt" href="#sites">
                            <span class="entypo-up-open"></span>
                        </a>
                    </div>
                </div>
                <div id="sites" class="body-nest" style="min-height:296px;">
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                </div>
            </div>
        </div>
    </div> -->
