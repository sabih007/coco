 
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 2px;
}
 
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 9px;
  padding-bottom: 0px;
  text-align: left;
  background-color:#f2f2f2;
  color: black;
  vertical-align: top;
}


li {
    display: block;
    font-size: 10px;
    width: auto;
}
ul{
  padding: 0;
}

td{
  font-size:18px;
}

th{
   font-size:18px;
}
.testting{
  width: 12px;
  height: 15px;
border: 1px solid black;
}

th.row{font-weight: 400 !important;}

tr,th,td,table{border : 1px solid #1C2833 !important;}

</style>


       
</head>






<body>
<p style="color: black">Report Date: <?php 
  if (!empty($result))  {
  echo $result[0]['BookingDate']; 
}
?>
<p style="border:1px solid black; width: 100px; padding:2px;">MON-THU</p>
  <p style=" background:#ba9bac;border:1px solid black; width: 100px; padding:2px; margin-top: -15px !important;">FRI-SAT</p>
  <p style=" background:#8addff;border:1px solid black; width: 100px; padding:2px; margin-top: -15px !important">SAT-SUN</p>
  <p style=" background:#ffcccb;border:1px solid black; width: 100px; padding:2px; margin-top: -15px !important">Cancelled</p>



<section class="container-fliud"  style="margin-top:0px; ">



    <div class="row" style="margin-top:-0px;">
        <div class="col-sm-12" style="margin-top:-0px;">
         
    
 <div class="row" style="background-color:;height:100px; 
 margin-top:0px; color:#fff; 
 width: 101% !important;display: inline-block;">
 <span style=""> 
<!--   <div>
 <img src="<?php base_url(); ?>assets/images/logo.png" style=" display: inline; float: right; padding-top: 10px">
</div> -->
 <div style="margin-top: -25px;"> 
  

   </p>
<h3 style="text-align: center;  vertical-align: top; padding-top: 15px  !important; font-size: 28px; color:#000; font-weight: bold;">Coco Farmhouse</h3>
<h3 style="text-align: center;  vertical-align: top; padding-top:-20px  !important; font-size: 22px; color:#000; font-weight: bold;">Lots of fun & entertainment in a healthy environment.</h3>
 
</div>
<!-- <?php //echo "<h1 style='color:#000;'>". $v->ID . "</h1>"; ?> -->



</div>
</span>

 <div class="col-sm-12" style="color:#000; font-size:15px; margin-left:1%; 
 padding-bottom: 10px !important;">  
                     <br>
</div>
 

               

</div>



<br>



<table id="customers" style=" margin-top:-20px; display:table;">
<thead style="color:black;font-size:12px;"  style="margin-top:0px; display:table;">
<tr>

<th scope="col" style="   font-size: 12px; margin-top:-20;text-align: center;">#</th>
<th scope="col" style="  font-size: 12px; margin-top:-20;text-align: center;">Invoice No</th>
<th scope="col" style="font-size: 12px;  text-align: center;  ">House Name</th>
<th scope="col" style="text-align:center;font-size: 12px; width:80px;  ">Booking Date </th>
<th scope="col" style="text-align:center;  font-size: 12px; width:80px;   ">Arrival Date 
</th>
<th scope="col" style="text-align:center; font-size: 12px;   ">Departure Date
</th>
<th scope="col" style="text-align:center; font-size: 12px;  ">Booking For </th>
<th scope="col" style="font-size: 12px; text-align: center;  ">Total Person
</th>
<th scope="col" style="font-size: 12px; text-align: center; ">Time Slot </th>
<th scope="col" style="font-size: 12px;  text-align: center;">Person Name</th>
<th scope="col" style="font-size: 12px;  text-align: center;">Package Discount</th>
<th scope="col" style="font-size: 12px;   text-align: center;">Booked Amount</th>
<th scope="col" style="font-size: 12px;   text-align: center;">Received</th>
<th scope="col" style="font-size: 12px;  text-align: center;">Recievable</th>
<th scope="col" style="font-size: 12px;  text-align: center;">Booked By</th>


</tr>

</thead>

<tbody>
 <?php 
 $no = 1; 
$total_amount = 0;
$advanceamount = 0;
$payable = 0;
 foreach ($result as $k=>$v) {


if($v['Status']=='Cancelled'){
 $total_amount += 0;

 $advanceamount  += 0;  
 
 $payable += 0;  
 

}
else{

 $total_amount += $v['BookedAmount'];

 $advanceamount  += $v['advanceamount'];  
 
 $payable += $v['payable'];  

}
?>  

    <tr style="background-color:  <?php 

$dt = strtotime($v['ArrivalDate']);


$day = date("D", $dt);



 if($v['Status']=="Cancelled")
{
  echo "#ffcccb";
}

else if(strtoupper($day)=="FRI"){
  echo "#ba9bac";
}


else if(strtoupper($day)=="SAT")
{
  echo "#8addff";
}



else{
  echo"white";
}



    ?>
">
        
      <th scope="row" style="text-align: center; font-size: 18px; "><?php echo $no++; ?></th> 
      <td style="text-align: center; font-size:13px;">  <?php echo $v['Invoice_id']; ?> </td> 
      <td style="text-align: center; font-size:13px;">  <?php echo $v['HouseName']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['BookingDate']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['ArrivalDate']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['DepartureDate']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['BookingFor']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['TotalPerson']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['timeslot']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['BookingPerson']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['Package_discount']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['BookedAmount']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['advanceamount']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['payable']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $v['name']; ?>  </td>




       

    </tr>
 
  <?php } 

  ?>

 </tbody>
                
              </table>

                <!-- /.box-body -->
<p>Total Booked Amount: Rs <?php echo  $total_amount; ?> </p>
<p>Total Advance Amount: Rs <?php echo  $advanceamount; ?> </p>
<p>Total Payable Amount: Rs <?php echo  $payable; ?> </p>
            </div>
            <!-- /.box -->


        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</section>
 <!--<hr style="border: 3px solid black; margin-top: -4px;">-->
</body>
</html>