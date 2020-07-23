<link rel="stylesheet" href="<?=base_url()?>public/plugins/datatables/dataTables.bootstrap.css">
<style>
.box-header {
    margin: 0;
    border-top: 2px solid green;
}



.panel {
    margin-bottom: 3px;
    padding: 1px;
}

.form-group {
    padding: 5px;
    margin-bottom: 4px;

}

input {
    border-bottom: 1px solid blue;
}

h4 {

    margin-top: 0;
    margin-bottom: 0px;
    margin-left: 14px;
}

.inputrequired{
    border:1px solid green;
    background-color: lightcyan;
}
.submit {
    margin-top: 23px;
}

/* .col-sm-4,
.col-md-4,
.col-sm-6,
.col-md-6,
.col-sm-8,
.col-md-8 {
    padding: 4px;
} */

/* [type="date"] {
  background:#fff url('fa fa-user')  97% 50% no-repeat ;
} */
[type="date"]::-webkit-inner-spin-button {
    display: none;
}

[type="date"]::-webkit-calendar-picker-indicator {
    opacity: 1;
}

.stepwizard-step p {
    margin-top: 10px;
}

/* .panel-body{
    padding:0px;
} */
.stepwizard-row {
    display: table-row;
}

.col-xs-8,
.col-xs-12,
.col-xs-4,
.col-xs-6,
    {
    padding-left: 0px;
}

.col-sm-8,
.col-sm-12,
.col-sm-4,
.col-sm-6,
    {
    padding-left: 0px;
}

.stepwizard {
    display: table;
    width: 84%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}

.fa-male,
.fa-user,
.fa-female,
.fa-home,
.fa-address-book {
    font-size: 20px;
}
</style>


<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update
            <small>Head of Family</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <!-- <li><a href="#">Tables</a></li> -->
            <li class="active">New Head Of Family </li>              
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h5 class="box-title">New Head of Family</h5>
                <div class="box-tools pull-right">
                    <!-- <span class="label label-primary">Label</span> -->
                </div>
            </div>
            <div class="box-body">
                <div class="stepwizard  col-md-offset-1">

                    <div class=" stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" type="button" class="btn btn-primary btn-circle "><i
                                    class="fa fa-male"></i></a>
                            <p>Personal Information</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><i
                                    class="fa fa-user"></i></a>
                            <p>Father Information</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><i
                                    class="fa fa-female"></i></a>
                            <p>Spouse information</p>
                        </div>

                        <div class="stepwizard-step">
                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled"><i
                                    class="fa fa-home"></i></a>
                            <p>Address & Polling</p>
                        </div>
                    </div>
                </div>

                <form name="comboForm" action="<?php echo base_url('user/personal_info_update_fn')?>" id="myform" method="POST">
                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <!-- <h3>Personal Information</h3> -->

                                <div class="chart tab-pane active" id="Personal_Information"
                                    style="position: relative; margin-top:1%;">
                                    <div class="col-sm-8">
                                        <h4>Personal Information</h4>
                                        <div class="panel panel-info">
                                            <div class="panel-body">
                                                <div class="form-group col-md-3">
                                                    <label for="FirstName">First Name <span class="required"
                                                            style="color:red">*</span></label>

                                                    <input type="text" class="form-control inputrequired only-text" name="FirstName"
                                                        id="FirstName" placeholder="First Name" required
                                                        value="<?php echo $Get_HOF[0]->FirstName; ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="MiddleName">Middle Name <span class="required"
                                                            style="color:red"></span></label>
                                                    <input type="text" class="form-control only-text" name="MiddleName"
                                                        id="MiddleName" placeholder="Middle Name"
                                                        value="<?php echo $Get_HOF[0]->MiddleName; ?>">
                                                    <!-- For StatusFlag Uodate -->
                                                    <input type="hidden" class="form-control" name="FormStatusFlag"
                                                        id="FormStatusFlag" placeholder="FormStatusFlag" value="1">
                                                    <!--End- For StatusFlag Uodate -->

                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="LastName">Last Name <span
                                                            style="color:red">*</span></label>
                                                    <input type="text" class="form-control inputrequired only-text" name="LastName"
                                                        id="LastName" placeholder="Last Name" required
                                                        value="<?php echo $Get_HOF[0]->LastName; ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="HFCNIC">CNIC <span class="required"
                                                            style="color:red">*</span></label>
                                                    <input type="text" class="form-control inputrequired" name="HFCNIC" id="HFCNIC"
                                                        data-mask="00000-0000000-0" required
                                                        value="<?php echo $Get_HOF[0]->HFCNIC; ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Date of Birth <span class="required"
                                                            style="color:red">*</span></label>
                                                    <input type="date" class="form-control inputrequired" name="DOB" id="DobH"
                                                        placeholder="Date Of Birth" required
                                                        value="<?php echo $Get_HOF[0]->DOB;?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="BloodGroupM">Blood Group <span class="required"
                                                            style="color:red"></span></label>
                                                    <select class="form-control " id="BloodGroupM" name="BloodGrp">
                                                        <option value="<?php echo $Get_HOF[0]->BloodGrp; ?>">
                                                            <?php echo $Get_HOF[0]->BloodGrp; ?></option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="TotalMembers">Total Family Members<span class="required"
                                                            style="color:red"></span></label>
                                                    <input type="text" class="form-control" name="TotalFamilyMembers"
                                                        id="TotalMembers" placeholder="Total Members"
                                                        value="<?php echo $Get_HOF[0]->TotalFamilyMembers; ?>"
                                                        data-mask="00">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="EmployedMembers">Employed Members <span class="required"
                                                            style="color:red"></span></label>
                                                    <input type="text" class="form-control " name="EmpMembers"
                                                        id="EmployedMembers" placeholder="Employed Members"
                                                        value="<?php echo $Get_HOF[0]->EmpMembers; ?>" data-mask="00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4>Contact Informaion</h4>
                                        <div class="panel panel-info">
                                            <div class="panel-body">
                                                <div class="form-group col-md-6">
                                                    <label>Head ID </label>
                                                    <input type="text" id="HeadID" name="HeadID" class="form-control "
                                                        readonly placeholder="Generated By System"
                                                        data-inputmask="00000"
                                                        value="<?php echo $Get_HOF[0]->HeadID; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="MobileNo">Contact # 1 <span class="required"
                                                            style="color: red">*</span></label>
                                                    <input type="text" id="MobileNo" name="ContactNo1"
                                                        class="form-control inputrequired" data-mask="0000-0000000"
                                                        placeholder="xxxx-xxxxxxx" required
                                                        value="<?php echo $Get_HOF[0]->ContactNo1; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="contact2">Land Line <span
                                                            style="color: red"></span></label>
                                                    <input type="text" id="ContactNo2" name="ContactNo2"
                                                        class="form-control" data-mask="0000-0000000"
                                                        placeholder="xxxx-xxxxxxx"
                                                        value="<?php echo $Get_HOF[0]->ContactNo2; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="Email">Email address <span class="required"
                                                            style="color: red"></span></label>
                                                    <input type="Email" class="form-control " name="Email" id="Email"
                                                        placeholder="name@example.com"
                                                        value="<?php echo $Get_HOF[0]->Email; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <h4>Educational Information</h4>
                                        <div class="panel panel-info">
                                            <div class="panel-body">
                                                <div class="form-group col-md-3">
                                                    <label for="">Education <span class="required"
                                                            style="color:red">*</span></label>
                                                    <select name="Education" id="Education"
                                                        class="form-control col-md-7 col-xs-12 inputrequired" required>
                                                        <option value="<?php echo $Get_HOF[0]->Education; ?>">
                                                            <?php echo $Get_HOF[0]->Education; ?></option>
                                                        <?php foreach ($educationmatrix as $data) { ?>
                                                        <option value="<?php echo $data ->Level?>">
                                                            <?php echo $data ->Level;?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">University <span class="required"
                                                            style="color:red"></span></label>
                                                    <input type="text" class="form-control  only-text" name="InstituteName"
                                                        id="InstituteName" placeholder="University"
                                                        value="<?php echo $Get_HOF[0]->InstituteName; ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Profession <span class="required"
                                                            style="color:red"></span></label>
                                                    <select class="form-control col-md-7 col-xs-12 " name="Profession"
                                                        id="Profession">
                                                        <option value="">--Select--</option>
                                                        <?php foreach ($jobstatusmatix as $data) { ?>
                                                        <option value="<?php echo $data -> JobNature;?>">
                                                            <?php echo $data -> JobNature;?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Organization<span class="required"
                                                            style="color:red"></span></label>
                                                    <input type="text" class="form-control " name="Organization"
                                                        id="Organization" placeholder="Organization"
                                                        value="<?php echo $Get_HOF[0]->Organization; ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Organization Address<span class="required"
                                                            style="color:red"></span></label>
                                                    <input type="text" class="form-control " name="OrgAddress"
                                                        id="OrgAddress" placeholder="Please Write"
                                                        value="<?php echo $Get_HOF[0]->OrgAddress; ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Profession Position<span class="required"
                                                            style="color:red"></span></label>
                                                    <input type="text" class="form-control " name="ProfPosition"
                                                        id="ProfPosition" placeholder="Profession Position"
                                                        value="<?php echo $Get_HOF[0]->ProfPosition; ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Profession Departement<span class="required"
                                                            style="color:red"></span></label>
                                                    <input type="text" class="form-control " name="Department"
                                                        id="Department" placeholder="Profession Departement"
                                                        value="<?php echo $Get_HOF[0]->Department; ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="ExperienceM">Experience<span class="required"
                                                            style="color:red"></span></label>
                                                    <select class="form-control" id="WorkingExp" name="WorkingExp">
                                                        <option value="<?php echo $Get_HOF[0]->WorkingExp; ?>">
                                                            <?php echo $Get_HOF[0]->WorkingExp; ?></option>
                                                        <option value="Less than a year">Less than a year</option>
                                                        <option value="1 Year">1 Year</option>
                                                        <option value="2 Years">2 Years</option>
                                                        <option value="3 Years">3 Years</option>
                                                        <option value="4 Years">4 Years</option>
                                                        <option value="5 Years">5 Years</option>
                                                        <option value="5+ Years">5+ Years</option>
                                                        <option value="10 or 10+ Years">10 or 10+ Years</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="SkillsM">Skills <span class="required"
                                                            style="color:red"> with
                                                            "," saperator</span></label>
                                                    <input type="text" class="form-control " name="Skills" id="Skills"
                                                        placeholder="eg: designing, Sketching etc.."
                                                        value="<?php echo $Get_HOF[0]->Skills; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ----------------------------------------------Form1 Personal Information -->
                                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <div class="col-sm-12" style="position: relative; margin-top:1%;">
                                    <h4>Father Information</h4>
                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                            <div class="form-group col-md-2">
                                                <label for="FatherFirstName">Father First Name<span class="required"
                                                        style="color:red">*</span></label>
                                                <input type="text" class="form-control inputrequired only-text" name="FatherFirstName"
                                                    id="FatherFirstName" placeholder="FatherFirstName" required
                                                    value="<?php echo $Get_HOF[0]->FatherFirstName; ?>">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="FatherMiddleName">Middle Name <span class="required"
                                                        style="color:red"></span></label>
                                                <input type="text" class="form-control only-text" name="FatherMiddleName"
                                                    id="FatherMiddleName" placeholder="Father Middle Name"
                                                    value="<?php echo $Get_HOF[0]->FatherMiddleName; ?>">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="FatherLastName">Last Name </label>
                                                <input type="text" class="form-control only-text" name="FatherLastName"
                                                    id="FatherLastName" placeholder="Father Last Name"
                                                    value="<?php echo $Get_HOF[0]->FatherLastName; ?>">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="FatherCNIC">Father's CNIC <span class="required"
                                                        style="color:red"></span></label>
                                                <input type="text" class="form-control " id="FatherCNIC"
                                                    name="FatherCNIC" placeholder="00000-0000000-0"
                                                    data-mask="00000-0000000-0"
                                                    value="<?php echo $Get_HOF[0]->FatherCNIC; ?>">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="">Father Date of Birth <span class="required"
                                                        style="color:red"></span></label>
                                                <input type="text" class="form-control " name="FatherDOB" id="FatherDOB"
                                                    placeholder="YYYY-MM-DD" value="<?php echo $Get_HOF[0]->FatherDOB; ?>">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="Address2">Native City (India)<span class="required"
                                                        style="color: red"></span></label>
                                                <input type="text" class="form-control " id="IndiaVillage"
                                                    name="IndiaVillage" placeholder="Please Enter"
                                                    value="<?php echo $Get_HOF[0]->IndiaVillage; ?>">
                                            </div>

                                        </div>
                                        <!-- ------------------------------------End Row 2 -->

                                    </div>

                                    <button class="btn btn-primary prevBtn pull-left" type="button">Previous</button>
                                    <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-3">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <div class="col-sm-12" style="position: relative; margin-top:1%;">
                                    <h4>Spouse information</h4>
                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                            <div class="form-group col-md-3">
                                                <label for=">SpName">Full Name<span class="required"
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control inputrequired only-text" name="SpouseName"
                                                    id="SpouseName" placeholder="Full Name" required
                                                    value="<?php echo $Get_HOF[0]->SpouseName; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for=">SpFatherName">Father Name</label>
                                                <input type="text" class="form-control only-text " name="SpouseFatherName"
                                                    id="SpouseFatherName" placeholder="Father Name"
                                                    value="<?php echo $Get_HOF[0]->SpouseFatherName; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for=">SpDOB">Date Of Birth<span class="required"
                                                        style="color: red"></span></label>
                                                <input type="text" class="form-control" name="SpouseDOB" id="SpouseDOB"
                                                    placeholder="YYYY-MM-DD"
                                                    value="<?php echo $Get_HOF[0]->SpouseDOB; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for=">SPCNIC">CNIC<span class="required"
                                                        style="color: red"></span></label>
                                                <input type="text" id="SpouseCNIC" name="SpouseCNIC"
                                                    class="form-control"  placeholder="00000-0000000-0"
                                                    data-mask="00000-0000000-0"
                                                    value="<?php echo $Get_HOF[0]->SpouseCNIC; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for=">SpEducation">Education </label>
                                                <select name="SpouseEducation" id="SpouseEducation"
                                                    class="form-control col-md-7 col-xs-12 ">
                                                    <option value="<?php echo $Get_HOF[0]->SpouseEducation; ?>">
                                                        <?php echo $Get_HOF[0]->SpouseEducation; ?></option>
                                                    <?php foreach ($educationmatrix as $data) { ?>
                                                    <option value="<?php echo $data -> Level?>">
                                                        <?php echo $data -> Level;?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="SpouseInstitute">University </label>
                                                <input type="text" class="form-control  only-text" name="SpouseInstitute"
                                                    id="SpouseInstitute" placeholder="Please Enter"
                                                    value="<?php echo $Get_HOF[0]->SpouseInstitute; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for=">SpEmployed">Employed <small style="color:red">Details
                                                        also</small></label>
                                                <input type="text" class="form-control " name="SpouseEmployee"
                                                    id="SpouseEmployee" placeholder="Please Enter"
                                                    value="<?php echo $Get_HOF[0]->SpouseEmployee; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="SpBloodGroup">Blood Group<span class="required"
                                                        style="color: red"></span></label>
                                                <select class="form-control " id="SpouseBloodGrp" name="SpouseBloodGrp">
                                                    <option value="<?php echo $Get_HOF[0]->SpouseBloodGrp; ?>">
                                                        <?php echo $Get_HOF[0]->SpouseBloodGrp; ?></option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary prevBtn pull-left" type="button">Previous</button>
                                    <button class="btn btn-primary nextBtn  pull-right" type="button">Next</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-4">
                        <div class="col-xs-12">
                            <div class="col-md-12" style="position: relative; margin-top:1%;">
                                <!-- <h3>Address</h3> -->
                                <div class="col-xs-12">
                                    <h4>Address</h4>
                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                            <div class="form-group col-md-6">
                                                <label for="Address1">Present Address <span class="required"
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control inputrequired" id="address1" name="Address1"
                                                    placeholder="A-1234" required
                                                    value="<?php echo $Get_HOF[0]->Address1; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Address2">Permanent Address <span class="required"
                                                        style="color: red"> If
                                                        needed</span></label>
                                                <input type="text" class="form-control " id="Address2" name="Address2"
                                                    placeholder="A-1234" value="<?php echo $Get_HOF[0]->Address2; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="BlockArea">Block <span class="required"
                                                        style="color: red"></span></label>
                                                <input type="text" class="form-control" id="Block" name="Block"
                                                    placeholder="Please Enter"
                                                    value="<?php echo $Get_HOF[0]->Block; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="PostalCode">Postal Code <span class="required"
                                                        style="color: red"></span></label>
                                                <input type="text" class="form-control " id="PostalCode"
                                                    name="PostalCode" placeholder="Enter Postal"
                                                    value="<?php echo $Get_HOF[0]->PostalCode; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="mainArea">Main Area <span class="required"
                                                        style="color: red"></span></label>
                                                <input type="text" class="form-control " id="MainArea" name="MainArea"
                                                    placeholder="Enter Main Area"
                                                    value="<?php echo $Get_HOF[0]->MainArea; ?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="Residencial">Residence Type <span class="required"
                                                        style="color: red"></span></label>
                                                <select class="form-control" id="ResidenceType" name="ResidenceType">
                                                    <option value="<?php echo $Get_HOF[0]->ResidenceType; ?>">
                                                        <?php echo $Get_HOF[0]->ResidenceType; ?></option>
                                                    <option value="Personal House"> Personal House</option>
                                                    <option value="Joint Family"> Joint Family</option>
                                                    <option value="On Rent"> On Rent</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <h4>Location</h4>
                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                            <div class="form-group col-md-3">
                                                <label for="provance">Province <span class="required"
                                                        style="color: red">*</span></label>
                                                <select class="form-control inputrequired" id="provance" name="Prov" required>
                                                    <option value="<?php echo $Get_HOF[0]->Prov; ?>">
                                                        <?php echo $Get_HOF[0]->Prov; ?></option>
                                                    <?php foreach ($provance as $data):?>
                                                    <option value="<?php echo $data -> ProvID;?>">
                                                        <?php echo $data -> ProvName;?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="CityDivision">City/ Division <span class="required"
                                                        style="color: red"></span></label>
                                                <select class="form-control " id="division" disabled
                                                    name="CityDivision">
                                                    <option value="<?php echo $Get_HOF[0]->CityDivision; ?>">
                                                        <?php echo $Get_HOF[0]->CityDivision; ?></option>
                                                    <?php foreach ($division as $data_division): ?>
                                                    <option value="<?php echo $data_division -> DivisionID;?>">
                                                        <?php echo $data_division -> DivisionName;?>
                                                    </option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="District">District <span class="required"
                                                        style="color: red"></span></label>
                                                <select class="form-control " id="district" disabled name="District">
                                                    <option value="<?php echo $Get_HOF[0]->District; ?>">
                                                        <?php echo $Get_HOF[0]->District; ?></option>
                                                    <?php foreach ($district as $data_district) {?>
                                                    <option value="<?php echo $data_district -> DistrictID;?>">
                                                        <?php echo $data_district -> DistrictName;?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="Tehsil">Tehsil <span class="required"
                                                        style="color: red"></span></label>
                                                <select class="form-control " id="tehsil" disabled="" name="Tehsil"
                                                    >
                                                    <option value="<?php echo $Get_HOF[0]->Tehsil; ?>">
                                                        <?php echo $Get_HOF[0]->Tehsil; ?></option>
                                                    <?php foreach ($tehsil as $data_tehsil) {?>
                                                    <option value="<?php echo $data_tehsil -> TehsilID;?>">
                                                        <?php echo $data_tehsil -> TehsilName;?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="halqaNA">NA<span class="required"
                                                        style="color: red"></span></label>
                                                <select class="form-control" id="halqaNA" name="HalqaNA">
                                                    <option value="<?php echo $Get_HOF[0]->HalqaNA; ?>">
                                                        <?php echo $Get_HOF[0]->HalqaNA; ?></option>
                                                    <?php foreach ($halqana as $data) { ?>
                                                    <option value="<?php echo $data -> NASeat;?>">
                                                        <?php echo $data -> NASeat;?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="halqaPA">PA<span class="required"
                                                        style="color: red"></span></label>
                                                <select class="form-control " id="halqaPA" name="HalqaPA">
                                                    <option value="<?php echo $Get_HOF[0]->HalqaPA; ?>">
                                                        <?php echo $Get_HOF[0]->HalqaPA; ?></option>
                                                    <?php foreach ($halqaps as $data) { ?>
                                                    <option value="<?php echo $data -> PSSeat;?>">
                                                        <?php echo $data -> PSSeat;?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="unioncouncil">Union Council<span class="required"
                                                        style="color: red"></span></label>
                                                <select class="form-control " id="unioncouncil" name="HalqaUC">
                                                    <option value="<?php echo $Get_HOF[0]->HalqaUC; ?>">
                                                        <?php echo $Get_HOF[0]->HalqaUC; ?></option>
                                                    <?php foreach ($halqauc as $data) { ?>
                                                    <option value="<?php echo $data -> UcName;?>">
                                                        <?php echo $data -> UcName;?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary prevBtn  pull-left" type="button">Previous</button>
                                <button class="btn btn-success  pull-right" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script>
$(".only-text").on('keyup', function(e) {
    var val = $(this).val();
   if (val.match(/[^a-zA-Z\s]+$/g)) {
       $(this).val(val.replace(/[^a-zA-Z\s]+$/g, ''));
   }
});


function newEmail() {
    var re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var text = document.getElementById("email");

    if (!text.value.match(re)) {
        document.getElementById("showEmail").innerHTML = "Format isn't correct";

    } else {
        document.getElementById("showEmail").innerHTML = "  ";
    }
}

// Email validaion

//  ajax Check
// For Division
$(document).ready(function() {
    $('#provance').on('change', function() {
        //alert('WORKing....')

        var ProvID = $(this).val();
        //alert(ProvID);

        if (ProvID == '') {
            $('#division').prop('disabled', true);
        } else {
            $('#division').prop('disabled', false);
            $.ajax({
                url: "<?php echo base_url()?>user/get_division",
                type: "POST",
                data: {
                    'ProvID': ProvID
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);

                    $('#division').html(data);
                },
                error: function() {
                    $('#division').prop('disabled', true);
                }
            });

        }


    });
    // end For Division

    // For District
    $('#division').on('change', function() {

        var ProvID = $('#provance').val();
        var DivisionID = $(this).val();

        $('#district').prop('disabled', false);
        $.ajax({
            url: "<?php echo base_url()?>user/get_district",
            type: "POST",
            data: {
                'ProvID': ProvID,
                'DivisionID': DivisionID
            },
            dataType: 'json',
            success: function(data) {
                //alert(data);           
                $('#district').html(data);
            },
            error: function() {


            }
        });

    });
    // end For District

    // For Tehsil
    $('#district').on('change', function() {
        var ProvID = $('#provance').val();
        var DivisionID = $('#division').val();
        var DistrictID = $(this).val();
        $('#tehsil').prop('disabled', false);
        $.ajax({
            url: "<?php echo base_url()?>user/get_tehsil",
            type: "POST",
            data: {
                'ProvID': ProvID,
                'DivisionID': DivisionID,
                'DistrictID': DistrictID
            },
            dataType: 'json',
            success: function(data) {
                //alert(data);           
                $('#tehsil').html(data);
                // $('#halqaPA').html(data);
            },
            error: function() {
                // alert("Error Loading Data....");
            }
        });
        $.ajax({
            url: "<?php echo base_url()?>user/get_halqaPro",
            type: "POST",
            data: {
                'ProvID': ProvID,
                'DivisionID': DivisionID,
                'DistrictID': DistrictID
            },
            dataType: 'json',
            success: function(data) {
                //alert(data);           
                $('#halqaPA').html(data);
            },
            error: function() {

            }
        });
        $.ajax({
            url: "<?php echo base_url()?>user/get_halqaUC",
            type: "POST",
            data: {
                'ProvID': ProvID,
                'DivisionID': DivisionID,
                'DistrictID': DistrictID
            },
            dataType: 'json',
            success: function(data) {
                //alert(data);           
                $('#unioncouncil').html(data);
            },
            error: function() {

            }
        });
        $.ajax({
            url: "<?php echo base_url()?>user/get_halqaNA",
            type: "POST",
            data: {
                'ProvID': ProvID,
                'DivisionID': DivisionID,
                'DistrictID': DistrictID
            },
            dataType: 'json',
            success: function(data) {
                //alert(data);           
                $('#halqaNA').html(data);
            },
            error: function() {

            }
        });
    });

    // For Main Area
    $('#tehsil').on('change', function() {
        var ProvID = $('#provance').val();
        var DivisionID = $('#division').val();
        var DistrictID = $('#district').val();
        var TehsilID = $('#tehsil').val();
        $('#mainArea').prop('disabled', false);
        $.ajax({
            url: "<?php echo base_url()?>user/get_mainArea",
            type: "POST",
            data: {
                'ProvID': ProvID,
                'DivisionID': DivisionID,
                'DistrictID': DistrictID,
                'TehsilID': TehsilID
            },
            dataType: 'json',
            success: function(data) {
                // alert(data);           
                $('#mainArea').html(data);
                // $('#unioncouncil').html(data);
            },
            error: function() {
                // alert("Error Loading Data....");
            }
        });
    });
});




var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn'),
    allPrevBtn = $('.prevBtn');

allWells.hide();

navListItems.click(function(e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
        $item = $(this);

    if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-primary').addClass('btn-default');
        $item.addClass('btn-primary');
        allWells.hide();
        $target.show();
        // $target.find('input:eq(0)').focus();
    }
});

allPrevBtn.click(function() {
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev()
        .children("a");

    prevStepWizard.removeAttr('disabled').trigger('click');
});

allNextBtn.click(function() {
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next()
        .children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for (var i = 0; i < curInputs.length; i++) {
        if (!curInputs[i].validity.valid) {
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
        if (document.comboForm.Education.value=="")
        {
            isValid = false;
        }
        if (document.comboForm.DOB.value=="")
        {
            isValid = false;
        }
    }

    if (isValid)
        nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-primary').trigger('click');
if (document.comboForm.Prov.value=="")
        {
            isValid = false;
        }
</script>