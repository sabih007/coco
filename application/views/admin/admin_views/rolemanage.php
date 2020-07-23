<div class="nest" id="maskedClose">
    <div class="title-alt">
        <form role="form" id="addUser" action="<?php echo base_url() ?>create_role" enctype="multipart/form-data" method="post" role="form">
            <h6><strong>
                    ADD Role</strong></h6>
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

                    <div class="input-group col-sm-4">
                        <span class="input-group-addon btn-success"><i class="fa fa-calendar"></i>
                        </span>
                        <input type="text" id="PackageID" name="PackageID" style="display: none">
                        <input type="text" onchange="showHint(this.value)" class="form-control parsley-error" required="" id="selectrole" data-parsley-id="5" placeholder="ADD ROLE" name="role">
                        <!-- <span id="myid" class="glyphicon"></span> -->
                        <span class="input-group-addon " id="myid">ADD Role</span>
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
        <h6><b>Role Managment</b></h6>
        <div class="titleClose">
        </div>
    </div>
    <div class="body-nest">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered ">
                <thead class="thead">
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Role Id</th>
                        <th>Role Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Role Id</th>
                        <th>Role Name</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    if (!empty($tbl_roles)) {
                        foreach ($tbl_roles as $record) {
                            ?>
                            <tr>
                                <!-- <td><?php echo $record['ID']; ?></td> -->
                                <td class="ID" style="display:none;"><?php echo $record['ID'] ?></td>
                                <td><?php echo $record['roleId']; ?></td>
                                <td><?php echo $record['role']; ?></td>
                                <td>
                                    <a data-toggle="modal" data-target="#exampleModal1" data-roleid="<?php echo $record['roleId'] ?>" data-role="<?php echo $record['role'] ?>"><i class="btn btn-sm round btn-success fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('role_delete/') . $record['roleId']; ?>"><i class="btn btn-sm round btn-danger  icon icon-trash"></i></a>
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
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title col-sm-8" id="exampleModalLabel">Update Yearly Rates</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="role_update" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>Role Id</th>
                                    <th>Role Name</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>Role Id</th>
                                    <th>Role Name</th>

                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="roleId" id="roleId" readonly>
                                    </td>
                                    <td id="CurrMonth">
                                        <input type="text" class="form-control" name="role" id="role" placeholder="Role Name">
                                    </td>
                                    <td></td>
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
                if (text == 'Role Already Added') {
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
        xhttp.open("GET", "User/role_available?role=" + str, true);
        xhttp.send();
    }
    // modal pending
    $('#exampleModal1').on('show.bs.modal', function(event) {
        // alert('ib');
        var button = $(event.relatedTarget) // Button that triggered the modal
        var roleid = button.data('roleid')
        var role = button.data('role')

        // alert(roleid);
        var modal = $(this)
        // modal.find('.modal-title').text('Update Pending invoice # ' + bookingperson)
        modal.find('.modal-body #roleId').val(roleid)
        modal.find('.modal-body #role').val(role)

    })
    // ----end----///
</script>