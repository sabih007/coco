<div class="pbox">
    <div class="row clearfix">
        <div class="col-md-12 col-sm-12 ">
            <img src="<?php base_url(''); ?>public/assets/img/invoice.png" alt="">
        </div>
        <div class="col-md-12 col-sm-12 text-right">
            <p class="m-b-0"><strong>Order Date:
                </strong><?php echo date('	m d y'); ?></p>
            <p class="m-b-0"><strong>Order Status: </strong> <span class="badge badge-warning m-b-0"><?php echo $invoicedata[0]['Status'] ?></span></p>
            <p><strong>Order ID: </strong> <?php echo $invoicedata[0]['Invoice_id'];  ?></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 ">
            <div class="">
                <?php if ($this->session->userdata('role') == 1) {
                    // print_r($invoicedata);
                    ?>

                    <a href="<?php echo base_url('Eidt_Booking/' . $invoicedata[0]['BookingID']); ?>">
                        <button class="btn btn-primary" id="formsubmit">Eidt Booking</button>
                    </a>
                <?php } ?>

                <a href="<?php echo base_url('Booking_pdf/' . $invoicedata[0]['BookingID']); ?>">
                    <button class="btn btn-primary">Print</button>
                </a>
                <table class="table  table-bordered">
                    <thead>
                        <tr>
                            <th>Booking details</th>
                            <th colspan="2">Billing address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Check in :
                                <strong><?php echo $invoicedata[0]['ArrivalDate']; ?></strong><br>
                                Check out :
                                <strong><?php echo $invoicedata[0]['DepartureDate']; ?></strong><br>
                                Booking For : <strong id="bokingfor"><?php echo $invoicedata[0]['BookingFor']; ?></strong><br>
                                Total Persons : <strong id="member"><?php echo $invoicedata[0]['TotalPerson']; ?></strong> Persons
                            </td>
                            <td id="sum1" colspan="2">
                                Name :
                                <strong><?php echo $invoicedata[0]['BookingPerson']; ?></strong><br>
                                Email :
                                <strong><?php echo $invoicedata[0]['Email']; ?></strong><br>
                                Address : <strong id="bokingfor"><?php echo $invoicedata[0]['Adress1']; ?></strong><br>
                                Mobile no : <strong id="member"><?php echo $invoicedata[0]['MobileNo']; ?></strong><br>
                                Company : <strong id="member"><?php echo $invoicedata[0]['CompanyName']; ?></strong><br>
                            </td>
                        </tr>
                        <tr>
                            <th>Room</th>
                            <th>Persons</th>
                            <th class="text-center">Total <small>( in RS )</small></th>
                        </tr>
                        <tr>
                            <input type="hidden" name="HouseID" id="HouseID" invoicedata[0]="<?php echo $invoicedata[0]['HouseID']; ?>" />
                            <td><?php echo $invoicedata[0]['Name']; ?></td>
                            <?php
                            $persons = $invoicedata[0]['TotalPerson'];
                            $cap = explode('-', $invoicedata[0]['Capacity']);
                            $extraperson = ($persons > $cap[1]) ? $persons - $cap[1] : 0;
                            ?>
                            <td><?php echo $cap[1]; ?></td>
                            <td class="text-right invprice" width="15%"> <?php echo $invoicedata[0]['BookedAmount']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-right" id="invpers">
                                Extra persons <?php echo $extraperson. " x 400";
                                                $extrapamount = $extraperson * 400;
                                                ?>
                            </th>
                            <td class="text-right invprice" id="invpersonss" width="15%">
                                <?php echo $extrapamount; ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-right" id="invpers">
                                Discounted Amount
                            </th>
                            <td class="text-right invprice" id="invpersonss" width="15%">
                                <?php
                                 echo $invoicedata[0]['totalDiscount'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-right" id="invpers">
                                Advance Amount
                            </th>
                            <td class="text-right invprice" id="invpersonss" width="15%">
                                <?php echo $invoicedata[0]['advanceamount']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-right" id="invpers">
                                Payable Amount
                            </th>
                            <td class="text-right invprice" id="invpersonss" width="15%">
                                <?php
                                if ($invoicedata[0]['payable'] == 0) {
                                    echo "PAID";
                                } else {
                                    echo $invoicedata[0]['payable'];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-right">Total (incl.
                                tax)</th>
                            <td class="text-right" width="15%" id='invtotal'>
                                <?php echo $invoicedata[0]['BookedAmount'] . '/='; ?></td>
                        </tr>
                    </tbody>
                </table>
                <div id="editor"></div>

            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 col-sm-12">
            <div class="row">
                <div class="col-md-3">
                    <h5><strong>Note: </strong></h5>
                </div>
                <div class="col-md-9">
                    <p><strong>"Gazated Holiday"</strong> will be Count or Charge @ <strong>Weekend</strong></p>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>