 <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
     <section class="content-header">
         <br>
         <div class="row">
             <div class="col-md-2">
                 <div class="col-md-12">
                 </div>
             </div>
             <div class="col-md-8">
                 <div class="box" style="background-color: silver; opacity:0.9;">
                     <div class="box-body">
                         <div class="col-md-12">
                             <form method="post" action="<?php echo base_url() . "user/AllRole_pdf_report" ?>" target="_blank">
                                 </select>
                                 <label style="font-size: 16px;">Select Role </label>
                                <select name="role" id="" class="form-control" required="">
                    <option value="">Select</option>
                    <?php foreach ($role as $key => $value) {?>
                         <option value="<?php echo $value['roleId'] ?>"><?php echo $value['role'] ?></option> 
                    <?php } ?>
                     
                    </select>
                                 <br>
                                 <label style="font-size: 16px;">Select Date </label>
                                 <input type="date" name="To"  class="form-control">
                               <br>
                                
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

 