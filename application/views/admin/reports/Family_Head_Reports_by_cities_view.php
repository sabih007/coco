<?php
// function get_brand(){
//    $conn = mysqli_connect('localhost','root','','cences_db');
//     $output = '';
//     $sql = "SELECT * FROM division where DivisionID  ORDER BY DivisionID";
//     $res = mysqli_query($conn , $sql);
//     if(mysqli_num_rows($res)>0){
//         while ($row = mysqli_fetch_array($res)) {
//         $output .= '<option value="'.$row["DivisionID"].'">'.$row["DivisionName"].'</option>';
//         }
//     }
//   return $output;
  
// } ?>
<style>
.new {
    border: 5px groove #eee;
}

.button {
    margin-bottom: 4%
}

.select {
    margin-bottom: 4%
}

.label {
    font-size: 1em;
    text-align: center;
    color: #000;
}

.img {
    width: 100px;
}

.heading1 {
    text-align: center;
    font-size: 30px;
    font-weight: bold;
}

.heading4 {
    text-align: center;
    font-size: 20px;
    font-weight: bold;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-tachometer"></i> Reports Management
            <small>View Reports</small>
        </h1>
    </section>
    <br> <br>
    <section class="content-body">
        <div>
            <img src="<?php echo base_url(); ?>public/dist/img/logo1.png" class="img-responsive center-block img"
                alt="header-logo"> <br>
            <h1 class="heading1">Pakistan Kaim Khani Welfare Trust</h1>
            <h4 class="heading4">Family Head Reports By City</h4>
        </div>
        <form method="post" action="<?php echo base_url()."user/Family_Head_Reports_by_cities_pdf_report"; ?>"
            target="_blank">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4 col-sm-offset-4 col-xs-offset-4 new">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <br>
                            <label class="label">Please Select City</label>
                            <select class="form-control inputrequired" id="provance" name="Prov" required>
                                <option value="">Select Province </option>
                                <?php foreach ($provance as $data):?>
                                <option value="<?php echo $data -> ProvID;?>">
                                    <?php echo $data -> ProvName;?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <br>
                            <select class="form-control" id="division" disabled name="CityDivision">
                                <option value="">Select City </option>
                                <?php foreach ($division as $data_division): ?>
                                <option value="<?php echo $data_division -> DivisionID;?>">
                                    <?php echo $data_division -> DivisionName;?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <input type="submit" value="Show Report"
                            class="btn btn-primary col-md-6 col-sm-6 col-xs-12  col-md-offset-3 col-sm-offset-3 col-xs-offset-3 button">
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>

<script>
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

});
</script>