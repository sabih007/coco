<div class="nest">
    <style type="text/css">
        table.dataTable thead>tr>th.sorting {
            padding-right: 0px;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
    <div class="title-alt">
        <h6>Booked List</h6>
        <div class="titleClose">
            <button type="button" class="  btn btn-success">
                <a href="<?php echo base_url(); ?>Farmhouse_info">Add New Farmhouse</a></button>
        </div>
    </div>
    <div class="body-nest">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered ">
                <thead class="thead">
                    <tr>
                        <th>Package #</th>
                        <th>House Name</th>
                        <th>Rent</th>
                        <th>Description</th>
                        <th>Contact<br>Person</th>
                        <th>Booking<br>Person</th>
                        <th>Email</th>
                        <th>Capacity</th>
                        <th>Person Upto</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($farmhouse)) {
                        foreach ($farmhouse as $record) {
                            ?>
                            <tr>
                                <!-- <td><?php echo $record['package_id'] ?></td> -->
                                <td><?php
                                            foreach ($packagemaster as $value) {
                                                echo ($value['PackageID'] == $record['package_id']) ? $value['PackageName'] : null;
                                            }
                                            ?></td>
                                <td><?php echo $record['Name'] ?></td>
                                <td><?php echo $record['Rent'] ?></td>
                                <td><?php echo $record['Description'] ?></td>
                                <td><?php echo $record['ContactNo'] ?></td>
                                <td><?php echo $record['ContactPerson'] ?></td>
                                <td><?php echo $record['Email'] ?></td>
                                <td><?php echo $record['Capacity'] ?></td>
                                <td><?php echo $record['PersonUpto'] ?></td>
                                <td>
                                    <a data-toggle="modal" data-target="#farmhousemodal" data-fid="<?php echo $record['HouseID'] ?>" data-fname="<?php echo $record['Name'] ?>" data-rent="<?php echo $record['Rent'] ?>" data-description="<?php echo $record['Description'] ?>" data-contactno="<?php echo $record['ContactNo'] ?>" data-email="<?php echo $record['Email'] ?>" data-contactperson="<?php echo $record['ContactPerson'] ?>" data-capacity="<?php echo $record['Capacity'] ?>" data-url="<?php echo $record['URL'] ?>" data-ntn_no="<?php echo $record['NTN_NO'] ?>" data-gst_no="<?php echo $record['GST_NO'] ?>" data-personupto="<?php echo $record['PersonUpto'] ?>"><i class="btn btn-sm round btn-outline-success fa fa-edit"></i></a>
                                    <a href="farmhouse_delete/<?php echo $record['HouseID'] ?>"> <i class="btn btn-sm round btn-outline-success fa fa-trash-o"></i></a></td>
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

<div class="modal fade" id="farmhousemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Farmhoues update</h5>
            </div>
            <form action="updatepending" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="HouseID" class="col-form-label">House ID</label>
                                <input type="text" class="form-control" name="HouseID" id="HouseID" placeholder="HouseID">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Name" class="col-form-label">Farmhouse Name</label>
                                <input type="text" class="form-control" name="Name" id="Name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Rent" class="col-form-label">Farmhouse Rent</label>
                                <input type="text" class="form-control" name="Rent" id="Rent" placeholder="Rent">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Description" class="col-form-label">Descriptiont</label>
                                <input type="text" class="form-control" name="Description" id="Description" placeholder="BookingID">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ContactNo" class="col-form-label">Contact No</label>
                                <input type="text" class="form-control" name="ContactNo" id="ContactNo" placeholder="ContactNo">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ContactPerson" class="col-form-label">Contact Person</label>
                                <input type="text" class="form-control" name="ContactPerson" id="ContactPerson" placeholder="ContactPerson">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Email" class="col-form-label">Email</label>
                                <input type="text" class="form-control" name="Email" id="Email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">

                                <label for="Capacity" class="col-form-label">Capacity</label>
                                <input type="text" class="form-control" name="Capacity" id="Capacity" placeholder="Capacity">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="PersonUpto" class="col-form-label">Person Up to</label>
                                <input type="text" class="form-control" name="PersonUpto" id="PersonUpto" placeholder="PersonUpto">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="URL" class="col-form-label">URL</label>
                                <input type="text" class="form-control" name="URL" id="URL" placeholder="URL">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="NTN_NO" class="col-form-label">NTN NO</label>
                                <input type="text" class="form-control" name="NTN_NO" id="NTN_NO" placeholder="NTN_NO">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="GST_NO" class="col-form-label">GST NO</label>
                                <input type="text" class="form-control" name="GST_NO" id="GST_NO" placeholder="GST_NO">
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