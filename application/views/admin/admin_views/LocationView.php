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
            <h6>Location List</h6>
            <div class="titleClose">
                <button type="button" class="  btn btn-success">
                    <a href="<?php echo base_url(); ?>Add_New_Location">Add Location</a></button>
            </div>
        </div>
        <div class="body-nest">
            <table id="example" class="table table-striped table-bordered">
                <thead class="thead ">
                    <tr>
                        <!-- <th>Location ID</th> -->
                        <th>House<br> ID</th>
                        <th>Location<br> Name</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>Time<br> Distance</th>
                        <th>KM <br>Distance</th>
                        <th>From <br>Location</th>
                        <th>Google <br>Map</th>
                        <th>City</th>
                        <th>District </th>
                        <th>Country</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($LocationRecords)) {
                        foreach ($LocationRecords as $record) {
                            ?>
                            <tr>
                                <!-- <td><?php echo $record->LocID ?></td> -->
                                <td><?php echo $record->HouseID ?></td>
                                <td><?php echo $record->LocName ?> </td>
                                <td><?php echo $record->Address1 ?> </td>
                                <td><?php echo $record->Address2 ?> </td>
                                <td><?php echo $record->TimeDistance ?> </td>
                                <td><?php echo $record->KMDistance ?> </td>
                                <td><?php echo $record->FromLocation ?> </td>
                                <td><?php echo $record->GoogleMap ?> </td>
                                <td><?php echo $record->City ?> </td>
                                <td><?php echo $record->District ?> </td>
                                <td><?php echo $record->Country ?> </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#locationModal" data-id="<?php echo $record->LocID ?>" data-houseid="<?php echo $record->HouseID ?>" data-locname="<?php echo $record->LocName ?>" data-address1="<?php echo $record->Address1 ?>" data-address2="<?php echo $record->Address2 ?>" data-timedistance="<?php echo $record->TimeDistance ?>" data-kmdistance="<?php echo $record->KMDistance ?>" data-fromlocation="<?php echo $record->FromLocation ?>" data-googlemap="<?php echo $record->GoogleMap ?>" data-city="<?php echo $record->City ?>" data-district="<?php echo $record->District ?>" data-country="<?php echo $record->Country  ?>"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger deleteUser" href="  " data-userid="<?php echo $record->HouseID; ?>" title="Delete"><i class="icon icon-trash"></i></a>
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

<div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title col-sm-8" id="exampleModalLabel">Update Yearly Rates</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update_Location" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>House<br> ID</th>
                                    <th>Location<br> Name</th>
                                    <th>Address1</th>
                                    <th>Address2</th>
                                    <th>Time<br> Distance</th>
                                    <th>KM <br>Distance</th>
                                    <th>From <br>Location</th>
                                    <th>Google <br>Map</th>
                                    <th>City</th>
                                    <th>District </th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" name="LocID" id="LocID" style="display:none;">
                                        <input type="text" class="form-control" name="HouseID" id="HouseID">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="LocName" id="LocName">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="Address1" id="Address1">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="Address2" id="Address2">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="TimeDistance" id="TimeDistance">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="KMDistance" id="KMDistance">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="FromLocation" id="FromLocation">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="GoogleMap" id="GoogleMap">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="City" id="City">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="District" id="District">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="Country" id="Country">
                                    </td>

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
    // alert(country);
    $(document).ready(function() {
        // modal locationModal
        $('#locationModal').on('show.bs.modal', function(event) {
            // alert('ib');
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id')
            var houseid = button.data('houseid')
            var locname = button.data('locname')
            var address1 = button.data('address1')
            var address2 = button.data('address2')
            var timedistance = button.data('timedistance')
            var kmdistance = button.data('kmdistance')
            var fromlocation = button.data('fromlocation')
            var googlemap = button.data('googlemap')
            var city = button.data('city')
            var district = button.data('district')
            var country = button.data('country')
            // alert(googlemap);
            var modal = $(this)
            // modal.find('.modal-title').text('Update Pending invoice # ' + bookingperson)
            modal.find('.modal-body #LocID').val(id)
            modal.find('.modal-body #HouseID').val(houseid)
            modal.find('.modal-body #LocName').val(locname)
            modal.find('.modal-body #Address1').val(address1)
            modal.find('.modal-body #Address2').val(address2)
            modal.find('.modal-body #TimeDistance').val(timedistance)
            modal.find('.modal-body #KMDistance').val(kmdistance)
            modal.find('.modal-body #FromLocation').val(fromlocation)
            modal.find('.modal-body #GoogleMap').val(googlemap)
            modal.find('.modal-body #City').val(city)
            modal.find('.modal-body #District').val(district)
            modal.find('.modal-body #Country').val(country)
        })
        // ----end----///
    });
</script>