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
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#add_flashdeals">Add New Deal</a>
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
                            <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#flashdealsModal"
                                data-id="<?php echo $fd['DealID']?>" data-houseid="<?php echo $fd['HouseID']?>" data-title="<?php echo $fd['DealTitle'] ?>" data-value="<?php echo $fd['DealValue'] ?>" data-housename="<?php echo $fd['HouseName'] ?>" data-startdate="<?php echo $fd['StartDate'] ?>" data-enddate="<?php echo $fd['EndDate'] ?>" data-starttime="<?php echo $fd['StartTime'] ?>" data-endtime="<?php echo $fd['EndTime'] ?>">
                                <i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger delete_data" id="<?php echo $fd['DealID'];?>"><i
                                    class="icon icon-trash"></i></a>
                            <a href="#" class="btn btn-success" id="<?php echo $fd['DealID'];?>"><i class="icon icon-thumbs-up"></i></a>
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

<div class="modal fade" id="flashdealsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title col-sm-8" id="exampleModalLabel">Update Flash Deals</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url();?>update_flashdeals" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="DealID" id="DealID">
                                <label>Title:</label>
                                <input type="text" class="form-control" name="DealTitle" id="DealTitle" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Value:</label>
                                <input type="number" class="form-control" name="DealValue" id="DealValue" placeholder="Name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Farmhouse:</label>
                                <select class="form-control parsley-error" id="HouseName" name="HouseName">
                                    <?php foreach ($farmhouses as $house) {
                                    ?>
                                    <option value="<?php echo $house['Name'];?>"><?php echo $house['Name'];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Start Date:</label>
                                <input type="date" class="form-control" name="StartDate" id="StartDate" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>End Date:</label>
                                <input type="date" class="form-control" name="EndDate" id="EndDate" placeholder="Name">
                                <input type="hidden" name="HouseID" id="HouseID">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Start Time:</label>
                                <input type="time" class="form-control" name="StartTime" id="StartTime" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>End Time:</label>
                                <input type="time" class="form-control" name="EndTime" id="EndTime" placeholder="Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="sumbit" class="btn btn-primary" id="updatest">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add FlashDeals -->
<div class="modal fade" id="add_flashdeals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url(); ?>add_flashdeals" id="add_flashdeals_form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Surroundings</h4>
      </div>
      <div class="modal-body">
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control parsley-error" id="add_title" name="add_title" required/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Value:</label>
                    <input type="number" class="form-control parsley-error" id="add_value" name="add_value" required/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Farmhouse:</label>
                    <select class="form-control parsley-error" id="add_housename" name="add_housename">
                        <option value="0">Select Farmhouse</option>
                        <?php foreach ($farmhouses as $house) {
                        ?>
                        <option value="<?php echo $house['HouseID'];?>"><?php echo $house['Name'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Start Date:</label>
                    <input type="date" class="form-control parsley-error" id="add_start_date" name="add_start_date" required/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>End Date:</label>
                    <input type="date" class="form-control parsley-error" id="add_end_date" name="add_end_date" required/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Start Time:</label>
                    <input type="time" class="form-control parsley-error" id="add_start_time" name="add_start_time" required/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>End Time:</label>
                    <input type="time" class="form-control parsley-error" id="add_end_time" name="add_end_time" required/>
                </div>
            </div>
        </div>

    </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script>
$("#add_flashdeals_form").submit(function(){
    title = $("#add_title").val();
    value = $("#add_value").val();
    HouseID = $("#add_housename").val();
    housename = $("#add_housename option:selected").text();
    start_date = $("#add_start_date").val();
    end_date = $("#add_end_date").val();
    start_time = $("#add_start_time").val();
    end_time = $("#add_end_time").val();
    url = $(this).attr("action");
        $.post(url,{'HouseID':HouseID,'HouseName':housename,'DealTitle':title,'DealValue':value,'StartDate':start_date,'EndDate':end_date,'StartTime':start_time,'EndTime':end_time},function(fb){
        if (fb.match(1)) {
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Flash Deal created successfully!',
              showConfirmButton: false,
              timer: 2500
            });
            setTimeout(function(){
                location.reload();
            },2500);
        }else{
            alert(fb);
            alert("Something went wrong!");
        }
    });
    // console.log(url);
    return false;
});

$(document).ready(function() {
    // modal pending
    $('#flashdealsModal').on('show.bs.modal', function(event) {
        // alert('ib');
        // $('#flashdealsModal').reset();
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var houseid = button.data('houseid')
        var title = button.data('title')
        var value = button.data('value')
        var housename = button.data('housename')
        var start_date = button.data('startdate')
        var end_date = button.data('enddate')
        var start_time = button.data('starttime')
        var end_time = button.data('endtime')
        var modal = $(this)
        // modal.find('.modal-title').text('Update Pending invoice # ' + bookingperson)
        modal.find('.modal-body #DealID').val(id)
        modal.find('.modal-body #HouseID').val(houseid)
        modal.find('.modal-body #DealTitle').val(title)
        modal.find('.modal-body #DealValue').val(value)
        modal.find('.modal-body #HouseName option:selected').text(housename)
        modal.find('.modal-body #StartDate').val(start_date)
        modal.find('.modal-body #EndDate').val(end_date)
        modal.find('.modal-body #StartTime').val(start_time)
        modal.find('.modal-body #EndTime').val(end_time)
    })
    // ----end----///
});

// delete surroundings
$(document).ready(function(){  
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