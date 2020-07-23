<div class="modal-content">
                    <div class="modal-header" style="text-align:center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?//php if(FamilyID)?>
                        <h4 class="modal-title" id="myModalLabel">Edit Record of
                            <h1><b><?php echo $records['MemberName'] ?></b></h1>&nbsp;Family ID:&nbsp; <?php echo $records['FamilyID'] ?>
                            &nbsp;Head ID:&nbsp; <?php echo $records['HeadID'] ?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="row form">
                                <div class="form-group col-md-3  input">
                                    <label for="MemberName">Member Name: <span class="required"
                                            style="color:red">*</span></label>
                                </div>
                                <div class="form-group col-md-9  input">
                                    <input type="text" id="MemberName" name="MemberName"
                                        class="form-control col-md-7 col-xs-12"
                                        value="<?php echo $records['MemberName'] ?>" placeholder="Person Name">
                                </div>

                                <div class="form-group col-md-3 input">
                                    <label for="MemberCNIC">Member CNIC: <span class="required"
                                            style="color:red">*</span></label>
                                </div>
                                <div class="form-group col-md-9  input">
                                    <input type="text" id="MemberCNIC" name="MemberCNIC"
                                        class="form-control col-md-12 col-xs-12" value="<?php echo $records['MemberCNIC'] ?>" placeholder="Member CNIC"
                                        data-mask="00000-0000000-0">
                                </div>
                                <div class="form-group col-md-3 input">
                                    <label for="RelationshipHF">Relation</label>
                                </div>
                                <div class="form-group col-md-9  input">
                                    <select name="RelationshipHF" id="RelationshipHF"
                                        class="form-control col-md-12 col-xs-12">
                                        <option value="<?php echo $records['RelationshipHF'] ?>">Previous record will overright after selection of any other option</option>
                                        <?php foreach ($relationshipmatrix as $data) {?>
                                        <option value="<?php echo $data -> RelationID;?>">
                                            <?php echo $data -> Relationship;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-3 input">
                                    <label for="Gender"> Gender:</label>
                                </div>
                                <div class="form-group col-md-9  input">
                                    <select class="form-control col-md-7 col-xs-12" name="Gender" id="Gender">
                                        <option value="<?php echo $records['Gender'] ?>"><?php echo $records['Gender'] ?></option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Not specified</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3 input">
                                    <label for="Age">DOB:</label>
                                </div>
                                <div class="form-group col-md-9  input">
                                    <input type="date" id="Age" name="Age"
                                        class="form-control col-sm-1 col-md-1 col-xs-12" value="<?php echo $records['Age'] ?>">
                                </div>
                                <div class="form-group col-md-3 input">
                                    <label for="MaritalStaus">Marital:</label>
                                </div>
                                <div class="form-group col-md-9  input">
                                    <select class="form-control" name="MaritalStaus" id="MaritalStaus">
                                        <option value="<?php echo $records['MaritalStaus'] ?>"><?php echo $records['MaritalStaus'] ?></option>
                                        <?php foreach ($maritalmatrix as $data) {?>
                                        <option value="<?php echo $data -> ID;?>">
                                            <?php echo $data -> MaritalStatus;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-1 input" style="display:none">
                                    Religion:
                                    <input type="text" name="Religion" value="1" id="Religion">
                                </div>
                                <div class="form-group col-md-1 input" style="display: none">
                                    Language:
                                    <input type="text" name="Language" value="1" id="Language">
                                </div>
                                <div class="form-group col-md-1 input" style="display: none">
                                    Nationality:
                                    <input type="text" name="Nationality" value="1" id="Nationality">
                                </div>
                                <div>
                                    <input type="hidden" id="HFCNIC" name="HFCNIC"
                                        value=" <?php echo $testing[0]['HFCNIC'];?>">
                                </div>
                                <div>
                                    <input type="hidden" id="HeadID" name="HeadID"
                                        value="<?php echo $testing[0]['HeadID'];?>">
                                </div>
                                <div class="form-group col-md-3 input">
                                    <label for="Education">Education:</label>
                                </div>
                                <div class="form-group col-md-9  input">
                                    <select id="Education" name="Education" class="form-control col-md-7 col-xs-12 ">
                                        <option value="<?php echo $records['Education'] ?>"><?php echo $records['Education'] ?></option>
                                        <?php foreach ($educationmatrix as $data) { ?>
                                        <option value="<?php echo $data -> EduID;?>">
                                            <?php echo $data -> Level;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 input">
                                    <label for="Education">Job Status:</label>
                                </div>
                                <div class="form-group col-md-9  input">
                                    <select class="form-control col-md-7 col-xs-12 " id="JobStatus" name="JobStatus">
                                        <option value="<?php echo $records['JobStatus'] ?>"><?php echo $records['JobStatus'] ?></option>
                                        <?php foreach ($jobstatusmatix as $data) { ?>
                                        <option value="<?php echo $data -> JobID;?>">
                                            <?php echo $data -> JobNature;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 input">
                                    <label for="Profession">Profession:</label>
                                </div>
                                <div class="form-group col-md-9  input">
                                    <select class="form-control col-md-7 col-xs-12 " id="Profession" name="Profession"
                                        disabled="">
                                        <option value="<?php echo $records['Profession'] ?>"><?php echo $records['Profession'] ?></option>
                                        <?php foreach ($jobtitlematix as $data) { ?>
                                        <option value="<?php echo $data -> JobTitleID;?>">
                                            <?php echo $data -> JobTitle;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="row form">
                                <div class="form-group col-md-6  input">
                                    <label for="MemberName">Member Name: <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text" id="MemberName" name="MemberName"
                                        class="form-control col-md-7 col-xs-12" value="<?php echo $records['MemberName'] ?>"
                                        placeholder="Person Name">
                                </div>

                                <div class="form-group col-md-6 input">
                                    <label for="MemberCNIC">Member CNIC: <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text" id="MemberCNIC" name="MemberCNIC"
                                        class="form-control col-md-12 col-xs-12" value=""
                                        placeholder="Member CNIC" data-mask="00000-0000000-0">
                                </div>
                                <div class="form-group col-md-4 input">
                                    <label for="RelationshipHF">Relation</label>
                                    <select name="RelationshipHF" id="RelationshipHF"
                                    class="form-control col-md-12 col-xs-12">
                                        <option value="">--Select--</option>
                                        <?php foreach ($relationshipmatrix as $data) {?>
                                        <option value="<?php echo $data -> RelationID;?>">
                                            <?php echo $data -> Relationship;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 input">
                                    <label for="Gender"> Gender:</label>
                                    <select class="form-control col-md-7 col-xs-12" name="Gender" id="Gender">
                                        <option value="">--Select--</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Not specified</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 input">
                                    <label for="Age">DOB:</label>

                                    <input type="date" id="Age" name="Age"
                                        class="form-control col-sm-1 col-md-1 col-xs-12" value="">
                                </div>
                                <div class="form-group col-md-3 input">
                                    <label for="MaritalStaus">Marital:</label>
                                    <select class="form-control" name="MaritalStaus" id="MaritalStaus">
                                        <option value="">--Select--</option>
                                        <?php foreach ($maritalmatrix as $data) {?>
                                        <option value="<?php echo $data -> ID;?>">
                                            <?php echo $data -> MaritalStatus;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-1 input" style="display:none">
                                    Religion:
                                    <input type="text" name="Religion" value="1" id="Religion">
                                </div>
                                <div class="form-group col-md-1 input" style="display: none">
                                    Language:
                                    <input type="text" name="Language" value="1" id="Language">
                                </div>
                                <div class="form-group col-md-1 input" style="display: none">
                                    Nationality:
                                    <input type="text" name="Nationality" value="1" id="Nationality">
                                </div>
                                <div>
                                    <input type="hidden" id="HFCNIC" name="HFCNIC"
                                        value=" <?php echo $testing[0]['HFCNIC'];?>">
                                </div>
                                <div>
                                    <input type="hidden" id="HeadID" name="HeadID"
                                        value="<?php echo $testing[0]['HeadID'];?>">
                                </div>
                                <div class="form-group col-md-3 input">
                                    <label for="Education">Education:</label>
                                    <select id="Education" name="Education"
                                        class="form-control col-md-7 col-xs-12 ">
                                        <option value="">--Select--</option>
                                        <?php foreach ($educationmatrix as $data) { ?>
                                        <option value="<?php echo $data -> EduID;?>">
                                            <?php echo $data -> Level;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 input">
                                    <label for="Education">Job Status:</label>

                                    <select class="form-control col-md-7 col-xs-12 " id="JobStatus"
                                        name="JobStatus">
                                        <option value="">--Select--</option>
                                        <?php foreach ($jobstatusmatix as $data) { ?>
                                        <option value="<?php echo $data -> JobID;?>">
                                            <?php echo $data -> JobNature;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 input">
                                    <label for="Profession">Profession:</label>
                                    <select class="form-control col-md-7 col-xs-12 " id="Profession"
                                        name="Profession" disabled="">
                                        <option value="">--Select--</option>
                                        <?php foreach ($jobtitlematix as $data) { ?>
                                        <option value="<?php echo $data -> JobTitleID;?>">
                                            <?php echo $data -> JobTitle;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary popover-test">Save changes</button>
                        </div>
                    </div>
                </div>