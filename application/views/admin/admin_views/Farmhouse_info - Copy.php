<style type="text/css">
    .wizard>.steps>ul>li {
        width: 16.6%;
        float: left;
    }

    .card .header {
        padding: 10px 0px 0px 20px;
    }

    .card .body {
        padding: 10px 20px;
    }

    li.first.current {
        font-weight: 900;
    }

    li.disabled {
        font-weight: 900;
    }
</style>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="nest">
            <div class="title-alt b-rb">
                <h6>
                    <span class="entypo-book"></span>&nbsp;Farmhouse Setup</h6>
                <div class="titleClose">
                    <a class="gone" href="#siteClose">
                        <span class="entypo-cancel"></span>
                    </a>
                </div>
            </div>
            <div class="body-nest">
                <div class="card">
                    <div class="body">
                        <form id="wizard_with_validation" enctype="multipart/form-data">
                            <h3>House</h3>
                            <fieldset>
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group   col-md-3">
                                            <p class="myid" for="Name" id="myid" style="font-weight: bold;">Forumhouse Name </p>
                                            <input type="text" class="form-control" id="farmname" placeholder="Name" onchange="showHint(this.value)" name="Name" required>
                                        </div>
                                        <div class="form-group   col-md-3">
                                            <label for="Rent">Rent</label>
                                            <input type="number" class="form-control" min="0" placeholder="Rent" name="Rent" id="Rent" required>
                                        </div>
                                        <div class="form-group   col-md-3">
                                            <label for="Description">Description </label>
                                            <input type="text" class="form-control" placeholder="Description" id="Description" name="Description" required>
                                        </div>
                                        <div class="form-group   col-md-3">
                                            <label for="ContactNo">ContactNo </label>
                                            <input type="text" class="form-control" placeholder="ContactNo" id="ContactNo" name="ContactNo" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group    col-md-3">
                                            <label for="ContactPerson">Contact Person</label>
                                            <input type="text" class="form-control" placeholder="Contact Person" name="ContactPerson" id="ContactPerson" required>
                                        </div>
                                        <div class="form-group    col-md-3">
                                            <label for="Logo">Email</label>
                                            <input type="email" class="form-control" name="Email">
                                        </div>
                                        <div class="form-group    col-md-3">
                                            <label for="Capacity">Capacity</label>
                                            <input type="text" class="form-control" placeholder="Capacity" name="Capacity" required>
                                        </div>
                                        <div class="form-group    col-md-3">
                                            <label for="Logo">Logo</label>
                                            <input type="text" class="form-control" name="Logo" id="Logo" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group    col-md-3">
                                            <label for="LocationCode">Person Upto</label>
                                            <input type="text" class="form-control" placeholder="Person Upto" name="PersonUpto" required>
                                        </div>
                                        <div class="form-group   col-md-3">
                                            <label for="NTN_NO">NTN_NO</label>
                                            <input type="number" class="form-control" placeholder="NTN_NO" name="NTN_NO" required>
                                        </div>
                                        <div class="form-group   col-md-3">
                                            <label for="GST_NO">GST_NO</label>
                                            <input type="number" class="form-control" placeholder="GST_NO *" name="GST_NO" id="GST_NO" required>
                                        </div>
                                        <div class="form-group   col-md-3">
                                            <label for="GST_NO">Package</label>
                                            <select class="form-control" name="package_id" id="package_id" required>
                                                <?php
                                                foreach ($packages as $value) {
                                                    echo '<option value="' . $value['PackageID'] . '">' . $value['PackageName'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Activity</h3>
                            <fieldset>
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group   col-md-3">
                                            <label for="GST_NO">Activity Type</label>
                                            <select class="form-control" name="Activity_name[]" id="Activity_name" required>
                                                <?php
                                                foreach ($facilities as $facilitie) {
                                                    if ($facilitie['Facilities_Type'] == 'Activities') {
                                                        echo '<option value="' . $facilitie['Facilities'] . '">' . $facilitie['Facilities'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="Name">Size</label>
                                            <input type="hidden" class="form-control" placeholder="Name" name="Activity_Type" value="Activities" id="Activity_Type" required>
                                            <input type="text" class="form-control" placeholder="Name" name="Activity_Size[]" id="Activity_Size" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="Name">Total Units</label>
                                            <input type="text" class="form-control" placeholder="Name" name="Activity_TotalUnits[]" id="Activity_TotalUnits" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <span class="btn btn-primary addmore1" style="cursor: pointer; margin-top:20px;" id="addMore_edu" onclick="addMore_edu()" my-attr="1"><i class="glyphicon glyphicon-plus"></i> </span>
                                        </div>
                                        <div hidden="true" class="form-group   col-sm-3">
                                            <label for="HouseID">HouseID</label>
                                            <input type="number" class="form-control HouseID" placeholder="HouseID" name="HouseID" id="HouseID" required>
                                        </div>
                                    </div>
                                    <div id="activity_div">
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Facilities</h3>
                            <fieldset>
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group   col-md-3">
                                            <label for="GST_NO">Facilities Type</label>
                                            <select class="form-control" name="Facilities_name[]" id="Facilities_name" required>
                                                <?php
                                                foreach ($facilities as $facilitie) {
                                                    if ($facilitie['Facilities_Type'] == 'Facilities') {
                                                        echo '<option value="' . $facilitie['Facilities'] . '">' . $facilitie['Facilities'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="Name">Size</label>
                                            <input type="hidden" class="form-control" placeholder="Name" name="Facilities_Type" value="Facilities" id="Facilities_Type" required>
                                            <input type="text" class="form-control" placeholder="Name" name="Facilities_Size[]" id="Facilities_Size" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="Name">Total Units</label>
                                            <input type="text" class="form-control" placeholder="Name" name="Facilities_TotalUnits[]" id="Facilities_TotalUnits" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <span class="btn btn-primary addmore1" style="cursor: pointer; margin-top:20px;" id="addMore_edu" onclick="addMore_fac()" my-attr="1"><i class="glyphicon glyphicon-plus"></i> </span>
                                        </div>
                                        <div hidden="true" class="form-group   col-sm-3">
                                            <label for="HouseID">HouseID</label>
                                            <input type="text" class="form-control HouseID" placeholder="HouseID" name="HouseID" id="HouseID" required>
                                        </div>
                                    </div>
                                    <div id="fac_div">
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Services</h3>
                            <fieldset>

                                <div class="container">
                                    <div class="row">
                                        <div class="form-group   col-md-3">
                                            <label for="GST_NO">Services Type</label>
                                            <select class="form-control" name="Services_name[]" id="Services_name" required>
                                                <?php
                                                foreach ($facilities as $facilitie) {
                                                    if ($facilitie['Facilities_Type'] == 'Services') {
                                                        echo '<option value="' . $facilitie['Facilities'] . '">' . $facilitie['Facilities'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="Name">Size</label>
                                            <input type="hidden" class="form-control" placeholder="Name" name="Services_Type" value="Services" id="Services_Type" required>
                                            <input type="text" class="form-control" placeholder="Name" name="Services_Size[]" id="Services_Size" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="Name">Total Units</label>
                                            <input type="text" class="form-control" placeholder="Name" name="Services_TotalUnits[]" id="Services_TotalUnits" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <span class="btn btn-primary addmore1" style="cursor: pointer; margin-top:20px;" id="addMore_edu" onclick="addMore_ser()" my-attr="1"><i class="glyphicon glyphicon-plus"></i> </span>
                                        </div>
                                        <div hidden="true" class="form-group   col-sm-3">
                                            <label for="HouseID">HouseID</label>
                                            <input type="number" class="form-control HouseID" placeholder="HouseID" name="HouseID" id="HouseID" required>
                                        </div>
                                    </div>
                                    <div id="ser_div">
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Location</h3>
                            <fieldset>
                                <div class="container">
                                    <div class="row">
                                        <div hidden="true" class="form-group   col-sm-3">
                                            <label for="HouseID">HouseID</label>
                                            <input type="number" class="form-control HouseID" placeholder="HouseID" name="HouseID" id="HouseID" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="Description">LocName </label>
                                            <input type="text" class="form-control" placeholder="LocName" name="LocName" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="Address1">Address1 </label>
                                            <input type="text" class="form-control" placeholder="Address1" id="Address1" name="Address1" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="ContactPerson">Address2</label>
                                            <input type="text" class="form-control" placeholder="Address2" name="Address2" id="Address2" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="TimeDistance">TimeDistance</label>
                                            <input type="text" class="form-control" placeholder="TimeDistance" name="TimeDistance" required>
                                        </div>

                                        <div class="form-group   col-sm-3">
                                            <label for="KMDistance">KMDistance</label>
                                            <input type="text" class="form-control" name="KMDistance" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="FromLocation">FromLocation</label>
                                            <input type="text" class="form-control" placeholder="FromLocation" name="FromLocation" id="FromLocation" required>
                                        </div>
                                        <div class="form-group   col-sm-3">
                                            <label for="LocationCode">GoogleMap</label>
                                            <input type="text" class="form-control" placeholder="Location Code" id="GoogleMap" name="GoogleMap" required>
                                        </div>
                                        <div class="form-group   col-md-3">
                                            <label for="City">City</label>
                                            <input type="text" class="form-control" id="City" placeholder="City" name="City" required>
                                        </div>
                                        <div class="form-group   col-md-3">
                                            <label for="District">District</label>
                                            <input type="text" class="form-control" placeholder="District" name="District" id="District" required>
                                        </div>
                                        <div class="form-group   col-md-3">
                                            <label for="Country">Country</label>
                                            <input type="text" class="form-control" placeholder="Country" name="Country" id="Country" required>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
<!--                             <h3>Nearby</h3>
                            <fieldset>
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group   col-sm-3">
                                            <label for="Name">Name</label>
                                            <input type="text" class="form-control" placeholder="Name" name="Surrounding[]" id="Surrounding" required>
                                        </div>
                                        <div hidden="true" class="form-group   col-sm-3">
                                            <label for="HouseID">HouseID</label>
                                            <input type="number" class="form-control HouseID" placeholder="HouseID" name="HouseID" id="HouseID" required>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
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
    </div>

</div>
<script type="text/javascript">
    var i = 0;

    function addMore_edu() {
        i++
        $("#activity_div").append('<div class="row" id="row' + i +
            '"> <div class="form-group  col-md-3"> <label for="GST_NO">Activity Type</label> <select class="form-control" name="Activity_name[]" id="Activity_name" required><?php foreach ($facilities as $key => $value) {
                                                                                                                                                                                    if ($value['Facilities_Type'] == 'Activities') { ?><option value="<?php echo $value['Facilities']; ?>"><?php echo $value['Facilities']; ?></option><?php }
                                                                                                                                                                                                                                                                                                                                        } ?> </select> </div> <div class="form-group  col-sm-3"> <label for="Name">Size</label> <input type="hidden" class="form-control" placeholder="Name" name="Activity_Type" value="Activity" id="Activity_Type" required> <input type="text" class="form-control" placeholder="Name" name="Activity_Size[]" id="Activity_Size" required> </div> <div class="form-group  col-sm-3"> <label for="Name">Total Units</label> <input type="text" class="form-control" placeholder="Name" name="Activity_TotalUnits[]" id="Activity_TotalUnits" required> </div> <div class="form-group  col-sm-3"> <span  class="btn btn-danger btn_remove" style="cursor: pointer; margin-top:20px;" id="' +
            i + '"  my-attr="1"><i class="glyphicon glyphicon-minus"></i> </span> </div> <div hidden="true" class="form-group  col-sm-3"> <label for="HouseID">HouseID</label> <input type="number" class="form-control HouseID" placeholder="HouseID" name="HouseID" id="HouseID" required> </div> </div>');
        return false;
    }

    //facilities
    var fac_id = 0;

    function addMore_fac() {
        fac_id++
        $("#fac_div").append('<div class="row" id="row' + fac_id +
            '"> <div class="form-group  col-md-3"> <label for="GST_NO">Facilities Type</label> <select class="form-control" name="Facilities_name[]" id="Facilities_name" required><?php foreach ($facilities as $key => $value) {
                                                                                                                                                                                        if ($value['Facilities_Type'] == 'Facilities') { ?><option value="<?php echo $value['Facilities']; ?>"><?php echo $value['Facilities']; ?></option><?php }
                                                                                                                                                                                                                                                                                                                                            } ?> </select> </div> <div class="form-group  col-sm-3"> <label for="Name">Size</label> <input type="hidden" class="form-control" placeholder="Name" name="Facilities_Type" value="Facilities" id="Facilities_Type" required> <input type="text" class="form-control" placeholder="Name" name="Facilities_Size[]" id="Facilities_Size" required> </div> <div class="form-group  col-sm-3"> <label for="Name">Total Units</label> <input type="text" class="form-control" placeholder="Name" name="Facilities_TotalUnits[]" id="Facilities_TotalUnits" required> </div> <div class="form-group  col-sm-3"> <span  class="btn btn-danger btn_remove" style="cursor: pointer; margin-top:20px;" id="' +
            fac_id + '"  my-attr="1"><i class="glyphicon glyphicon-minus"></i> </span> </div> <div hidden="true" class="form-group  col-sm-3"> <label for="HouseID">HouseID</label> <input type="number" class="form-control HouseID" placeholder="HouseID" name="HouseID" id="HouseID" required> </div> </div>');
        return false;
    }



    var ser_id = 0;

    function addMore_ser() {
        fac_id++
        $("#ser_div").append('<div class="row" id="row' + ser_id +
            '"> <div class="form-group  col-md-3"> <label for="GST_NO">Services Type</label> <select class="form-control" name="Services_name[]" id="Services_name" required><?php foreach ($facilities as $key => $value) {
                                                                                                                                                                                    if ($value['Facilities_Type'] == 'Services') { ?><option value="<?php echo $value['Facilities']; ?>"><?php echo $value['Facilities']; ?></option><?php }
                                                                                                                                                                                                                                                                                                                                        } ?> </select> </div> <div class="form-group  col-sm-3"> <label for="Name">Size</label> <input type="hidden" class="form-control" placeholder="Name" name="Services_Type" value="Services" id="Services_Type" required> <input type="text" class="form-control" placeholder="Name" name="Services_Size[]" id="Services_Size" required> </div> <div class="form-group  col-sm-3"> <label for="Name">Total Units</label> <input type="text" class="form-control" placeholder="Name" name="Services_TotalUnits[]" id="Services_TotalUnits" required> </div> <div class="form-group  col-sm-3"> <span  class="btn btn-danger btn_remove" style="cursor: pointer; margin-top:20px;" id="' +
            ser_id + '"  my-attr="1"><i class="glyphicon glyphicon-minus"></i> </span> </div> <div hidden="true" class="form-group  col-sm-3"> <label for="HouseID">HouseID</label> <input type="number" class="form-control HouseID" placeholder="HouseID" name="HouseID" id="HouseID" required> </div> </div>');
        return false;
    }


    // Remove Temp Record
    $(document).ready(function() {

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
    /////////EDU END//////////////////////////


    function showHint(str) {
        var xhttp;
        if (str.length == 0) {
            document.getElementById("myid").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var text = JSON.parse(this.responseText);
                // JSON.parse(this.responseText);
                document.getElementById("myid").innerHTML = text;
                if (text == 'Farm Already Added') {
                    // $("#myid").css('color', 'red !important');
                    $("#myid").css('color', 'red');
                    // $(".btn.btn-primary").attr('disabled', true);
                    console.log('yes');
                } else {
                    $("#myid").css('color', 'green');
                    // $(".btn.btn-primary").attr('disabled', false);
                    console.log('no');
                }
            }
        };
        xhttp.open("GET", "User/farm_available?Name=" + str, true);
        xhttp.send();
    }
</script>

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