 
<!DOCTYPE html>
<html>

<head>
    <title>Employee Target Report</title>
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

<?php echo "Date:  " . date("Y/m/d"); ?>
<section class="container-fliud"  style="margin-top:0px;">



    <div class="row" style="margin-top:-0px;">
        <div class="col-sm-12" style="margin-top:-0px;">
         
    
 <div class="row" style="background-color:;height:100px; 
 margin-top:0px; color:#fff; 
 width: 101% !important;display: inline-block;">

<!--   <div>
 <img src="<?php base_url(); ?>assets/images/logo.png" style=" display: inline; float: right; padding-top: 10px">
</div> -->
 <div style="margin-top: -25px;"> 
<h3 style="text-align: center;  vertical-align: top; padding-top: 15px  !important; font-size: 28px; color:#000; font-weight: bold;">Coco Farmhouse</h3>
<h3 style="text-align: center;  vertical-align: top; padding-top:-20px  !important; font-size: 22px; color:#000; font-weight: bold;">Lots of fun & entertainment in a healthy environment.</h3>


 
</div>
<!-- <?php //echo "<h1 style='color:#000;'>". $v->ID . "</h1>"; ?> -->



</div>


 <div class="col-sm-12" style="color:#000; font-size:15px; margin-left:1%; 
 padding-bottom: 10px !important;">  
                    
</div>
 

               

</div>

<h3 style="text-align: center;  vertical-align: top; padding-top:-25px  !important; font-size: 22px; color:#000; font-weight: bold; text-decoration: underline;">Employee Target Report</h3>

<br>



<table id="customers" style=" margin-top:-20px; display:table;">

<thead style="color:black;font-size:12px;"  style="margin-top:0px; display:table;">
<tr>
<th scope="col" style="font-size: 12px; margin-top:-20;text-align: center;">#</th>
<!-- <th scope="col" style="font-size: 12px; margin-top:-20;text-align: center;">Id</th>
<th scope="col" style="font-size: 12px; margin-top:-20;text-align: center;">Employee ID</th> -->
<th scope="col" style="font-size: 12px; text-align: center;  ">Name</th>
<th scope="col" style="text-align:center;font-size: 12px;   ">Email </th>
<th scope="col" style="text-align:center;font-size: 12px; ">Target Month</th>
<th scope="col" style="text-align:center;font-size: 12px;   ">Target Amount</th>
<th scope="col" style="text-align:center;font-size: 12px;  ">Bookings </th>
<th scope="col" style="font-size: 12px; text-align: center;  ">Booked Amount</th>
<th scope="col" style="font-size: 12px; text-align: center; ">Balanced Target</th>
<th scope="col" style="font-size: 12px; text-align: center; ">Target Achieved %</th>


</tr>

</thead>

<tbody>
  <?php 
  $no = 1;
 foreach ($emp_target as $repo) {
  ?>

    <tr>
        
      <th scope="row" style="text-align: center; font-size: 18px; "><?php echo $no++; ?></th> 
    <!--   <td style="text-align: center; font-size:13px;"> <?php echo $repo['id']; ?> </td> 
      <td style="text-align: center; font-size:13px;">  <?php echo $repo['EmployeeID']; ?>  </td> -->
      <td style="text-align: center; font-size:13px;">  <?php echo $repo['name']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $repo['email']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $repo['TargetMonth']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $repo['TargetAmount']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $repo['NoOfBooking']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $repo['BookedAmount']; ?>  </td>
      <td style="text-align: center; font-size:13px;">  <?php echo $repo['BalanceTarget']; ?>  </td>
      <?php $target_achieved= ($repo['BookedAmount'] / $repo['TargetAmount'])*100 ?>
  <td style="text-align: center; font-size:13px;"><?php echo number_format((float)$target_achieved,2,'.','' ); ?>  %</td>
      



       

    </tr>
 
  <?php } 

  ?>

 </tbody>
                
              </table>

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
