<div class="row clearfix">
    <div class="col">
        <div class="nest b-r">
            <div class="title-alt " id="ratebtn">
                <?php
                foreach ($rateslot as $slotrate) {
                    if ($slotrate['SlotStatus'] == '1') {
                        ?>
                        <div class="col-md-6 align-left" style="font-size: 22px; font-weight: bold; margin-top: 9px;">
                            <?php
                                    echo $slotrate['SlotName'] . ' Rates <small>( ' . $slotrate['SlotPeriod'] . ' )</small>';
                                    ?>
                        </div>
                        <div class="titleClose text-right">
                            <?php foreach ($rateslot as $slotrate) {
                                        ?>
                                <?php if ($slotrate['SlotStatus'] == 1) { ?>
                                    <button id="PEAK" type="button" class="btn btn-success <?php echo ($slotrate['SlotStatus'] == 1 && $slotrate['SlotName'] == 'PEAK') ? "1" : ""; ?>" value="<?php echo $slotrate['RateSlots']; ?>"><?php echo $slotrate['SlotName']; ?></button>
                                <?php  } else { ?>
                                    <button id="PEAK" type="button" class="btn btn-warning<?php echo ($slotrate['SlotStatus'] == 1 && $slotrate['SlotName'] == 'PEAK') ? "1" : ""; ?>" value="<?php echo $slotrate['RateSlots']; ?>"><?php echo $slotrate['SlotName']; ?></button>
                                <?php } ?>
                            <?php } ?>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="body-nest">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table m-b-0 table-bordered text-center">
                            <thead class="thead">
                                <tr>
                                <tr>
                                    <th class="tblecolorth" rowspan="3" colspan="2">
                                        <div id="logo">
                                            <h1>COCO</h1>
                                        </div>
                                        <!-- <img src="<?php base_url() ?>public/assets/img/logo.png" /> -->
                                    </th>
                                    <th class="tblecolorth" rowspan="3">Capacity</th>
                                    <th class="tblecolorth" rowspan="3">Person Upto</th>
                                    <th class="tblecolorth" rowspan="3">ACTUAL RATES</th>
                                    <th class="weekday" colspan="3" scope="colgroup">WORKING DAYS<span><br>upto 70%
                                            off</span>
                                    </th>
                                    <th class="frisat" colspan="3" scope="colgroup">FRIDAY TO SATURDAY<span><br>upto 60%
                                            off</span></th>
                                    <th class="weekend" colspan="3" scope="colgroup">SATURDAY TO SUNDAY<span><br>upto
                                            50%
                                            off</span></th>
                                </tr>
                                <tr>
                                    <th class="fx tblecolorth" colspan="3">MONDAY TO THURSDAY</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup">FRI-NIGHT</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup">SATURDAY</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup">FRI-SAT</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup">SAT-NIGHT</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup">SUNDAY</th>
                                    <th class="fx tblecolorth" colspan="1" scope="colgroup">SAT-SUN</th>
                                </tr>
                                <tr>
                                    <th class="fx tblecolorth" scope="col">DAY (9Hrs) 8am to 5pm</th>
                                    <th class="fx tblecolorth" scope="col">NIGHT (11Hrs) 8pm to 7am</th>
                                    <th class="fx tblecolorth" scope="col">DAY-NIGHT (21Hrs)</th>
                                    <th class="fx tblecolorth" scope="col">NIGHT (11Hrs) 8pm to 7am</th>
                                    <th class="fx tblecolorth" scope="col">DAY (9Hrs) 8am to 5pm</th>
                                    <th class="fx tblecolorth" scope="col">DAY-NIGHT (21Hrs)</th>
                                    <th class="fx tblecolorth" scope="col">NIGHT (9Hrs) 8pm to 7am</th>
                                    <th class="fx tblecolorth" scope="col">DAY (9Hrs) 8am to 5pm</th>
                                    <th class="fx tblecolorth" scope="col">DAY-NIGHT (21Hrs)</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                $j = 1;
                                foreach ($bookingrate as  $bookrate) {
                                    if ($j == 1) {
                                        $cat = $bookrate['PackageID'];
                                        $i = 1;
                                        $j = 0;
                                    }
                                    if ($bookrate['PackageID'] == $cat) { } else {
                                        $cat = $bookrate['PackageID'];
                                        $i = 1;
                                    }
                                    if ($i == 1) {
                                        $cat = $bookrate['PackageID'];
                                        echo ' <tr><th class="textwrap" rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">CATEGORY-' . $bookrate['PackageID'] . '</th>';
                                        echo ' <td class="textwrap">' . $bookrate['HouseName'] . '</td>';
                                        echo ' <td>' . $bookrate['Capacity'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">' . $bookrate['PersonUpto'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">Rs' . $bookrate['ActualRates'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">Rs' . $bookrate['WD_DayRates'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">Rs' . $bookrate['WD_NightRates'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">Rs' . $bookrate['WD_DayNightRates'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">Rs' . $bookrate['Fri_NightRates'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">Rs' . $bookrate['Saturday_DayRates'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">Rs' . $bookrate['Fri2Sat_DayNightRates'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">Rs' . $bookrate['Saturday_NightRates'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">Rs' . $bookrate['Sunday_DayRates'] . '</td>';
                                        echo ' <td rowspan="' . array_count_values(array_column($bookingrate, 'PackageID'))[$bookrate['PackageID']] . '">Rs' . $bookrate['Sat2Sun_DayNightRates'] . '</td></tr>';
                                        $i = 0;
                                    } else {
                                        echo ' <tr><td class="textwrap" >' . $bookrate['HouseName'] . '</td>';
                                        echo ' <td>' . $bookrate['Capacity'] . '</td></tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>