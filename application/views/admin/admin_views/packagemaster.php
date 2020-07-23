<div class="nest" id="maskedClose">
    <div class="title-alt">
        <form role="form" id="addUser" action="<?php echo base_url() ?>create_packages" enctype="multipart/form-data" method="post" role="form">
            <h6><strong>
                    ADD PACKAGE</strong></h6>
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
                    <?php $ID = $maxpackage['0']['PackageID'];
                    $PackageID = $ID + 1;
                    ?>
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon btn-success"><i class="fa fa-calendar"></i>
                        </span>
                        <input type="text" id="PackageID" name="PackageID" value="<?php echo $PackageID; ?>" style="display: none">
                        <input type="text" onchange="showHint(this.value)" class="form-control parsley-error" required="" id="selectshortname" data-parsley-id="5" placeholder="ADD PACKAGE" name="PackageName">
                        <!-- <span id="myid" class="glyphicon"></span> -->
                        <span class="input-group-addon " id="myid">ADD PACKAGE</span>
                    </div>
                    <div class="input-group col-sm-3">
                        <span class="input-group-addon btn-success">
                        </span>
                        <input type="text" class="form-control parsley-error" required="" id="Description" data-parsley-id="5" placeholder="ADD Description" name="Description">
                    </div>
                    <div class="input-group col-sm-2">
                        <span class="input-group-addon btn-success">
                        </span>
                        <select class="form-control" name="Status" id="">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                    <div class="input-group col-sm-2">
                        <button type="submit" class="btn btn-primary" id="formsubmit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
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
        <h6><b>Active Package</b></h6>
        <div class="titleClose">
        </div>
    </div>
    <div class="body-nest">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered ">
                <thead class="thead">
                    <tr>
                        <!-- <th class="select-filter">ID</th> -->
                        <th class="select-filter">PackageID</th>
                        <th class="select-filter">Package Name</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>PackageID</th>
                        <th>Package Name</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    if (!empty($packagemaster)) {
                        foreach ($packagemaster as $record) {
                            ?>
                            <tr>
                                <!-- <td><?php echo $record['ID']; ?></td> -->
                                <td class="ID" style="display:none;"><?php echo $record['ID'] ?></td>
                                <td><?php echo $record['PackageID']; ?></td>
                                <td><?php echo $record['PackageName']; ?></td>
                                <td><?php echo $record['Description']; ?></td>
                                <td contenteditable class="table_data">
                                    <select class="form-control select" id="Status">
                                        <?php if ($record['Status'] == 1) { ?>
                                            <!-- <?php $record['Status']; ?> -->
                                            <option value="1">Active</option>
                                            <option value="0">InActive</option>
                                        <?php  } ?>
                                        <?php if ($record['Status'] == 0) { ?>
                                            <option value="0">InActive</option>
                                            <option value="1">Active</option>
                                        <?php  } ?>
                                    </select>
                                    <?php //echo $record['Status']; 
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
<script type="text/javascript">
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
                if (text == 'Package Already Added') {
                    $("#myid").css('color', 'red');
                    $(".btn.btn-primary").attr('disabled', true);
                    console.log('yes');
                } else {
                    $("#myid").css('color', 'green');
                    $(".btn.btn-primary").attr('disabled', false);
                    console.log('no');
                }
            }
        };
        xhttp.open("GET", "User/package_available?PackageName=" + str, true);
        xhttp.send();
    }

    $(document).on('change', '.table_data', function() {
        var Status = ($(this).find("#Status").val());
        var ID = $(this).parent("tr").find("td:eq(0)").text();
        console.log(Status);
        console.log(ID);
        updatepckgm(ID, Status);
    });

    function updatepckgm(ID, Status) {
        $.ajax({
            url: "User/updatepckgm",
            dataType: "JSON",
            method: 'post',
            data: {
                ID: ID,
                Status: Status
            },
            success: function(data) {
                // alert("success updated");
                location.reload();
            }
        });
    }
</script>