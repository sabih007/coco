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
            <h6>Services List</h6>
            <div class="titleClose">
                <button type="button" class="  btn btn-success">
                    <a href="<?php echo base_url(); ?>Add_New_Services">Add Services</a></button>
            </div>
        </div>

        <div class="body-nest">
            <table id="example" class="table table-striped table-bordered">
                <thead class="thead">
                    <tr>
                        <th>Services Name</th>
                        <th>Services Charges</th>
                        <th>HouseID</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($ServicesRecords)) {
                        foreach ($ServicesRecords as $record) {
                            ?>
                    <tr>
                        <td><?php echo $record['Name']; ?></td>
                        <td>Rs:<?php echo $record['Charges']; ?></td>
                        <td><?php echo $record['HouseID']; ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#serviceModal"
                                data-id="<?php echo $record['ID'] ?>" data-name="<?php echo $record['Name'] ?>"
                                data-charges="<?php echo $record['Charges'] ?>"
                                data-houseid="<?php echo $record['HouseID'] ?>">
                                <i class="fa fa-edit"></i></a>

                            <a class="btn btn-sm btn-danger deleteUser" href="#"
                                data-userid="<?php echo $record['HouseID']; ?>" title="Delete"><i
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

<div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title col-sm-8" id="exampleModalLabel">Update Yearly Rates</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="Services_update" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead class="thead">
                                <tr>
                                    <th>Services ID</th>
                                    <th>Services Name</th>
                                    <th>Services Charges</th>
                                    <th>HouseID</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Services ID</th>
                                    <th>Services Name</th>
                                    <th>Services Charges</th>
                                    <th>HouseID</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" name="ID" id="ID"></td>
                                    <td><input type="text" class="form-control" name="Name" id="Name"
                                            placeholder="Name"></td>
                                    <td><input type="text" class="form-control" name="Charges" id="Charges"
                                            placeholder="Charges"></td>
                                    <td><input type="text" class="form-control" name="HouseID" id="HouseID"
                                            placeholder="HouseID"></td>

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
<script type="text/javascript">
$(document).ready(function() {
    // modal pending
    $('#serviceModal').on('show.bs.modal', function(event) {
        // alert('ib');
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var name = button.data('name')
        var charges = button.data('charges')
        var houseid = button.data('houseid')
        // alert(charges);
        var modal = $(this)
        // modal.find('.modal-title').text('Update Pending invoice # ' + bookingperson)
        modal.find('.modal-body #ID').val(id)
        modal.find('.modal-body #Name').val(name)
        modal.find('.modal-body #Charges').val(charges)
        modal.find('.modal-body #HouseID').val(houseid)
    })
    // ----end----///
});
</script>