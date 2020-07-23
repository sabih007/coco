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
            <h6>User Management List</h6>
            <div class="titleClose">
                <button type="button" class="  btn btn-success">
                    <a href="<?php echo base_url(); ?>addNew">Add New User</a></button>
            </div>
        </div>
        <div class="body-nest">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Role</th>
                        <th>Created On</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($userRecords)) {
                        foreach ($userRecords as $record) {
                            ?>
                            <tr>
                                <td><?php echo $record->name ?></td>
                                <td><?php echo $record->email ?></td>
                                <td><?php echo $record->mobile ?></td>
                                <td><?php echo $record->role ?></td>
                                <td><?php echo date("d-m-Y", strtotime($record->createdDtm)) ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-primary" href="<?= base_url() . 'login-history/' . $record->userId; ?>" title="Login history"><i class="fa fa-list"></i></a> |
                                    <a class="btn btn-sm btn-info" href="<?php echo base_url() . 'editOld/' . $record->userId; ?>" title="Edit"><i class="fa fa-pencil"></i></a> |
                                    <a class="btn btn-sm btn-danger" href="<?php echo base_url() . 'user/deleteUser/' . $record->userId; ?>" title="Edit"><i class="icon icon-trash"></i></a>
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