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
</style>
<div class="nest">

    <div class="title-alt">
        <h6>Add Farmhouse Images</h6>
        <div class="titleClose">
            <!-- <button type="button" class="  btn btn-success">
                <a href="<?php echo base_url(); ?>Farmhouse_info">Add Farmhouse Images</a></button> -->
        </div>
    </div>
    <div class="body-nest">

        <div class="row">
            <div class="col-md-12">

                <form action="image-upload/post" enctype="multipart/form-data" class="dropzone" id="image-upload" method="POST">

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
                </form>
            </div>
        </div>

    </div>
</div>



<div class="nest">

    <div class="title-alt">
        <h6>Add Farmhouse Logo</h6>
        <div class="titleClose">
            <!-- <button type="button" class="  btn btn-success">
                <a href="<?php echo base_url(); ?>Farmhouse_info">Add Farmhouse Images</a></button> -->
        </div>
    </div>
    <div class="body-nest">

        <div class="row">
            <div class="col-md-12">
                <form action="adddfarmlogo" enctype="multipart/form-data" method="POST">
                    <div class="col-sm-3">
                        <select name="HouseID" id="HouseID" class="form-control">
                            <option value="">Select Farm House</option>
                            <?php
                            foreach ($farmhouse_all_data as  $value) { ?>
                                <option value="<?php echo $value['HouseID']; ?>"><?php echo $value['Name']; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-sm-3">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>



                </form>
            </div>
        </div>

    </div>
</div>
<div class="nest">

    <div class="title-alt">
        <h6>Add Farmhouse Slider</h6>
        <div class="titleClose">
            <!-- <button type="button" class="  btn btn-success">
                <a href="<?php echo base_url(); ?>Farmhouse_info">Add Farmhouse Images</a></button> -->
        </div>
    </div>
    <div class="body-nest">

        <div class="row">
            <div class="col-md-12">
                 <h3>Uploaded Files/Images</h3>
                <form action="adddfarmlogo" enctype="multipart/form-data" method="POST">
                    <div class="col-sm-3">
                       <ul class="gallery">
        <?php if(!empty($files)){ foreach($files as $file){ ?>
        <li class="item">
            <img src="<?php echo base_url('User/upload_slider/'.$file['file_name']); ?>" >
            <p>Uploaded On <?php echo date("j M Y",strtotime($file['uploaded_on'])); ?></p>
        </li>
        <?php } }else{ ?>
        <p>File(s) not found...</p>
        <?php } ?>
    </ul>
                    </div>
                    <div class="col-sm-3">
               <!--           <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?> -->
                        <!-- File upload form -->
                       <form method="post" action="" enctype="multipart/form-data">
                        <input type="file" class="form-control" name="image">
                        </div>
                   <div class="form-group">
                  <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
                </div>
                          </form>
                    <!-- <div class="col-sm-3">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div> -->



                </form>
            </div>
        </div>

    </div>



    

</div>



<div class="nest">

    <div class="title-alt">
        <h6>Add Farmhouse Videos</h6>
        <div class="titleClose">
            <!-- <button type="button" class="  btn btn-success">
                <a href="<?php echo base_url(); ?>Farmhouse_info">Add Farmhouse Images</a></button> -->
        </div>
    </div>
    <div class="body-nest">

        <div class="row">
            <div class="col-md-12">
                <p>Select a video file to upload</p>
                <?php
                     
                    if (isset($errors) && strlen($errors)) {
                        echo '<div class="error">';
                        echo '<p>' . $errors . '</p>';
                        echo '</div>';
                    }
                    if (validation_errors()) {
                        echo validation_errors('<div class="error">', '</div>');
                    }
                ?>
                <?php
                    $attributes = array('name' => 'video_upload', 'id' => 'video_upload'); ?>
                    <form action="<?php echo base_url(); ?>user/do_uplode_v" enctype="multipart/form-data" method="POST">
                                   <div class="col-sm-3">
                        <select name="Name" id="HouseID" class="form-control">
                            <option value="">Select Farm House</option>
                            <?php
                            foreach ($farmhouse_all_data as  $value) { ?>
                                <option value="<?php echo $value['Name']; ?>"><?php echo $value['Name']; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <input name="video_name" id="video_name" class="form-control" readonly="readonly" required type="file" />
                    </div>
                     <div class="col-sm-3">
                      <button name="video_upload" value="Upload Video" type="submit" /> Upload Video</button> 
                    </div>
            
                
                <?php
                    echo form_close();
                ?>
            </div>
        </div>

    </div>



    

</div>









<script type="text/javascript">
    Dropzone.options.imageUpload = {
        maxFilesize: 15,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
</script>