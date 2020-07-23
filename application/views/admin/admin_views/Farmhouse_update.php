    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style type="text/css">
        .form-control {
            width: 100%;
        }

        a#dropdownMenuLink {
            width: 100%;
        }

            .input-group-addon:last-child {
    border-left: 0;
    width: 125px !important;
    padding: 0 0 !important;
}
    </style>
    <div class="row">
        <div class="col-sm-12">
            <div class="nest" id="maskedClose">
     
                  
            </div>
            <div class="nest" id="maskedClose1">
                <div class="title-alt">
                    <h6><strong>
                            Booking For</h6></strong>
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
                            <h3>Farmhouse Update</h3>
                                <form role="form" id="addUser" action="<?php echo base_url() ?>user/Farmhouse_update" enctype="multipart/form-data" method="post" role="form">
                            <div class="well">

                                 <div class="input-group col-sm-3">
                                    <label>Farmhouse Name</label>  
                                    <input placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="Name" value="<?php echo $farmhouse->Name; ?>" data-parsley-id="7">
                                </div>
                                <div class="input-group col-sm-3">
                                       <label>Farmhouse Rent</label>  
                                    <input placeholder="Contact No" value="<?php echo $farmhouse->Rent; ?>" type="number" class="form-control parsley-error" name="Rent"   data-parsley-id="72">
                                </div>
                                <div class="input-group col-sm-3">
                                    <label>Description</label>  
                                    <input placeholder="Description" type="text" class="form-control parsley-error" id="bookingperson" name="Description"   value="<?php echo $farmhouse->Description; ?>" data-parsley-id="7">
                                </div>

                                 <div class="input-group col-sm-3">
                                    <label>Contact Person</label>  
                                    <input placeholder="Contact Person" type="text" class="form-control parsley-error" id="bookingperson" name="ContactPerson" required="" value="<?php echo $farmhouse->ContactPerson; ?>" data-parsley-id="7">
                                </div>
                                                     
                            </div>

                            <div class="well">
                  
                                 <div class="input-group col-sm-3">
                                       <label>Email</label>  
                                    <input placeholder="Email" value="<?php echo $farmhouse->Email; ?>" type="Email" class="form-control parsley-error" name="Email"   data-parsley-id="72">
                                </div>
                                <div class="input-group col-sm-3">
                                    <label>Capacity</label>  
                                    <input placeholder="Capacity" type="text" class="form-control parsley-error" id="bookingperson" name="Capacity"  value="<?php echo $farmhouse->Capacity; ?>" data-parsley-id="7">
                                </div>
                                <div class="input-group col-sm-3">
                                    <label>Person Upto</label>  
                                    <input placeholder="Person Upto" type="text" class="form-control parsley-error" id="bookingperson" name="PersonUpto"   value="<?php echo $farmhouse->PersonUpto; ?>" data-parsley-id="7">
                                </div>
                                   <div class="input-group col-sm-3">
                                    <label>NTN NO</label>  
                                    <input placeholder="NTN NO" type="text" class="form-control parsley-error" id="bookingperson" name="NTN_NO"  value="<?php echo $farmhouse->NTN_NO; ?>" data-parsley-id="7">
                                </div>                                 
                            </div>
                             <div class="well">
                               <div class="input-group col-sm-3" style="display: none;">
                                    <label>HouseID</label>  
                                    <input   placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="HouseID"  value="<?php  echo $farmhouse->HouseID; ?>" data-parsley-id="7">
                                </div>
                             
                                <div class="input-group col-sm-3">
                                       <label>GST NO</label>  
                                    <input placeholder="Contact No" value="<?php echo $farmhouse->GST_NO; ?>" type="number" class="form-control parsley-error" name="ContactNo" required="" data-parsley-id="72">
                                </div>
                                <div class="input-group col-sm-3">
                                    <label>Contact No</label>  
                                    <input placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="ContactNo" required="" value="<?php echo $farmhouse->ContactNo; ?>" data-parsley-id="7">
                                </div>  
                                <div class="input-group col-sm-3">
                                    <label>PersonUpto</label>  
                                    <input placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="PersonUpto" required="" value="<?php echo $farmhouse->PersonUpto; ?>" data-parsley-id="7">
                                </div> 
                                   <div class="input-group col-sm-3">
                                    <label>Excess Persons</label>  
                                    <input placeholder="Exceed persons" type="number" class="form-control parsley-error" id="bookingperson" name="excess_person" required="" value="<?php echo $farmhouse->excess_person; ?>" data-parsley-id="7">
                                </div> 



                            </div>
                           <button type="Submint" class="btn btn-primary" style="float: right;">Submit</button>
                            </form>
                        </div>
                        
                        

<div class="row">
  
      <form role="form" id="addUser" action="<?php echo base_url() ?>user/FarmhouseDetails_update" enctype="multipart/form-data" method="post" role="form">
          <div class="input-group col-sm-1" style="display:none;">
               <label>HouseID</label>  
               <input   placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="HouseID"  value="<?php  echo $farmhouse->HouseID; ?>" data-parsley-id="7">
          </div>

 <div class="well">  
     <h3>Farmhouse Details Update</h3>
  </div>    
  <div class="row">                     
<?php foreach ($farmhousedetails as $key => $value) {?>
            <div class="input-group col-sm-2" style="display:none;">
          <label>id</label>  
             <input   placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="ID[]"  value="<?php  echo $value['ID']; ?>" data-parsley-id="7">
         </div>

          <div class="input-group col-sm-4">
          <label>Name</label>  
             <input   placeholder="Full Name" type="text" class="form-control parsley-error" id="bookingperson" name="Name[]"  value="<?php  echo $value['Name']; ?>" data-parsley-id="7">
         </div>
          <div class="input-group col-sm-2">
           <label>Type</label>  
             <input   placeholder="Type" type="text" class="form-control parsley-error" id="bookingperson" name="Type[]"  value="<?php  echo $value['Type']; ?>" data-parsley-id="7">
          </div> 

      <div class="input-group col-sm-2">
          <label>Size</label>  
             <input   placeholder="Size" type="text" class="form-control parsley-error" id="bookingperson" name="Size[]"  value="<?php  echo $value['Size']; ?>" data-parsley-id="7">
         </div>
         <div class="input-group col-sm-2">
          <label>TotalUnits</label>  
             <input   placeholder="Total Units" type="number" class="form-control parsley-error" id="bookingperson" name="TotalUnits[]"  value="<?php  echo $value['TotalUnits']; ?>" data-parsley-id="7">
         </div>
 
     <div class="input-group col-sm-2" style="margin-left: -6px;     margin-top: 22px;">
          
              <a href="<?php echo base_url() . 'user/farmhousedetails_delete/' . $value['ID'].'/'. $value['HouseId'] ;  ?>">  <i class="btn btn-sm round btn-danger fa fa-trash-o"></i>  </a>  
 
         </div>


 
<?php } ?>
       <button type="Submint" class="btn btn-primary" style="float: right;">Update</button>
         </form>
                                       
             
                                <span class="btn btn-primary addmore1" style="cursor: pointer; margin-bottom:10px;"
                                    id="DetailsUpdate" onclick="DetailsUpdate()" my-attr="1"><i
                                        class="glyphicon glyphicon-plus"></i> </span>
                           

    
</div>     
<form role="form" id="addUser" action="<?php echo base_url() ?>user/Add_newFarmhouseDetails" enctype="multipart/form-data" method="post" role="form">

 <div id="ext_div" class="row"> 
 

 </div>  
  <button type="Submint" style="display:none;" id="Add_btn" class="btn btn-primary" style="float: right;">ADD</button>
</form>
 </div>

   
                        
                        
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    var i = 0;

           function  DetailsUpdate() {
    i++
   
    $("#ext_div").append('<div class="row' +  i + '"><div class="input-group col-sm-2" style="display:none;"><label>id</label><input placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="HouseId[]" value="<?php echo $farmhouse->HouseID;  ?>" data-parsley-id="7"></div><div class="input-group col-sm-4"><label>Name</label><select name="Name[]" class="form-control parsley-error dropdown show"><?php for ($i=1; $i<count($files); $i++){$num = $files[$i];?><option><?php $tt =    strstr($num, '.png',true);echo ltrim(strstr($tt,'IconDetails/'), 'IconDetails/'); ?></option> <?php }?></select></div><div class="input-group col-sm-2"><label>Type</label><input placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="Type[]" data-parsley-id="7"></div><div class="input-group col-sm-2"><label>Size</label><input placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="Size[]" data-parsley-id="7"></div><div class="input-group col-sm-2"><label>TotalUnits</label><input placeholder="Full name" type="text" class="form-control parsley-error" id="bookingperson" name="TotalUnits[]"  data-parsley-id="7"></div><div class="input-group col-sm-2"></div><span  class="btn btn-danger btn_remove" style="cursor: pointer; margin-top:20px;" id="' +  i + '"  my-attr="1"><i class="glyphicon glyphicon-minus"></i> </span></div>');
    return false;
}

$(document).ready(function(){
 
  $("#DetailsUpdate").click(function(){
    $("#Add_btn").show();
  });
});

    // Remove Temp Record
    $(document).ready(function() {


        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('.row' + button_id + '').remove();
        });
    });
</script>

     