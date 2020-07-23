<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Chart of Account
            <small>Add / Edit CA</small>
        </h1>
    </section>
    <script>
    $(document).ready(function() {
        $("#myTab a:first").tab('show');
    });
    </script>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><b>Company Master Setup</b></h3>
                    </div>
                    <div class="box-content padd">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="nav-item ">
                                    <a href="#1" class="nav-link" data-toggle="tab">Company
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="#2" class="nav-link" data-toggle="tab">Sub Location
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="#3" class="nav-link" data-toggle="tab">Location
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="1">
                                    <form method="POST" enctype="multipart/form-data"
                                        action="<?php echo base_url('companyinsert');?>" accept-charset="utf-8">
                                        <h4>Company Information</h4>
                                        <div class="panel panel-info">
                                            <div class="panel-body">
                                                <div class="form-group col-md-3">
                                                    <label for="COM_DESC">Company Name <span class="required"
                                                            style="color:red">*</span></label>
                                                    <input type="text" class="form-control inputrequired only-text"
                                                        name="COM_DESC" id="COM_DESC" placeholder="Company Name"
                                                        required>
                                                </div>

                                                <div class="form-group col-md-2">
                                                    <label for="NTN_NO">NTN NO: <span style="color:red">*</span></label>
                                                    <input type="text" class="form-control inputrequired only-text"
                                                        name="NTN_NO" id="NTN_NO" placeholder="0000000-0"
                                                        data-mask="0000000-0" required>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="GST_NO">GST NO: <span class="required"
                                                            style="color:red">*</span></label>
                                                    <input type="text" class="form-control inputrequired" name="GST_NO"
                                                        id="GST_NO" placeholder="00-00-0000-000-00"
                                                        data-mask="00-00-0000-000-00" required>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="COM_LOGO">Company Logo
                                                    </label>
                                                    <input type="file" class="form-control " id="COM_LOGO"
                                                        name="COM_LOGO">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <button class="btn btn-success btn-add  pull-right">Add</button>
                                                </div>
                                                <button class="btn btn-success  pull-right"
                                                    type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="panel panel-info">
                                        <div class="panel-body">

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="2">
                                    <form action="<?php echo base_url('subloc');?>" id="myform" method="POST">
                                        <h4>Sub location</h4>
                                        <div class="panel panel-info">
                                            <div class="panel-body">
                                                <div class="col-md-3">
                                                    <div class="form-group col-md-12">
                                                        <label for=">COM_CODE">Company</label>
                                                        <select name="COM_CODE" id="COM_CODE"
                                                            class="form-control col-md-7 col-xs-12 ">
                                                            <option value="" disabled>Select </option>
                                                            <?php foreach($companies as $company){ 
                                                            echo "<option value='".$company['COM_CODE']."'>".$company['COM_DESC']."</option>";
                                                        }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 border-left">
                                                    <div class="form-group col-md-4">
                                                        <label for="SUB_LOC_DESC">SUB LOCATION DESC<span
                                                                class="required" style="color:red">*</span></label>
                                                        <input type="text" class="form-control inputrequired only-text"
                                                            name="SUB_LOC_DESC[]" id="SUB_LOC_DESC"
                                                            placeholder="SUB_LOC_DESC" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for=">REGION">REGION </label>
                                                        <select name="REGION[]" id="REGION" class="form-control">
                                                            <option vlaue="" disabled>Select </option>
                                                            <option value="North">North</option>
                                                            <option value="South">South</option>
                                                            <option value="East">East</option>
                                                            <option value="West">West</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="ACTIVE">ACTIVE / NON-ACTIVE</label>
                                                        <select name="ACTIVE[]" id="ACTIVE" class="form-control">
                                                            <option vlaue="" disabled>Select </option>
                                                            <option value="Y">Active</option>
                                                            <option value="N">Non-Active</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-1">
                                                        <button id="addMore"
                                                            class="btn btn-success btn-add  pull-right">Add</button>
                                                    </div>
                                                    <div class="filedlist">

                                                    </div>
                                                </div>
                                                <button class="btn btn-success   pull-right"
                                                    type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="panel panel-info">
                                        <div class="panel-body">

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="3">
                                    <form action="<?php echo base_url('location');?>" id="myform" method="POST">
                                        <h4>Location Information</h4>
                                        <div class="panel panel-info">
                                            <div class="panel-body">
                                                <div class="form-group col-md-3">
                                                    <label for=">LZONE">Company </label>
                                                    <select name="LZONE" id="LZONE"
                                                        class="form-control col-md-7 col-xs-12 ">
                                                        <option vlaue="">Select </option>
                                                        <?php foreach($companies as $company){ 
                                                            echo "<option value='".$company['COM_CODE']."'>".$company['COM_DESC']."</option>";
                                                        }?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for=">LZONE">LZONE </label>
                                                    <select name="LZONE" id="LZONE"
                                                        class="form-control col-md-7 col-xs-12 ">
                                                        <option vlaue="">Select </option>
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
                                                    <label for=">LOC_DESC">LOC_DESC<span class="required"
                                                            style="color: red">*</span></label>
                                                    <input type="text" class="form-control inputrequired only-text"
                                                        name="LOC_DESC" id="LOC_DESC" placeholder="LOC_DESC" required>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for=">L_ADDRESS1">L_ADDRESS1</label>
                                                    <input type="text" class="form-control  only-text" name="L_ADDRESS1"
                                                        id="L_ADDRESS1" placeholder="L_ADDRESS1">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for=">PHONE">PHONE<span class="required"
                                                            style="color: red"></span></label>
                                                    <input type="text" class="form-control" name="PHONE" id="PHONE"
                                                        placeholder="YYYY-MM-DD">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="BANK_AC_NO_NAME">BANK_AC_NO_NAME<span class="required"
                                                            style="color: red"></span></label>
                                                    <input type="text" id="BANK_AC_NO_NAME" name="BANK_AC_NO_NAME"
                                                        class="form-control" placeholder="00000-0000000-0"
                                                        data-mask="00000-0000000-0">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for=">LZONE">LZONE </label>
                                                    <select name="LZONE" id="LZONE"
                                                        class="form-control col-md-7 col-xs-12 ">
                                                        <option vlaue="">Select </option>
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
                                                    <label for="CURRENT_ACC_GL_CODE">University
                                                    </label>
                                                    <input type="text" class="form-control only-text"
                                                        name="CURRENT_ACC_GL_CODE" id="CURRENT_ACC_GL_CODE"
                                                        placeholder="0000000000" data-mask="0000000000">
                                                </div>
                                                <button class="btn btn-success  pull-right"
                                                    type="submit">Submit</button>
                                            </div>

                                        </div>
                                    </form>
                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $(function() {
        $("#addMore").click(function(e) {
            e.preventDefault();
            $(".filedlist").append(
                "<br><div class='form-group col-md-4'><input type='text' class='form-control inputrequired only-text' name='SUB_LOC_DESC[]' id='SUB_LOC_DESC' placeholder='SUB_LOC_DESC' required></div><div class='form-group col-md-4'><select name='REGION[]' id='REGION' class='form-control'><option vlaue='' disabled>Select </option><option value='North'>North</option><option value='South'>South</option><option value='East'>East</option><option value='West'>West</option></select></div><div class='form-group col-md-3'><select name='ACTIVE[]' id='ACTIVE' class='form-control'><option vlaue='' disabled>Select </option><option value='Y'>Active</option><option value='N'>Non-Active</option></select></div><div class='form-group col-md-1'><button id='removethis' class='btn btn-success'>X</button></div>");
        });
    });
    // $('.fieldList').on('click', '#removethis', function(e) {
    //     e.preventDefault();
    //     $(".fieldList").remove();
    // });
    
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + id)
        modal.find('.modal-body input').val(id)
    })
    $("#btn1").click(function() {
        $("#sub a").attr("data-toggle", "tab");
        $("#com a").attr("data-toggle", "");
        $("#loc a").attr("data-toggle", "");
    });
    $("#btn2").click(function() {
        $("#com a").attr("data-toggle", "");
        $("#sub a").attr("data-toggle", "");
        $("#loc a").attr("data-toggle", "tab");
    });
    $("#btn3").click(function() {
        $("#com a").attr("data-toggle", "tab");
        $("#sub a").attr("data-toggle", "");
        $("#loc a").attr("data-toggle", "");
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
            // if (document.comboForm.COM_DESC.value == "") {
            //     isValid = false;
            // }
            // if (document.comboForm.COM_DESC.value == "") {
            //     isValid = false;
            // }
        }
        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });
    $('div.setup-panel div a.btn-primary').trigger('click');
    // if (document.comboForm.COM_DESC.value == "") {
    //     isValid = false;
    // }
});
</script>