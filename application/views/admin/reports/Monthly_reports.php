 

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
              <form method="post" action="<?php echo base_url()."user/Monthly_pdf_report" ?>" target="_blank">
 
            </select>
 
 
 


  <br>
<label style="font-size: 16px;">Select Monthly</label>
 <select name="House_Monthly" id="" class="form-control"  required>
            
            <?php
       for ($i = 1; $i <= 12; $i++) {
                                    $month = date("F", mktime(0, 0, 0, $i, 1, date("Y")));
                           
                                        echo '<option value="' . $i . '">' . $month . '</option>';
                                }   ?>
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

 