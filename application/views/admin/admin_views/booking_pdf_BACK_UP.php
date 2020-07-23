<style type="text/css">
    .tittle-middle-header {
    
    display: none !important; 
}

#paper-top {
    display: none !important; 
}

ul#breadcrumb {
   display: none !important; 
}

#footer{
     display: none !important;  
}
</style>
<br><br><br> 
<div  class="pbox"  >
 
    <div class="row clearfix" >
        <div class="col-md-12 ">
            <div class="">
 
 
     <button onclick="load()" class="btn btn-primary">Print</button>
 <br> 
                <table class="table  table-bordered" >
                    <thead>
                        <tr>
                            <th>Booking details</th>
                            <th colspan="2">Billing address</th>
                        </tr>
                    </thead>
                    

               <div class="row clearfix" style=" margin-top: -60px;">
                   <div class="col-md-12 col-sm-12 ">
                   <img style="    width: 80%;"  src="<?php echo base_url(''); ?>public/assets/img/invoice.png" alt="">
                    </div>
                  
                                                </div>
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
                                Company : <strong id="member"><?php echo $invoicedata[0]['Occupation']; ?></strong><br>
                            </td>
                        </tr>
                        <tr>
                            <th>Room</th>
                            <th>Persons</th>
                            <th class="text-center">Total <small>( in RS
                                    )</small></th>
                        </tr>
                        <tr>
                            <input type="hidden" name="HouseID" id="HouseID" invoicedata[0]="<?php echo $invoicedata[0]['HouseID']; ?>" />
                            <td><?php echo $invoicedata[0]['Name']; ?></td>
                            <?php
                            $persons = $invoicedata[0]['TotalPerson'];
                            $cap = explode('-', $invoicedata[0]['Capacity']);
                            $extraperson = $persons - $cap[1];
                            ?>
                            <td><?php echo $cap[1]; ?></td>
                            <td class="text-right invprice" width="15%"> <?php echo $invoicedata[0]['BookedAmount']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-right" id="invpers">
                                Extra persons <?php echo $extraperson . ' X 400';
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
                                <?php $BookedAmount = $invoicedata[0]['BookedAmount'];
                                $discounted = $BookedAmount - $extrapamount;
                                echo $discounted; ?>
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
                 <img style="    border: solid black; margin-top: -14px; padding: 0px 0px 0px 0px;  height:10% !important;   width: 100%!important;" class="center" src="<?php echo base_url(''); ?>public/assets/img/terms_conditions.jpeg">

            </div>
        </div>
    </div>
       
 <br>
 <div class="row">
                                                        <div class="col-md-6 col-sm-6" style="float:left; width:50%;">
                                                            <h3>  Available at Farm House:  
                                                            </h3>
                                                            <div class="row">
<p>1.  Basic Crockery (Large Plates (25), 3 Dishes, 3 Trays with Rice Spoon</p>
<p>2.  Gas Cylinder with Stove – 1kg Gas available good for 15 persons cooking. (Provide on demand)</p>
<p>3.  Barbeque Sticks (10 Nos.)</p>
<p>4.  Generator with Fuel.</p>
<p>5.  Deep Freezer</p>
<p>6.  Dispenser</p>
<p>7.  Hand Football Game will ball</p>
<p>8.  Carom with Striker set.</p>
<p>9.  Table Tennis with accessories.</p>



                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                             <h3>What to Bring:</h3>
<p>1.  Towels.</p>
<p>2.  Soaps.</p>
<p>3.  Mosquitoes Coil / Spray</p>
<p>4.  Music System, CD’s (Video or Audio) (Domestic use category)</p>
<p>5.  Coal & Bar B Q Sticks (if required)</p>
<p>6.  Games (Cards, Ludo, Scrabble, Chess, Badminton, Bat Ball, Foot Ball etc.)</p>
<p>7.  Water Sports, Tubes, Arm Support, Costumes</p>
<p>8.  Extra Mattress/Blanket (if required) in winter</p>
<p>9.  Water Bottles (19 Liters)</p>
<p>10. Tea Pot / Electric Kettle, Tea Milk, Sugar etc.</p>
<p>11. Disposable Glass & Cups. 12. Spoons 13. Any Others</p>                                                   
                                                             
                                                        </div>
                                                      
                                                    </div>  
         
 
 
 
 
        <br><br>
 <div class="row">
                 <img style=" height:100% !important;   width: 100%!important;" class="center" src="<?php echo base_url(''); ?>public/assets/img/map.jpeg">
 </div>
  
                
</div>
    
 



 <script type="text/javascript">
      window.onload = function() { window.print(); }

       function load(){
        location.reload();

      }
 </script>