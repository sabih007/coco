<div class="nest">
    <style type="text/css">
    table.dataTable thead>tr>th.sorting {
        padding-right: 0px;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 10px 10px !important;
    line-height: 1.428571429;
    vertical-align: top !important;
    border-top: 1px solid #ddd;
    /*overflow-x: scroll;*/
}

.body-nest{
    overflow-x: scroll!important;
}
.con{
    width: 200px!important;
    height: 40px!important;
}
#msg{
    color:black!important;
    padding:5px!important; 
}
div#example_paginate {
    margin-right: -99rem!important;
}


    </style>
    <div class="title-alt">
        <h6>Booked List</h6>
        <div class="titleClose">
            <button type="button" class="  btn btn-success">
                <a href="<?php echo base_url(); ?>addNew_booking">Add Booking</a></button>
        </div>
    </div>

    <div class="body-nest">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered table-responsive">
                <thead class="thead text-center py-2">
                    <tr>
                        <!-- <th>id</th> -->
                        <th>House Name</th>
                        <th>Invoice #</th>

                        <th>Arrival<br>Date</th>
                        <th>Departure<br>Date</th>
                        <th>Booking<br>Person</th>
                        <th>Total<br>Person</th>
                        <th>Excess<br>Person</th>
                        
                        <th>Mobile<br>No</th>

                        <th>Company<br>Name</th>
                        <th>Source<br>Reference</th>
                        <th>Whatsapp<br>No</th>

                        <th>Cnic<br>No</th> 
                        <th style="width:10px  !important; ">Email</th>
                        <th>Further Discounted</th>
                        <th>Payable</th>
                        <th>Received</th>
                        <th>Booked<br>Amount</th>
                        <th>Discount</th>
                        <th>Status</th>
                        <th>Cancellation Reason</th> 
                        <th class="text-center">Actions</th>



                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(!empty($bookingRecords))
                    {
                        foreach($bookingRecords as $record)

                            
                        { $invoice =date("my",strtotime($record->DepartureDate))."-".$record->HouseID."-".sprintf("%04d",$record->BookingID);
                    ?>
                    <tr>
                        <!-- <td><?php echo $record->BookingID ?></td> -->
                        
                        <td><?php echo $record->HouseName ?></td>
                        <td><?php echo  $invoice ?>
                        </td>
                        <td><?php echo $record->ArrivalDate ?></td>
                        <td><?php echo $record->DepartureDate ?></td>
                        <td><?php echo $record->BookingPerson ?></td>
                         <td><?php echo $record->TotalPerson ?></td>
                         <td><?php if ($record->TotalPerson>$record->PersonUpto){
                            echo $record->TotalPerson-$record->PersonUpto;}
                            else{
                                echo 0;
                            }
                          ?></td>
                         
                        <td><?php echo $record->ContactNo ?></td>

                        <td><?php echo $record->CompanyName ?></td>
                        <td><?php echo $record->SourceReference ?></td>
                        <td><?php echo $record->whatsappNo ?></td>

                        <td><?php echo $record->Cnic ?></td>
                        <td style="width: 10px !important; "> <?php echo $record->Email ?> </td>
                        <td><?php echo $record->FurtherDiscount ?></td>
                        <td><?php echo $record->payable ?></td>
                        <td><?php echo $record->advanceamount ?></td>
                        <td><?php echo $record->BookedAmount ?></td>
                        <td><?php echo $record->Discount ?></td>
                        <td class="disable"><?php echo $record->Status ?></td>
                        <td> <?php echo $record->cancel_reason ?> </td>
                        <!--  <td><form><input type="text" name="Message" placeholder="Reason" id="msg" required ><?php echo $record->CancellationReason ?></form></td>  -->

                        <td>
                            <div class="container con">
                        <a data-toggle="modal" data-target="#exampleModal" data-invoice="<?php echo $invoice ?>"
                                data-bookingid="<?php echo $record->BookingID ?>"
                                data-bookedamounts="<?php echo $record->BookedAmount ?>"
                                data-advanceamount="<?php echo $record->advanceamount ?>"
                                data-payable="<?php echo $record->payable ?>"><i
                                    class="btn btn-sm round btn-outline-success fa fa-edit"></i></a>


                         <!--    <a href="invoice/<?php echo $record->BookingID ?>"><i class="btn btn-sm round btn-outline-success fa fa-check"></i></a> -->
                            <a href="<?php echo base_url('/invoice/'.$record->BookingID); ?>/"> 
                                <i class="btn btn-sm round btn-outline-success fa fa-eye"></i></a>
 <?php if ($this->session->userdata('role') == 1) {?>
                            <a href="<?php echo base_url('/booking_delete/'.$record->BookingID); ?>/"> 

                                  <i class="btn btn-danger icon icon-trash"></i></a>
<!-- 
                        <a href="<?php echo base_url('/booking_cancel/'.$record->BookingID); ?>/"> 
                            <i class="btn btn-secondary icon icon-cross"></i></a> -->

                            <a  data-toggle="modal" data-target="#exampleModal2" data-invoice="<?php echo $invoice ?>"
                                data-bookingid="<?php echo $record->BookingID ?>"
                                data-bookedamounts="<?php echo $record->BookedAmount ?>"
                                data-advanceamount="<?php echo $record->advanceamount ?>"
                                data-payable="<?php echo $record->payable ?>"><i
                                    class="btn btn-secondary icon icon-cross"></i></a>







                       <?php }?> 
                       
                    </td>
                    </tr>
                    <?php  }}
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title col-sm-8" id="exampleModalLabel">Update Functionarea</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="updatepending" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="BookingID" id="BookingID"
                                placeholder="BookingID" style="display:none;">
                            <label for="Level_id" class="col-form-label">Booked Amount</label>
                            <input type="text" class="form-control" name="BookedAmount" id="bookedamounta"
                                placeholder="payable" readonly />
                            <label for="Level_id" class="col-form-label">Payable Amount</label>
                            <input type="text" class="form-control" name="payable" id="payablecal" placeholder="payable"
                                readonly />


                            <label for="Level_id" class="col-form-label">Pay</label>
                            <input type="text" class="form-control" name="advanceamount" id="bookedamounts"
                                placeholder="BookedAmount" min="0" style="background-color: #fbf5f5;">
                            <span class="msg"></span>
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






   <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title col-sm-8" id="exampleModalLabel">Booking Cancellation</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="bk_cancel_reason" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="BookingID" id="BookingID"
                                placeholder="BookingID" style="display:none;">
                           <!--  <label for="Level_id" class="col-form-label">Booked Amount</label>
                            <input type="text" class="form-control" name="BookedAmount" id="bookedamounta"
                                placeholder="payable" readonly />
                            <label for="Level_id" class="col-form-label">Payable Amount</label>
                            <input type="text" class="form-control" name="payable" id="payablecal" placeholder="payable"
                                readonly /> -->


                                <input type="text" style="display:  none;" class="form-control" name="Booking_id" id="BookingID"
                                placeholder="payable" readonly />


                            <!-- <label for="Level_id" class="col-form-label">Cancellation Reason</label> -->
                               <p>Cancellation Reason</p>
                            <!-- <input type="text" class="form-control" name="advanceamount" id="bookedamounts"
                                placeholder="BookedAmount" min="0" style="background-color: #fbf5f5;"> -->


                                

            <textarea id="w3mission" rows="7" cols="40" style="background-color: #fbf5f5;" name="cancel_reason">
                    
                            </textarea>


                            <span class="msg"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary" id="updatest">Cancel Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>






















</div>