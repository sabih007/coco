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
                            <h2>Add New Occasion</h2>
                        </div>
                        <div class="body">
  <form role="form" id="addUser" action="<?php echo base_url() ?>User/Add_New_Occasion2" enctype="multipart/form-data"  method="post" role="form">
                           <!--  <form id="basic-form" method="post" novalidate=""> -->
                                <div style="width:40%" class="form-group">

                                     <label>Occasion</label>
                                    <input type="text" class="form-control parsley-error" name="Occasion"  required="" data-parsley-id="7"><ul class="parsley-errors-list filled" id="parsley-id-7">
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
  
 