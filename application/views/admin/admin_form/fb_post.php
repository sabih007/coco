<style>
.box-header {
    margin-bottom: auto;
}
.hidden{
    visibility: hidden;
}
.shown{
    visibility: visible;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url()?>fb_post">Facebook Post Settings</a></li>
        </ol>
    </section>
    <section class="content">
        <section class="content">
            <div class="tab-content">
                <div class="col-md-12 col-sm-12 col-xl-12 hidden " id="new" >
                    <div class="box box-primary ">
                        <div class="box-header">
                            Add new Facebook Page
                            <button class="btn btn-primary btn-xs close" ><i
                                    class="fa fa-close"></i></button>
                        </div>
                        <div class="box-body ">
                            <div class="changecontent">
                                <form action="<?php echo base_url('Insert_fb_Page_Setting')?>" method="POST"
                                    id="Form_new">
                                    <div class="col-md-4">
                                        <label class="" for="app_id">App ID<span style="color: red">*</span> </label>
                                        <input type="text" id="app_id" name="app_id"
                                            class="form-control col-md-7 col-xs-12 " placeholder="App ID">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="" for="app_secret">App Secret<span style="color: red">*</span>
                                        </label>
                                        <input type="text" id="app_secret" name="app_secret"
                                            class="form-control col-md-7 col-xs-12 " placeholder="App Secret">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="" for="default_access_token">Access Token</label>
                                        <input type="text" id="default_access_token" name="default_access_token"
                                            class="form-control col-md-7 col-xs-12 " placeholder="App Access Token">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="" for="FB_Page">FB Page<span style="color: red">*</span> </label>
                                        <input type="text" id="FB_Page" name="FB_Page"
                                            class="form-control col-md-7 col-xs-12 " placeholder="FB Page">
                                        <input type="hidden" id="default_graph_version" name="default_graph_version"
                                            class="form-control col-md-7 col-xs-12 " value="v2.10">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="" for="message">Message</label>
                                        <input type="text" id="message" name="message"
                                            class="form-control col-md-7 col-xs-12 " placeholder="message">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="" for="Picsource">Picsource</label>
                                        <input type="text" id="Picsource" name="Picsource"
                                            class="form-control col-md-7 col-xs-12 " placeholder="Picsource">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="" for="Allow">Allow</label>
                                        <select id="Allow" name="Allow" class="form-control col-md-7 col-xs-12 ">
                                            <option value="0">Allow Post</option>
                                            <option value="1">Don't Allow Post</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 pull-right " style="margin-top:1%;">
                                        <input type="submit" class="btn btn-success" value="Submit">
                                        <input type="reset" class="btn btn-info" value="Reset">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xl-12  hidden" id="edit" >
                    <div class="box box-primary ">
                        <div class="box-header" style="background-color:cadetblue;">
                            Update Facebook Page
                            <button class="btn btn-primary btn-xs close" ><i
                                    class="fa fa-close"></i></button>
                        </div>
                        <div class="box-body ">
                            <div class="changecontent">
                                <form action="<?php echo base_url('update_fb_Page_Setting')?>" method="POST"
                                    id="Form_edit">
                                    <div class="col-md-4">
                                        <label class="" for="app_id">App ID<span style="color: red">*</span> </label>
                                        <input type="hidden" id="id_edit" name="id"
                                            class="form-control col-md-7 col-xs-12 " placeholder="App ID">
                                        <input type="text" id="app_id_edit" name="app_id"
                                            class="form-control col-md-7 col-xs-12 " placeholder="App ID">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="" for="app_secret">App Secret<span style="color: red">*</span>
                                        </label>
                                        <input type="text" id="app_secret_edit" name="app_secret"
                                            class="form-control col-md-7 col-xs-12 " placeholder="App Secret">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="" for="default_access_token">Access Token</label>
                                        <input type="text" id="default_access_token_edit" name="default_access_token"
                                            class="form-control col-md-7 col-xs-12 " placeholder="App Access Token">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="" for="FB_Page">FB Page<span style="color: red">*</span> </label>
                                        <input type="text" id="FB_Page_edit" name="FB_Page"
                                            class="form-control col-md-7 col-xs-12 " placeholder="FB Page">
                                        <input type="hidden" id="default_graph_version_edit" name="default_graph_version"
                                            class="form-control col-md-7 col-xs-12 " value="v2.10">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="" for="message">Message</label>
                                        <input type="text" id="message_edit" name="message"
                                            class="form-control col-md-7 col-xs-12 " placeholder="message">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="" for="Picsource">Picsource</label>
                                        <input type="text" id="Picsource_edit" name="Picsource"
                                            class="form-control col-md-7 col-xs-12 " placeholder="Picsource">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="" for="Allow">Allow</label>
                                        <select id="Allow_edit" name="Allow" class="form-control col-md-7 col-xs-12 ">
                                            <option value="1">Allow Post</option>
                                            <option value="0">Don't Allow Post</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 pull-right " style="margin-top:1%;">
                                        <input type="submit" class="btn btn-success" value="Submit">
                                        <input type="reset" class="btn btn-info" value="Reset">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xl-12  ">
                    <div class="box box-primary ">
                        <div class="box-header">
                            Facebook Pages to Post
                            <!-- <button id="addnew" class="btn btn-primary btn-xs pull-right">Add New Page</button> -->
                        </div>
                        <div class="box-body ">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th style="display:none;">app_id</th>
                                        <th style="display:none;">app_secret</th>
                                        <th>FB Page</th>
                                        <th>Message</th>
                                        <th>Picsource</th>
                                        <th>Allow</th>
                                        <th class="text-center" style="color:#000">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($data) { foreach($data as $records) { ?>
                                    <tr>
                                        <td><?php echo $records['id']?></td>
                                        <td style="display:none;"><?php echo $records['app_id']?></td>
                                        <td style="display:none;"><?php echo $records['app_secret']?></td>
                                        <td style="display:none;"><?php echo $records['default_access_token']?></td>
                                        <td><?php echo $records['FB_Page']?></td>
                                        <td><?php echo $records['message']?></td>
                                        <td><?php echo $records['Picsource']?></td>
                                        <td><?php echo $records['Allow']?></td>
                                        <td style="text-align:center;"><button class="btn btn-success btn-page_edit" value="<?php echo $records['id']?>" name="" id="edits"><i
                                    class="fa fa-edit"></i></button></td>
                                    </tr>
                                    <?php } } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>


<script>
$('.btn-page_edit').click(function() {
    $("#new").removeClass("shown").addClass("hidden");
    $("#edit").removeClass("hidden").addClass("shown");
});

$('#addnew').click(function(){
    $("#new").removeClass("hidden").addClass("shown");
    $("#edit").removeClass("shown").addClass("hidden");
})
$('.close').click(function(){
    $("#new").removeClass("shown").addClass("hidden");
    $("#edit").removeClass("shown").addClass("hidden");
})



var table = document.getElementById("example1"),rIndex;
for(var i = 0; i< table.rows.length; i++){
    table.rows[i].onclick = function(){
        rIndex = this.rowIndex;
        document.getElementById("id_edit").value = this.cells[0].innerHTML;
        document.getElementById("app_id_edit").value = this.cells[1].innerHTML;
        document.getElementById("app_secret_edit").value = this.cells[2].innerHTML;
        document.getElementById("default_access_token_edit").value = this.cells[3].innerHTML;
        document.getElementById("FB_Page_edit").value = this.cells[4].innerHTML;
        document.getElementById("message_edit").value = this.cells[5].innerHTML;
        document.getElementById("Picsource_edit").value = this.cells[6].innerHTML;
        document.getElementById("Allow_edit").value = this.cells[7].innerHTML;
    }
}
</script>