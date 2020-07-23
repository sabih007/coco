 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
 
    <section class="content-header">
      
        <!--<h1>-->

        <br>
       


        <div class="row">

            <div class="col-md-2">
                <div class="col-md-12">
                   
                       
                </div>
            </div>

                <div class="col-md-8">
                    <div class="box"style="background-color: silver; opacity:0.9;">
                        <div class="box-body">
                         <div class="col-md-12">
              <form method="post" action="<?php echo base_url()."user/Bookedby_pdf_report" ?>" target="_blank">
 
            </select>
 
 
 


  <br>
<label style="font-size: 16px;">Select The Role</label>
 <select name="roleId" id="" class="form-control"  required>
            <option value="">Select</option>
            <?php foreach ($booking as $key => $value) {?>
        <option value="<?php echo $value['roleId']; ?>"><?php echo $value['role']; ?></option>
            <?php }?>

     
  </select><br>

           
<input type="submit" value="Show Report" class="btn btn-warning">
</form>
</div>

</div>
</div>
</div>
 

            <div class="col-md-4">
                <div class="col-md-9">
                    
                </div>
            </div>
        </div>

                </form>

 


    </section>
    <br>
 

</div>

 