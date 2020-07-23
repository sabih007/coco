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

img {
    width: 100%;
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
                    

               <div class="row clearfix" style=" margin-top: -100px;">
                   <div class="col-md-12 col-sm-12 ">
                   <img style="    width: 100%;"  src="<?php echo base_url(''); ?>public/assets/img/invoice.png" alt="">
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
    <div class="row" style="text-align: right; padding: 0px 0px 0px 0px">
                                                        <div class="col-md-12 col-sm-12" style="float:right; width:100%;">
                                                            <h5>شرائط و ضوابط</h5>
 <p>
 <p>   <span style="float: right;">&nbsp;-1</span>بکنگ کے وقت کیش ایڈوانس 50% اور 50% سات دن سے پہلے جمع کروائیں، اگر 6دن پہلے تک بقایا رقم جمع نہیں ہوئی تو بکنگ منسوخ سمجھی جائے گی۔ ایڈوانس قابل واپسی نہیں ہوگا۔</p>

<span style="float: right;">&nbsp;-2</span> داخلے کے وقت بکنگ فارم دیکھائیں با صورت دیگر اندر آنے کی اجازت نہیں ہوگی۔ 10سے زیادہ افرادکی اجازت آفس سے لینی ہوگیاور پیمنٹ کرنی ہوگی اور 10 افراد سے کم ہونے کی صورت میں 400روپے فی فردچارجز ادا کرنے ہونگے۔<p>
</p>

<span style="float: right;">&nbsp;-3</span> کسٹمر کی آسانی کے لئے زیر استعمال اشیاء کی لسٹ آفس میں معلوم کریں۔تاکہ بکنگ کے درمیان آپ کو تمام سہولیات میسر ہوں۔<p>
</p>

<span style="float: right;">&nbsp;-4</span> صحت و صفائی کی وجہ سے سوئمنگ کے اوقات۔۔۔۔سے۔۔۔۔ہونگے سوئمنگ پول میں حفاظتی اقدامات کسٹمر کی ذمہ داری ہے۔<p>
</p>

<span style="float: right;">&nbsp;-5</span> بجلی فیل ہونے یا والٹیج کے اتار چڑھاؤ کی صورت میں انتظامیہ آپ کے کسی بھی قسم کے سامان کی خرابی کی ذمہ دار نہیں ہوگی، جنریٹر سے بجلی مہیا کرنے کی صورت میں پنکھے اور لائٹس کے استعمال کی اجازت ہوگی۔<p>
      جنریٹر پر سرچ لائٹس اور ACنہیں چلے گا۔ جنریٹر کے اسٹارٹ ہونے میں کم از کم 15سے 30منٹ تک کی تاخیر ہوسکتی ہے۔ اور ہر 4گھنٹے کے بعد ایک گھنٹے کا ریسٹ جنریٹر کے لئے ضروری ہے۔
      جنریٹر میں ڈیزل کمپنی کی طرف سے مہیا کیا جائے گا۔ اچانک جنریٹر خراب ہونے کی صورت میں کسٹمر کو تعاون کرنا ہوگا۔ اور جنریٹر کے بغیر گزارہ کرنا ہوگا۔
</p>
<span style="float: right;">&nbsp;-6</span> کسٹمر کو کسی بھی غیر قانونی اور غیر اخلاقی حرکتوں کی اجازت نہیں ہے۔ با صورت دیگر انتظامیہ کو پورا حق حامل ہوگا کہ پکنک منسوخ کردیں اور کسی بھی قسم کی رقم واپس نہیں ہوگی۔<p>
</p>
<span style="float: right;">&nbsp;-7</span> فارم ہاؤس کی جانب مہیا کئے گئے سامان کے استعمال کا خاص خیال رکھیں توڑپھوڑ کے صورت میں ادائیگی قبل از روانگی کسٹمر کو کرنی ہوگی۔<p>
</p>
<span style="float: right;">&nbsp;-8</span>  فارم ہاؤس میں کسی قسم کا لین دین نہ کریں اور جانے سے پہلے اپنا سامان چیک کرلیں۔ انتظامیہ ذمہ دار نہیں ہوگی۔<p>
</p>
<span style="float: right;">&nbsp;-9</span> پکنک منسوخ ہونے کی صورت میں 15دن پہلے %50۔  14سے 7دن% 75۔ 7دن کے اندر% 90رقم منسوخ ہوجائے گی اور باقی رقم آگے مکنک میں منتقل ہوجائے گی۔<p>
</p>
<span style="float: right;">&nbsp;-10</span> میں نے فارم ہاؤس وزٹ کرلیا ہے یا میں بغیر وزٹ کے ہی مطمئن ہوں اور بک کرنا چاہتا ہوں لہٰذا مندرجہ بالا شرائط پڑھ، سن، سوچ سمجھ، دیکھ کر درست تسلیم کرنے کے بعد بقائمی ہوس و حواس خمسہ روبرو سائن کر رہا ہوں-۔ <p>
</p>
</p>
Sale Person Name ______________________________   Client Name ___________________________    P.T.O Location Map

                                                        </div>
                                          
                                                      
</div> 

            </div>
        </div>
    </div>
       
 
 <div class="row" style="padding-top: 5% !important">
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

                                                     <div class="row" style=" ">
                                                        <div class="col-md-6 col-sm-6" style="float:left; width:50%;">
                                                            <h3>  Charges (in case of missing or damage):  
                                                            </h3>
                                                            <div class="row">
<p>Ball Rs.40/- (of Hand Football game)</p>
<p>Carom Pieces/Coins each Rs.75/-, Striker Rs.400/-</p>
<p>Plate Rs.200/-</p>
<p>Rice Spoon Rs.200/-</p>
<p>Dish Rs.600/-</p>
<p>Tray Rs.600/-</p>
<p>BBQ Sticks Rs.100</p>
<p>Chair Rs.1800/-</p>
<p>Windows Net Rs.1000/-</p>
<p>Pan Peak cleaning & plenty Rs.500/-</p>
<p>Plants, Glass, Furniture, etc. shall be charged 60% above on market rate due to remote area.</p>
<p>I hereby agreed on the above terms & conditions.</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                             <h3>ضروری ہدایات</h3>
<p><span style="">&nbsp;1-</span> دوران پارٹی مالی کو گاس میں پانی دالنے کی اجازت ہے۔</p>
<p><span style="">&nbsp;2-</span> دوران پارٹی ڈرون کیمرہ استعمال نہیں ہوگا۔</p>
<p><span style="">&nbsp;3-</span> کسی بھی قسم کی فلیش لائٹ / لیزر لائیٹ / سرچ لائیٹ کا استعمال نہیں ہوگا۔</p>
<p><span style="">&nbsp;4-</span> ڈانس پاٹی نہیں ہوگی۔</p>
<p><span style="">&nbsp;5-</span>  کسی بھی قسم کی نشہ وار چیز کا استعمال نہیں ہوگا۔</p>
<p><span style="">&nbsp;6-</span> کسی بھی قسم کا آتش اسلحہ کی نمائش / آتش بازی نہیں کریں گے۔</p>
<p><span style="">&nbsp;7-</span>بہت زیادہ آواز میں میوزک بجانا منع ہے۔</p>
<p><span style="">&nbsp;8-</span> فارم ہاؤس پر داخل ہوکر تمام سہولیات کو چیک کرلیں، کسی وجہ سے سمجھ نہ آنے پر 15منٹ میں فارم ہاؤس خالی کردیں اور اپنی ادا کی ہوئی رقم کا 50% واپس لے سکتے ہیں۔  وقت مقرر 15منٹ میں فارم خالی نہ کرنے پر کسی بھی قسم کی ادائیگی ممکن نہیں۔</p>
 <p>میں تمام شرائط و ضوابط پر اتفاق رکھتا /رکھتی ہوں اور سائن کر رہا/رہی ہوں۔</p>
 <p style="float: right;"> _____________________ ستخظ۔ </p>                                                   
                                                             
                                                        </div>
                                                      
                                                    </div> 
         
 
 
 
 
        <br><br>
 <div class="row">
                 <img style=" height:100% !important;   width: 100%!important;" class="center" src="<?php echo base_url(''); ?>public/assets/img/map.jpg">
 </div>
  
                
</div>
    
 



 <script type="text/javascript">
      window.onload = function() { window.print(); }

       function load(){
        location.reload();

      }
 </script>