<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<style type="text/css">
table.dataTable thead>tr>th.sorting {
    padding-right: 0px;
}

a {
    text-decoration: none;
    color: white;
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

<div class="row">
    <div class="nest">
        <div class="title-alt">
            <h6>Flash Deals List</h6>
            <div class="titleClose">
                    <a href="#" class="btn btn-success" id="add_flashdeals_btn" data-toggle="modal" data-target="#add_flashdeals">Add New Deal</a>
            </div>
        </div>

        <div class="body-nest">
            <table id="example" class="table table-striped table-bordered">
                <thead class="thead">
                    <tr>
                        <th>Title</th>
                        <th>Offer Upto</th>
                        <th>Farmhouse</th>
                        <th>Start At</th>
                        <th>End At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($flashdeals)) {
                        foreach ($flashdeals as $fd) {
                            ?>
                    <tr>
                        <td><?php echo $fd['DealTitle']; ?></td>
                        <td><?php echo $fd['DealValue']; ?></td>
                        <td><?php echo $fd['HouseName']; ?></td>
                        <td><?php echo $fd['StartDate']; ?></td>
                        <td><?php echo $fd['EndDate']; ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-info update" id="<?php echo $fd['DealID']?>"
                                data-id="<?php echo $fd['DealID']?>" data-houseid="<?php echo $fd['HouseID']?>" data-title="<?php echo $fd['DealTitle'] ?>" data-value="<?php echo $fd['DealValue'] ?>" data-housename="<?php echo $fd['HouseName'] ?>" data-startdate="<?php echo $fd['StartDate'] ?>" data-enddate="<?php echo $fd['EndDate'] ?>" data-starttime="<?php echo $fd['StartTime'] ?>" data-endtime="<?php echo $fd['EndTime'] ?>">
                                <i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger delete_data" id="<?php echo $fd['DealID'];?>"><i
                                    class="icon icon-trash"></i></a>
                                    <?php if($fd['DealStatus'] == "in-Active"){
                                        ?>
                            <a href="#" class="btn btn-success activate" id="<?php echo $fd['DealID'];?>"><i class="icon icon-thumbs-up"></i></a>
                                    <?php } 
                                    ?>
                            <?php if($fd['DealStatus'] == "Active"){
                                        ?>
                            <a href="#" class="btn btn-success inactivate" id="<?php echo $fd['DealID'];?>"><i class="icon icon-thumbs-down"></i></a>
                            <?php } 
                            ?>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add FlashDeals -->
<div class="modal fade" id="add_flashdeals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" id="add_flashdeals_form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Surroundings</h4>
      </div>
      <div class="modal-body" id="modal-add">
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control parsley-error" id="title" name="title"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Value:</label>
                    <input type="number" class="form-control parsley-error" id="value" name="value"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Farmhouse:</label>
                    <select class="form-control parsley-error" id="housename" name="housename">
                        <option value="0">Select Farmhouse</option>
                        <?php foreach ($farmhouses as $house) {
                        ?>
                        <option value="<?php echo $house['HouseID'];?>"><?php echo $house['Name'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <input type="hidden" class="form-control parsley-error" id="houseid" name="houseid"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Start Date:</label>
                    <input type="date" class="form-control parsley-error" id="start_date" name="start_date" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>End Date:</label>
                    <input type="date" class="form-control parsley-error" id="end_date" name="end_date" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Start Time:</label>
                    <input type="time" class="form-control parsley-error" id="start_time" name="start_time" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>End Time:</label>
                    <input type="time" class="form-control parsley-error" id="end_time" name="end_time" />
                </div>
            </div>
        </div>

    </div>
      
      <div class="modal-footer">
            <input type="hidden" name="deal_id" id="deal_id"/>
            <input type="hidden" name="action" id="action" value=""/>
            <input type="submit" id="submit" class="btn btn-primary" value="Add"/>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $('#add_flashdeals_btn').click(function(){  
        $('#add_flashdeals_form')[0].reset();
        $('#modal-add input[type=text]').val(null);
        $('#modal-add #housename').val(null);
        $('#modal-add #houseid').val(null);  
        $('.modal-title').text("Add FlashDeals");  
        $('#action').val("Add");
        $('#submit').val("Add");
    }); 

    $(document).on('submit','#add_flashdeals_form',function(event){
        event.preventDefault();
       var title = $("#title").val();
       var value = $("#value").val();
       var housenameid = $("#housename option:selected").val();
       // var housename = $("#housename").val();
       var housename = $("#housename").text();
       var HouseID = housenameid;
       var start_date = $("#start_date").val();
       var end_date = $("#end_date").val();
       var start_time = $("#start_time").val();
       var end_time = $("#end_time").val();
        $.ajax({
            url:'<?php echo base_url();?>add_flashdeals',
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data){
                Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'Operation completed successfully!',
                  showConfirmButton: false,
                  timer: 2000
                });
                $('#add_flashdeals_form')[0].reset();
                setTimeout(function(){
                    location.reload();
                },2000);
            }
        });
    });

    
   $('.delete_data').click(function(){  
        var id = $(this).attr("id");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
             window.location="<?php echo base_url(); ?>delete_flashdeal/"+id;  
        }  
        else  
        {  
             return false;  
        }  
    });  
});
</script>
<script>
    $(document).ready(function(){

        $(document).on('click','.update',function(){
        var DealID = $(this).attr("id");
        $.ajax({
          url:"<?php echo base_url();?>fetch_single_data",
          method:"POST",
          data:{DealID:DealID},
          dataType:"JSON",
          success:function(data){
            // alert(data);
            $('#add_flashdeals').modal('show');
            $('#title').val(data.DealTitle);
            $('#value').val(data.DealValue);
            $('#houseid').val(data.HouseID);
            $('#housename option:selected').val(data.HouseID);
            $('#housename option:selected').text(data.HouseName);
            $('#start_date').val(data.StartDate);
            $('#end_date').val(data.EndDate);
            $('#start_time').val(data.StartTime);
            $('#end_time').val(data.EndTime);
            $('.modal-title').text('Edit FlashDeals');
            $('#deal_id').val(data.DealID);
            $('#action').val('Edit');
            $('#submit').val('Update');
            // alert(data);
          }
        });
    });

    $('.activate').on('click',function(){
        var DealID = $(this).attr("id");
        // alert(DealID);
        $.ajax({
           method:"POST",
           url:"<?php echo base_url();?>flashdeals_activate",
           data:{
            DealID:DealID
           },
           success:function(data){
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Operation completed successfully!',
                    showConfirmButton: false,
                    timer: 2500
                });
                location.reload();
           }
        }); 
    });

    $('.inactivate').on('click',function(){
        var DealID = $(this).attr("id");
        // alert(DealID);
        $.ajax({
            method:"POST",
            url:"<?php echo base_url();?>flashdeals_inactivate",
            data:{
                DealID:DealID
            },
            success:function(data){
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Operation completed successfully!',
                    showConfirmButton: false,
                    timer: 2500
                });
                location.reload();
            }
        }); 
    });


});

</script>