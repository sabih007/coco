<style type="text/css">
table.dataTable thead>tr>th.sorting {
    padding-right: 0px;
}

a {
    text-decoration: none;
    color: white;
}
</style>

<div class="row">
    <div class="nest">
        <div class="title-alt">
            <h6>Surrounding List</h6>
            <div class="titleClose">
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#add_result">Add Surroundings</a>
            </div>
        </div>

        <div class="body-nest">
            <table id="example" class="table table-striped table-bordered">
                <thead class="thead">
                    <tr>
                        <th>Surroundings Name</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($SurroundingsRecords)) {
                        foreach ($SurroundingsRecords as $record) {
                            ?>
                    <tr>
                        <td><?php echo $record['Name']; ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#surroundingsModal"
                                data-id="<?php echo $record['ID'] ?>" data-name="<?php echo $record['Name'] ?>">
                                <i class="fa fa-edit"></i></a>

                        <a href="#" class="btn btn-danger delete_data" id="<?php echo $record['ID'];?>"><i
                                    class="icon icon-trash"></i></a>
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

<div class="modal fade" id="surroundingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title col-sm-8" id="exampleModalLabel">Update Surroundings</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="Surroundings_update" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead class="thead">
                                <tr>
                                    <th>Surroundings ID</th>
                                    <th>Surroundings Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" name="ID" id="ID"></td>
                                    <td><input type="text" class="form-control" name="Name" id="Name"
                                            placeholder="Name"></td>

                                </tr>
                            </tbody>
                        </table>
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


    <!-- Add Surroundings -->
<div class="modal fade" id="add_result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url(); ?>add_surroundings" id="add_surroundings_form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Surroundings</h4>
      </div>
      <div class="modal-body">
        <div class="input-group col-md-12">
                        <span class="input-group-addon btn-success"><i class="fa fa-clock-o"></i>
                        </span>
                        <input type="text" class="form-control parsley-error" id="Surroundings" name="Name" placeholder="Surroundings Name"  required />
                        <span class="input-group-addon ">Surroundings Name</span>
        </div>
    </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script type="text/javascript">
$("#add_surroundings_form").submit(function(){
    Name = $("#Surroundings").val();
    url = $(this).attr("action");
    $.post(url,{'Name':Name},function(fb){
        if (fb.match('1')) {
            alert("Surroundings successfully added!");
            setTimeout(function(){
                location.reload();
            },100);
        }else{
            alert(fb);
        }
    });
    // console.log(url);
    return false;
});

// delete surroundings
$(document).ready(function(){  
           $('.delete_data').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Are you sure you want to delete this?"))  
                {  
                     window.location="<?php echo base_url(); ?>delete_surroundings/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });

$(document).ready(function() {
    // modal pending
    $('#surroundingsModal').on('show.bs.modal', function(event) {
        // alert('ib');
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var name = button.data('name')
        // var charges = button.data('charges')
        // var houseid = button.data('houseid')
        // alert(charges);
        var modal = $(this)
        // modal.find('.modal-title').text('Update Pending invoice # ' + bookingperson)
        modal.find('.modal-body #ID').val(id)
        modal.find('.modal-body #Name').val(name)
        // modal.find('.modal-body #HouseID').val(houseid)
    })
    // ----end----///
});
</script>