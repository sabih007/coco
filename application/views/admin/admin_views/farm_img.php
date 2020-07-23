<style type="text/css">
    table.dataTable thead>tr>th.sorting {
        padding-right: 0px;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .thumb {
        margin: 24px 5px 20px 0;
        width: 150px;
        float: left;
    }

    #blah {
        border: 2px solid;
        display: block;
        background-color: white;
        border-radius: 5px;
    }
    .nest{
            overflow-x: scroll!important;

    }
</style>
<div class="nest">

    <div class="title-alt">
        <h6>Edit Farmhouse Images</h6>
        <div class="titleClose">
            <!-- <button type="button" class="  btn btn-success">
                <a href="<?php echo base_url(); ?>Farmhouse_info">Add Farmhouse Images</a></button> -->
        </div>
    </div>
    <div class="body-nest">

        <div class="row">
            <div class="col-md-12">
               <!--  <form action="image-upload/post" enctype="multipart/form-data" class="dropzone" id="image-upload" method="POST">
                    <div>
                        <h3>Upload Multiple Image By Click On Box</h3>
                    </div>
                    <select name="Name" id="HouseID" class="form-control">
                        <option value="">Select Farm House</option>
                        <?php
                        foreach ($farmhouse_all_data as  $value) { ?>

                            <option value="<?php echo $value['Name']; ?>"><?php echo $value['Name']; ?></option>
                        <?php }
                        ?>
                    </select>
                </form> -->

                    <div class="container">
                       <h2 align="center">EDIT FARMHOUSE IMAGES</a></h2><br />
                       <div align="right">
                          <button type="button" name="create_folder" id="create_folder" class="btn btn-success">Create</button>
                       </div><br />
                          <div class="table-responsive" id="folder_table">
                                
                          </div>
                    </div>
            </div>
        </div>

    </div>
</div>



<div id="folderModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><span id="change_title">Create Folder</span></h4>
   </div>
   <div class="modal-body">
    <p>Enter Folder Name
    <input type="text" name="folder_name" id="folder_name" class="form-control" /></p>
    <br />
    <input type="hidden" name="action" id="action" />
    <input type="hidden" name="old_name" id="old_name" />
    <input type="button" name="folder_button" id="folder_button" class="btn btn-info" value="Create" />
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<div id="uploadModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Upload File</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="upload_form" enctype='multipart/form-data'>
     <p>Select Image
     <input type="file" name="upload_file" /></p>
     <br />
     <input type="hidden" name="hidden_folder_name" id="hidden_folder_name" />
     <input type="submit" name="upload_button" class="btn btn-info" value="Upload" />
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<div id="filelistModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">File List</h4>
   </div>
   <div class="modal-body" id="file_list">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>



