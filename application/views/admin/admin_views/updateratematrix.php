<style>
    .modal-body .col-sm-3 {
        padding: 7px;
    }
</style>
<div class="nest">
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
                            <button id="<?php echo $slotrate['SlotName']; ?>" type="button" class="btn btn-success <?php echo ($slotrate['SlotStatus'] == 1 && $slotrate['SlotName'] == 'PEAK') ? "1" : ""; ?>" value="<?php echo $slotrate['RateSlots']; ?>"><?php echo $slotrate['SlotName']; ?></button>
                        <?php  } else { ?>
                            <button id="<?php echo $slotrate['SlotName']; ?>" type="button" class="btn btn-warning<?php echo ($slotrate['SlotStatus'] == 1 && $slotrate['SlotName'] == 'PEAK') ? "1" : ""; ?>" value="<?php echo $slotrate['RateSlots']; ?>"><?php echo $slotrate['SlotName']; ?></button>
                        <?php } ?>
                    <?php } ?>
                </div>
        <?php
            }
        }
        ?>
        <!-- <?php
                foreach ($rateslot as $slotrate) {
                    if ($slotrate['SlotStatus'] == '1') {
                        ?>
                <div class="col-md-6 align-left" style="font-size: 22px; font-weight: bold; margin-top: 9px;">
                    <?php
                            echo $slotrate['SlotName'] . ' Rates <small>( ' . $slotrate['SlotPeriod'] . ' )</small>';
                            ?>
                </div>
                <div class="titleClose text-right">
                    <button id="PEAK" type="button" class="btn btn-warning<?php echo ($slotrate['SlotStatus'] == 1 && $slotrate['SlotName'] == 'PEAK') ? "1" : ""; ?>" value="PEAK">PEAK</button>
                    <button id="MIDPEAK" type="button" class="btn btn-warning<?php echo ($slotrate['SlotStatus'] == 1 && $slotrate['SlotName'] == 'MIDPEAK') ? "1" : ""; ?>" value="MIDPEAK">MIDPEAK</button>
                    <button id="OFFPEAK" type="button" class="btn btn-warning<?php echo ($slotrate['SlotStatus'] == 1 && $slotrate['SlotName'] == 'OFFPEAK') ? "1" : ""; ?>" value="OFFPEAK">OFFPEAK</button>
                    <button id="RAMZAN" type="button" class="btn btn-warning<?php echo ($slotrate['SlotStatus'] == 1 && $slotrate['SlotName'] == 'RAMZAN') ? "1" : ""; ?>" value="RAMZAN">RAMZAN</button>
                </div>
                <br><br><br>
                <button class="btn btn-info btn-lg" style="display:none;">
                    <h5 id="Slotid"><?php echo $slotrate['ID']; ?></h5>
                </button>

        <?php
            }
        }
        ?> -->
    </div>
    <div class="body-nest">
        <div class="">
            <div class="panel-body">
                <!-- <button class="btn btn-info btn-lg" style="float:right;">
                    <h4>Update PEAK Rates</h4>
                </button> -->
                <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead class="thead">
                        <tr>
                            <th style="display:none;">COCO</th>
                            <th style="display:none;">COCO</th>
                            <th>COCO</th>
                            <th>Mon to Thu</th>
                            <th>Mon to Thu</th>
                            <th>Mon to Thu</th>
                            <th>Fri to Sat</th>
                            <th>Fri to Sat</th>
                            <th>Fri to Sat</th>
                            <th>Sat to Sun</th>
                            <th>Sat to Sun</th>
                            <th>Sat to Sun</th>
                        </tr>
                        <tr>
                            <th class="tblecolorth" rowspan="3" colspan="">
                                <div id="logo">
                                    <h1>COCO</h1>
                                </div>
                                <!-- <img src="<?php base_url() ?>public/assets/img/logo.png" /> -->
                            </th>
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

                    </thead>
                    <tfoot>
                        <th>COCO</th>
                        <th style="display:none;">COCO</th>
                        <th style="display:none;">COCO</th>
                        <th>09-Hours (8AM to 5PM)</th>
                        <th>11-Hours (8PM to 7AM)</th>
                        <th>21-Hours (8PM to 5PM)</th>
                        <th>11-Hours (8PM to 7AM)</th>
                        <th>09-Hours (8AM to 5PM)</th>
                        <th>21-Hours (8PM to 5PM)</th>
                        <th>11-Hours (8PM to 7AM)</th>
                        <th>09-Hours (8AM to 5PM)</th>
                        <th>21-Hours (8PM to 5PM)</th>
                    </tfoot>

                    <tbody>
                        <?php
                        if (!empty($bookingrate)) {
                            $pckgid = 0;
                            foreach ($bookingrate as $record) {
                                if ($record['PackageID'] != $pckgid) {
                                    $pckgid = $record['PackageID']; ?>

                                    <tr>
                                        <td class="ID" style="display:none;"><?php echo $record['ID'] ?></td>
                                        <td class="PackageID" style="display:none;"><?php echo $record['PackageID'] ?></td>
                                        <td class="PackageName"><?php echo $record['PackageName'] ?></td>
                                        <td contenteditable class="table_data"><?php echo $record['WD_DayRates'] ?></td>
                                        <td contenteditable class="table_data"><?php echo $record['WD_NightRates'] ?></td>
                                        <td contenteditable class="table_data"><?php echo $record['WD_DayNightRates'] ?></td>
                                        <td contenteditable class="table_data"><?php echo $record['Fri_NightRates'] ?></td>
                                        <td contenteditable class="table_data"><?php echo $record['Saturday_DayRates'] ?></td>
                                        <td contenteditable class="table_data"><?php echo $record['Fri2Sat_DayNightRates'] ?></td>
                                        <td contenteditable class="table_data"><?php echo $record['Saturday_NightRates'] ?></td>
                                        <td contenteditable class="table_data"><?php echo $record['Sunday_DayRates'] ?></td>
                                        <td contenteditable class="table_data"><?php echo $record['Sat2Sun_DayNightRates'] ?></td>

                                    </tr>



                                <?php }
                                        ?>

                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <form action="updateratematrix" method="post">
                    <div class="modal-body">
                        <h3>Update Rate Matrix</h3>
                        <div class="form-group">
                            <div class="row">

                                <div class="col-sm-3">
                                    <label for="">Row ID</label>
                                    <input type="text" class="form-control" name="ID" id="ID" placeholder="" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Peak</label>
                                    <input type="text" class="form-control" name="Peak" id="Peak" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Package Id</label>
                                    <input type="text" class="form-control" name="Package_Id" id="Package_Id" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Day Slot</label>
                                    <input type="text" class="form-control" name="Day_Slot" id="Day_Slot" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">Time Slot</label>
                                    <input type="text" class="form-control" name="Time_Slot" id="Time_Slot" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">OLD Price</label>
                                    <input type="text" class="form-control" name="oldPrice" id="oldPrice" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">New Price</label>
                                    <input type="text" class="form-control" name="newPrice" id="newPrice" placeholder="New Price">
                                </div>


                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="sumbit" class="btn btn-primary" id="updatest">Update</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $(document).on('blur', '.table_data', function() {
            var Price = ($(this).text());
            var Slotid = $(".btn.btn-success ").val();
            Slotid = parseInt(Slotid);
            var $this = $(this);
            var ID = $(this).parent("tr").find("td:eq(0)").text();
            var pckgid = $(this).parent("tr").find("td:eq(1)").text();
            var Day_Slot = ($this.closest('table').find('th').eq($this.index()).text());
            var Time_Slot = ($this.closest('table').find('tfoot th').eq($this.index()).text());
            var slot_name = $('.btn.btn-warning1').val();
            $('#ID').val(ID)
            $('#Peak').val(Slotid)
            $('#Package_Id').val(pckgid)
            $('#Day_Slot').val(Day_Slot)
            $('#Time_Slot').val(Time_Slot)
            $('#oldPrice').val(Price)
            updateratemt(Slotid, pckgid, Day_Slot, Time_Slot, Price, slot_name);
        });

        function updateratemt(Slotid, pckgid, Day_Slot, Time_Slot, Price, slot_name) {
            $.ajax({
                url: "User/updateratemt",
                dataType: "JSON",
                method: 'post',
                data: {
                    Slotid: Slotid,
                    pckgid: pckgid,
                    Day_Slot: Day_Slot,
                    Time_Slot: Time_Slot,
                    Price: Price
                },
                success: function(data) {
                    var Slotid = $(".btn.btn-success ").val();
                    $.ajax({
                        type: "post",
                        url: "ratechange",
                        data: Slotid,
                        dataType: "json",
                        success: function(response) {
                            location.reload();
                        }
                    });
                }
            });
        }
    });
</script>