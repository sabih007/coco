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
        $("#myTab a:first").tab('show'); // show last tab on page load
    });
    </script>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><b>Chart of Account</b></h3>
                    </div>
                    <div class="box-content padd">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs" id="myTab">
                                <?php foreach($level1 as $lvl1){ ?>
                                <li class="nav-item">
                                    <a href="#<?php print_r($lvl1['LEVEL1_DESC']); ?>" class="nav-link"
                                        data-toggle="tab"><?php print_r(ucfirst(strtolower($lvl1['LEVEL1_DESC']))); ?>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach($level1 as $lvl1){ ?>
                                <div class="tab-pane fade" id="<?php echo($lvl1['LEVEL1_DESC']); ?>">
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs pull-right">
                                            <li class="pull-left header"><i class="fa fa-users"> </i>
                                                <?php echo(ucfirst(strtolower($lvl1['LEVEL1_DESC']))); ?>
                                            </li>
                                            <li class="pull-right header">
                                                <a data-toggle="modal" data-target="#exampleModal" data-id="<?php echo($lvl1['LEVEL1']); ?>"><i
                                                        class="fa fa-fw fa-plus"></i>Add</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content ">
                                            <?php 
                                                foreach($level2 as $lvl2){ 
                                                    if($lvl2['LEVEL1'] == $lvl1['LEVEL1']){
                                                    ?>
                                            <div class="panel box box-primary">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#<?php  echo $lvl2['LEVEL1'].$lvl2['LEVEL2']?>" aria-expanded="true"
                                                            class="collapsed">
                                                            <?php  echo $lvl2['LEVEL2_DESC']." (".$lvl2['LEVEL2'].")";?>
                                                        </a>
                                                    </h4>
                                                    
                                                        <a href="" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo($lvl1['LEVEL1'].'_'.$lvl2['LEVEL2']); ?>" class="pull-right"><i
                                                                class="fa fa-fw fa-plus"></i>Add</a>
                                                </div>
                                                <div id="<?php  echo $lvl2['LEVEL1'].$lvl2['LEVEL2'];?>" class="panel-collapse collapse"
                                                    aria-expanded="false" style="height: 0px;">
                                                    <div class="box-body">
                                                        <?php 
                                                            foreach($level3 as $lvl3){ 
                                                                if($lvl2['LEVEL1'] == $lvl3['LEVEL1'] && $lvl2['LEVEL2'] == $lvl3['LEVEL2']){
                                                                ?>

                                                        <div class="panel box box-success">
                                                            <div class="box-header with-border">
                                                                <h4 class="box-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                                        href="#<?php  echo $lvl3['LEVEL1'].$lvl3['LEVEL2'].$lvl3['LEVEL3'];?>"
                                                                        aria-expanded="true" class="collapsed">
                                                                        <?php  echo $lvl3['LEVEL3_DESC']." (".$lvl3['LEVEL3'].")";?>
                                                                    </a>
                                                                </h4>
                                                                
                                                        <a href="" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo($lvl1['LEVEL1'].'_'.$lvl2['LEVEL2'].'_'.$lvl3['LEVEL3']); ?>"  class="pull-right"><i
                                                                class="fa fa-fw fa-plus"></i>Add</a>
                                                            </div>
                                                            <div id="<?php  echo $lvl3['LEVEL1'].$lvl3['LEVEL2'].$lvl3['LEVEL3'];?>"
                                                                class="panel-collapse collapse" aria-expanded="false"
                                                                style="height: 0px;">
                                                                <div class="box-body">
                                                                    <?php 
                                                                        foreach($level4 as $lvl4){ 
                                                                            if($lvl2['LEVEL1'] == $lvl4['LEVEL1'] && $lvl2['LEVEL2'] == $lvl4['LEVEL2']  && $lvl3['LEVEL3'] == $lvl4['LEVEL3']){
                                                                            ?>

                                                                            <div class="panel box box-info">
                                                                                <div class="box-header with-border">
                                                                                    <h4 class="box-title">
                                                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                                                            href="#<?php echo $lvl4['GL_CODE'];?>"
                                                                                            aria-expanded="true" class="collapsed">
                                                                                            <?php  echo $lvl4['LEVEL4_DESC']." (".$lvl4['LEVEL4'].")";?>
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="<?php  echo $lvl4['GL_CODE'];?>"
                                                                                    class="panel-collapse collapse" aria-expanded="false"
                                                                                    style="height: 0px;">
                                                                                    <div class="box-body">
                                                                                            <?php  echo $lvl4['GL_CODE']?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    <?php } } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } } ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } } ?>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</div>
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="@mdo">Open modal for @mdo</button> -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title col-sm-8" id="exampleModalLabel">New message</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php base_url();?>lvl" method="post">
      <div class="modal-body">
          <div class="form-group" style="display:none">
            <label for="Level_id" class="col-form-label">Account Level:</label>
            <input type="text" class="form-control" name="Level" id="Level_id" >
          </div>
          <div class="form-group">
            <label for="LEVEL_DESC" class="col-form-label">Account name:</label>
            <textarea class="form-control" name="LEVEL_DESC" id="LEVEL_DESC"></textarea>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary">Add Account</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- <script src="<//?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script> -->
<script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id')  
  var id = button.data('id')  
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + id)
  modal.find('.modal-body input').val(id)
})
</script>