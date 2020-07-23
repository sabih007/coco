<?php
$userId = $userInfo->userId;
$name = $userInfo->name;
$email = $userInfo->email;
$mobile = $userInfo->mobile;
$roleId = $userInfo->roleId;
?>

<div class="row">
    <div class="nest">
        <div class="title-alt">
            <h6>Enter Usdfsdfsdfdsfdsser Details</h6>
        </div>

        <div class="body-nest">
            <form role="form" action="<?php echo base_url() ?>editUser" method="post" id="editUser" role="form">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">Full Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname" value="<?php echo $name; ?>" maxlength="128">
                                <input type="hidden" value="<?php echo $userId; ?>" name="userId" id="userId" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>" maxlength="128">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" maxlength="20">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword" maxlength="20">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control mobile" id="mobile" placeholder="Mobile Number" name="mobile" value="<?php echo $mobile; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" id="role" name="role">
                                    <option value="0">Select Role</option>
                                    <?php
                                    if (!empty($roles)) {
                                        foreach ($roles as $rl) {
                                            ?>
                                            <option value="<?php echo $rl->roleId; ?>" <?php if ($rl->roleId == $roleId) {
                                                                                                    echo "selected=selected";
                                                                                                } ?>>
                                                <?php echo $rl->role ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <input type="submit" class="btn btn-primary" value="Submit" />
                    <input type="reset" class="btn btn-default" value="Reset" />
                </div>
            </form>
        </div>
    </div>
</div>