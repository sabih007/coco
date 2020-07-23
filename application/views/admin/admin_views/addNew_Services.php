<style type="text/css">
    .form-control {
        width: 50%;
    }
</style>

<div class="nest" id="maskedClose1">
    <div class="title-alt">
        <h6><strong>
                Add New Services</h6></strong>
        <form role="form" id="addUser" action="<?php echo base_url() ?>New_Services_add2" enctype="multipart/form-data" method="post" role="form">
            <div class="titleClose">
                <a class="gone" href="#maskedClose1">
                    <span class="entypo-cancel"></span>
                </a>
            </div>
            <div class="titleToggle">
                <a class="nav-toggle-alt" href="#masked1"><span class="entypo-up-open"></span></a>
            </div>

    </div>

    <div class="body-nest" id="masked1" style="display: block;">
        <div class="form_center">

            <div class="row">
                <div class="well">
                    <div class="input-group col-sm-6">
                        <span class="input-group-addon btn-success"><i class="fa fa-clock-o"></i>
                        </span>
                        <input placeholder="Service Name" type="text" class="form-control parsley-error" id="Name" name="Name" required />
                        <span class="input-group-addon ">Service Name</span>
                    </div>
                    <div class="input-group col-sm-6">
                        <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                        </span>
                        <input placeholder="Service Charges" type="text" class="form-control parsley-error" id="Charges" name="Charges" required />
                        <span class="input-group-addon ">Service Charges</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="well">
                    <div class="input-group col-sm-6">
                        <span class="input-group-addon btn-success"><i class="fa fa-home"></i>
                        </span>
                        <select class="form-control parsley-error dropdown show" id="HouseID" name="HouseID">
                            <?php foreach ($location as  $value) { ?>
                                <option name="HouseID" value="<?php echo $value['HouseID']; ?>"><?php echo $value['Name']; ?></option>
                            <?php } ?>
                        </select>
                        <span class="input-group-addon ">Farmhouse</span>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br><br><br>
        </div>
    </div>



</div>