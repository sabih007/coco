<style type="text/css">
    .form-control {
        width: 50%;
    }
</style>

<div class="nest" id="maskedClose1">
    <div class="title-alt">
        <h6><strong>
                Add New Videos</h6></strong>
        <form role="form" id="addUser" action="<?php echo base_url() ?>New_videos_add" enctype="multipart/form-data" method="post" role="form">
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
                        <input placeholder="Video Link" type="text" class="form-control parsley-error" id="Video_link" name="Video_link" required />
                        <span class="input-group-addon ">Video Link</span>
                    </div>
                    <div class="input-group col-sm-6">
                        <span class="input-group-addon btn-success"><i class="fa fa-home"></i>
                        </span>
                        <select class="form-control parsley-error dropdown show" id="HouseID" name="HouseId">
                            <?php foreach ($location as  $value) { ?>
                                <option name="HouseId" value="<?php echo $value['HouseID']; ?>"><?php echo $value['Name']; ?></option>
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