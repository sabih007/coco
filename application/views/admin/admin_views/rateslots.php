<div class="nest" id="maskedClose">
    <div class="title-alt">
        <form role="form" id="addUser" action="<?php echo base_url() ?>rateslot_add" enctype="multipart/form-data" method="post" role="form">
            <h6><strong>
                    ADD Rate Slot</strong></h6>
            <div class="titleClose">
                <a class="gone" href="#maskedClose">
                    <span class="entypo-cancel"></span>
                </a>
            </div>
            <div class="titleToggle">
                <a class="nav-toggle-alt" href="#masked"><span class="entypo-up-open"></span></a>
            </div>
    </div>
    <div class="body-nest" id="masked" style="display: block;">
        <div class="form_center">
            <div class="row">
                <div class="well">
                    <div class="input-group col-sm-3">

                        <input type="text" class="form-control parsley-error" required="" id="SlotName" data-parsley-id="5" placeholder="ADD SlotName" name="SlotName">
                    </div>
                    <div class="input-group col-sm-3">
                        <select class="form-control" id="add_Slotperiod" onchange="showHint(this.value)">
                            <option selected disabled>Select Month</option>
                            <option value="JAN">JAN</option>
                            <option value="FEB">FEB</option>
                            <option value="MAR">MAR</option>
                            <option value="APR">APR</option>
                            <option value="MAY">MAY</option>
                            <option value="JUN">JUN</option>
                            <option value="JUL">JUL</option>
                            <option value="AUG">AUG</option>
                            <option value="SEP">SEP</option>
                            <option value="OCT">OCT</option>
                            <option value="NOV">NOV</option>
                            <option value="DEC">DEC</option>
                            <option value="RAZ">RAZ</option>
                        </select>
                        <span class="input-group-addon " id="myid">Select Month</span>
                    </div>
                    <div class="input-group col-sm-4">

                        <input type="text" class="form-control parsley-error" required="" id="SlotPeriod" data-parsley-id="5" placeholder="SlotPeriod" name="SlotPeriod" readonly>
                        <input type="text" class="form-control parsley-error" value="0" id="SlotStatus" name="SlotStatus" style="    display: none;">
                    </div>
                    <div class="input-group col-sm-2">
                        <button type="submit" class="btn btn-primary" id="formsubmit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
        <h6>Rate Slot</h6>
        <div class="titleClose">
            <!-- <button type="button" class="  btn btn-success">
                <a href="<?php echo base_url(); ?>addNew_booking">Add Booking</a></button> -->
        </div>
    </div>

    <div class="body-nest">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered ">
                <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>SlotName</th>
                        <th>SlotPeriod</th>
                        <th>Status</th>
                        <th>Action</th>
                        <!-- <th class="text-center">Actions</th> -->
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>SlotName</th>
                        <th>SlotPeriod</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    // print_r($rateslots);
                    // exit();

                    if (!empty($rateslots)) {
                        foreach ($rateslots as $record) {
                            ?>
                            <tr>
                                <td><?php echo $record['ID']; ?></td>
                                <td><?php echo $record['SlotName']; ?></td>
                                <td><?php echo $record['SlotPeriod']; ?></td>
                                <td contenteditable class="table_data">
                                    <select class="form-control select" id="SlotStatus">
                                        <?php if ($record['SlotStatus'] == 1) { ?>
                                            <option value="1">Active</option>
                                            <option value="0">InActive</option>
                                        <?php  } ?>
                                        <?php if ($record['SlotStatus'] == 0) { ?>
                                            <option value="0">InActive</option>
                                            <option value="1">Active</option>
                                        <?php  } ?>
                                    </select>
                                    <?php
                                            ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('rateslots_delete/') . $record['ID']; ?>"><i class="btn btn-sm round btn-danger  icon icon-trash"></i></a>
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


<script>
    $("#selectshortname").change(function(ev) {
        var shortname = $('#selectshortname').val();
        $('.shortname').val(shortname);
        // alert(shortname);
    });

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
                // $("#SlotPeriod").val(text);
                document.getElementById("myid").innerHTML = text;
                var add = $("#SlotPeriod").val();
                if (text == 'Month Already Added') {

                    $("#myid").css('color', 'red');
                    // $("#formsubmit").attr('disabled', true);
                    console.log('yes');
                } else {
                    $("#myid").css('color', 'green');
                    var ddd = $("#add_Slotperiod").val() + ',';
                    $("#SlotPeriod").val(add + ddd);
                    // $("#formsubmit").attr('disabled', false);
                    console.log('no');
                }
            }
        };
        xhttp.open("GET", "User/month_available?SlotPeriod=" + str, true);
        xhttp.send();
    }

    $(document).on('change', '.table_data', function() {
        var SlotStatus = ($(this).find("#SlotStatus").val());
        var ID = $(this).parent("tr").find("td:eq(0)").text();
        console.log(SlotStatus);
        console.log(ID);

        uprateslot(ID, SlotStatus);
    });

    function uprateslot(ID, SlotStatus) {
        $.ajax({
            url: "User/uprateslot",
            dataType: "JSON",
            method: 'post',
            data: {
                ID: ID,
                SlotStatus: SlotStatus
            },
            success: function(data) {
                // alert("success updated");
                location.reload();

            }
        });
    }
</script>