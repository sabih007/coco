<style type="text/css">
 .form-control {   
        width: 50%;
    }
</style>
<div class="container-fluid">

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add Expenses</h2>
                        </div>
                        <div class="body">
  <form role="form" id="addUser" action="<?php echo base_url() ?>user/New_exp_add" enctype="multipart/form-data"  method="post" role="form">
                           <!--  <form id="basic-form" method="post" novalidate=""> -->
                                <div style="width:40%" class="form-group">

                                     <label>Expense Name</label>
                                    <input type="date" class="form-control parsley-error" name="ExpenseName"  required="" data-parsley-id="7"><ul class="parsley-errors-list filled" id="parsley-id-7">
                                        <li class="parsley-required">This value is required.</li></ul>
                                   <!--   ////////////   //////////// -->
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label  >Farmhouse House</label><br>
                                     <select name="HouseID">
                                <?php foreach ($location as  $value) {?>
                        <option name="HouseID" value="<?php echo $value['HouseID']; ?>"><?php echo $value['Name']; ?></option>
                              <?php } ?> 
                                     </select>
                                    </div>
                                    
                                </div>
                           <!--      //////////////////////////////////////// -->
                                    <label>Expense Type</label>
                                    <input type="text" class="form-control parsley-error" name="ExpenseType" required="" data-parsley-id="5">
                                    <ul class="parsley-errors-list filled" id="parsley-id-5">
                                        <li class="parsley-required">This value is required.</li></ul>
 

                                    <label>Expense Amount</label>
                                    <input type="number" class="form-control parsley-error" name="ExpenseAmount"  required="" data-parsley-id="7"><ul class="parsley-errors-list filled" id="parsley-id-7">
                                        <li class="parsley-required">This value is required.</li></ul>
 
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                 
            </div>
            
        </div> 
  
   