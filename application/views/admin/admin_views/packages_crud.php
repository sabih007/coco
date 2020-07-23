<style type="text/css">
    .form-control {
        width: 100%;
    }

    a#dropdownMenuLink {
        width: 100%;
    }

    .my {
        margin: 0 0 -31px 97px;
        padding: 0 0 0 0;
        width: 83%;
    }

    span.fetchSlot {
        padding: 0px 190px 0 0;
        color: black;
    }

    .nav-tabs {
        border-bottom: 1px solid #ddd;
        padding: 0 0 0 79px;
    }
</style>
<div class="row">
    <div class="col-sm-12">
        <div class="nest" id="maskedClose">
            <div class="title-alt">
                <h6><strong>
                        ADD PACKAGE</strong></h6>
                <div class="titleClose">
                    <a class="gone" href="#maskedClose">
                        <span class="entypo-cancel"></span>
                    </a>
                </div>
                <div class="titleToggle">
                    <a class="nav-toggle-alt" href="#masked"><span class="entypo-up-open"></span></a>
                </div>
            </div>
            <div class="body-nest" id="masked" style="display: block;">
                <div class="form_center">
                    <div class="row">
                        <div class="well">
                            <div class="input-group col-sm-12">
                                <span class="input-group-addon btn-success"><i class="fa fa-calendar"></i>
                                </span>
                                <select class="form-control select" id="selectshortname" onchange="showHint(this.value)">
                                    <option value="1">select package</option>
                                    <?php //print_r($packageactive);
                                    foreach ($packageactive as $key => $value) { ?>
                                        <option value="<?php echo $value['PackageName'] . '|' . $value['PackageID']; ?>">
                                            <?php echo $value['PackageName']; ?></option>
                                    <?php
                                    }  ?>
                                </select>
                                <span class="input-group-addon ">ADD PACKAGE</span>
                            </div>
                        </div>
                    </div>
                    <div class="row show" style="visibility: hidden;">
                        <div class="well">
                            <div class="input-group col-sm-1">
                                <span class="input-group-addon">ALERT</span>
                            </div>
                            <div class="input-group col-sm-2">
                                <span class="input-group-addon" id="myid1"></span>
                            </div>
                            <div class="input-group col-sm-2">
                                <span class="input-group-addon" id="myid2"></span>
                            </div>
                            <div class="input-group col-sm-2">
                                <span class="input-group-addon" id="myid3"></span>
                            </div>
                            <div class="input-group col-sm-2">
                                <span class="input-group-addon" id="myid4"></span>
                            </div>
                            <!-- <div class="input-group col-sm-2">
                                <span class="input-group-addon" id="myid5"></span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="nest" id="tabClose">
                <div class="title-alt">
                    <h6>ADD PACKAGE SLOTS RATES</h6>
                    <div class="titleClose">
                        <a class="gone" href="#tabClose">
                            <span class="entypo-cancel"></span>
                        </a>
                    </div>
                    <div class="titleToggle">
                        <a class="nav-toggle-alt" href="#tab">
                            <span class="entypo-up-open"></span>
                        </a>
                    </div>
                </div>
                <div class="body-nest" id="tab">
                    <div id="exTab2" class="container">
                        <ul class="nav nav-tabs">
                            <?php
                            $count = 0;
                            if (!empty($rateslots)) {
                                $counts = count($rateslots);
                                foreach ($rateslots as $record) {
                                    $count++;
                                    ?>
                                    <li class="tabe">
                                        <a href="<?php echo "#" . $count; ?>" data-toggle="tab" id="slotd"><?php echo $record['SlotName']; ?><span style="display: none"><?php echo $record['SlotPeriod'] . '|' . $record['RateSlots']; ?></span></a>
                                    </li>
                            <?php }
                            }
                            //echo $counts;
                            ?>
                            <span style="float: right; " class="fetchSlot"></span></a>
                        </ul>
                        <div class="tab-content ">
                            <?php for ($i = 1; $i <= $counts; $i++) { ?>
                                <div class="tab-pane " id="<?php echo $i; ?>">
                                    <form role="form" id="myform<?php echo $i; ?>" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                            <div class="well my" style="min-height: 20px;">
                                                <div class="input-group col-sm-2">
                                                    <label for="Slot" class="label-rg">
                                                        <span>Slot</span>
                                                    </label>
                                                </div>
                                                <div class="input-group col-sm-2">
                                                    <label for="Slot" class="label-rg">
                                                        <span>Discount</span>
                                                    </label>
                                                </div>
                                                <div class="input-group col-sm-2">
                                                    <label for="Slot" class="label-rg">
                                                        <span>WeekDays</span>
                                                    </label>
                                                </div>
                                                <div class="input-group col-sm-2">
                                                    <label for="Slot" class="label-rg">
                                                        <span>TimeSlot</span>
                                                    </label>
                                                </div>
                                                <div class="input-group col-sm-2">
                                                    <label for="Slot" class="label-rg">
                                                        <span>Rates</span>
                                                    </label>
                                                </div>
                                                <div class="input-group col-sm-2">
                                                    <label for="Slot" class="label-rg">
                                                        <span class="" style="font-size: 10px;"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $ID = 0;
                                            foreach ($packageslots as $value) {
                                                ?>
                                            <div class="row">
                                                <div class="well my">
                                                    <div class="input-group col-sm-2">
                                                        <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                                        </span>
                                                        <input type="text" class="form-control parsley-error SlotPeriod" name="SlotPeriod[]" readonly required="" id="SlotPeriod" style="display:none;">
                                                        <input type="text" class="form-control parsley-error RateSlots" name="RateSlots[]" readonly required="" id="RateSlots" style="display:none;">
                                                        <input type="text" class="form-control parsley-error PackageID" name="PackageID[]" readonly required="" data-parsley-id="7" style="display:none;" value="">
                                                        <input placeholder="ADD PACKAGE" type="text" class="form-control parsley-error shortname" name="shortname[]" readonly required="" data-parsley-id="7" style="display:none;">
                                                        <input placeholder="Slot" type="text" class="form-control parsley-error" id="Slot" name="Slot[]" value="<?php echo $value['Slot']; ?>" readonly required="" data-parsley-id="7">
                                                    </div>
                                                    <div class="input-group col-sm-2">
                                                        <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                                        </span>
                                                        <input placeholder="Discount" type="text" class="form-control parsley-error" id="Discount" name="Discount[]" value="<?php echo $value['Discount']; ?>" readonly required="" data-parsley-id="7">
                                                    </div>
                                                    <div class="input-group col-sm-2">
                                                        <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                                        </span>
                                                        <input placeholder="WeekDays" type="text" class="form-control parsley-error" id="WeekDays" name="WeekDays[]" value="<?php echo $value['WeekDays']; ?>" readonly required="" data-parsley-id="7">
                                                    </div>
                                                    <div class="input-group col-sm-2">
                                                        <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                                        </span>
                                                        <input placeholder="TimeSlot" type="text" class="form-control parsley-error" id="TimeSlot" name="TimeSlot[]" value="<?php echo $value['TimeSlot']; ?>" readonly required="" data-parsley-id="7">
                                                    </div>
                                                    <div class="input-group col-sm-3">
                                                        <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                                        </span>
                                                        <input placeholder="ADD Rates" type="text" class="form-control parsley-error Rates" id="Rates" name="Rates[]" data-parsley-id="7">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php  } ?>
                                        <button type="submit" class="btn btn-primary" id="formsubmit">Submit</button>
                                    </form>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("input").attr("required", true);

    function showHint(str) {
        var xhttp;
        var text = str.split('|');
        var shortname = text[0];
        if (shortname.length == 0) {
            document.getElementById("myid").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var text = JSON.parse(this.responseText);
                $("form :input").prop("disabled", false);
                document.getElementById("myid1").innerHTML = "";
                document.getElementById("myid2").innerHTML = "";
                document.getElementById("myid3").innerHTML = "";
                document.getElementById("myid4").innerHTML = "";
                // document.getElementById("myid5").innerHTML = "";
                $(".row.show").css('visibility', 'visible');
                for (let index = 0; index <= text.length; index++) {
                    // console.log(array_column(text,'slotcount'));
                    var sc = text.length;

                    // console.log(text[sc-1][j]);
                    // console.log(sc);
                    for (var j = 1; j <= sc; j++) {
                        if ((text[index]['rateslots'] == j) && (text[index]['COUNT(rateslots)'] == 9)) {
                            $("#myform" + text[index]['rateslots'] + " :input").prop("disabled", true);
                            document.getElementById("myid" + j).innerHTML = text[sc - 1][j - 1]['SlotName'] + " submittd";
                            $("#myid" + j).css('color', 'red');
                            $("#myid" + j).css('text-transform', 'capitalize');
                        }
                    }
                }
            }
        };
        xhttp.open("GET", "User/package_data?shortname=" + shortname, true);
        xhttp.send();
    }
    $("#selectshortname").change(function(ev) {
        var shortname = $('#selectshortname').val();
        var text = shortname.split('|');
        var shortname = text[0];
        var PackageID = text[1];
        $('.shortname').val(shortname);
        $('.PackageID').val(PackageID);
    });
    $(document).ready(function() {
        $(".taby").click(function() {
            $(".taby").removeClass("active");
            $(this).addClass("active");
        });
        $(".tabe >a").click(function() {
            var slot = $(".tabe.active ").text();
            var text = slot.split('|');
            var SlotPeriod = text[0];
            $(".fetchSlot").text(SlotPeriod);
        });
    });
    $(".btn.btn-primary").click(function(ev) {
        ev.preventDefault()
        var fromid = $(this).closest('form').attr('id');
        var slotd = $('.tabe.active >a >span').text();
        var text = slotd.split('|');
        var SlotPeriod = text[0];
        var RateSlots = text[1];
        $(".SlotPeriod").val(SlotPeriod);
        $(".RateSlots").val(RateSlots);
        var count = 0;
        $('#' + fromid + ' input[name^="Rates"]').each(function() {
            var rate = $(this).val();
            if (rate != "") {
                count++;
            }
        });
        if (count == 9) {
            $.ajax({
                method: "post",
                url: "packages_add",
                data: $('#' + fromid).serialize(),
                dataType: "json",
                success: function(response) {
                    if (response == "true") {
                        $('#' + fromid + ' :input').prop("disabled", true);
                        // alert(response);
                    }
                }
            });
        } else {
            alert("fill all fields");
        }
    });

    function disableform(formId) {
        var f = document.forms[formId].getElementsByTagName('input');
        for (var i = 0; i < f.length; i++)
            f[i].disabled = true
        var f = document.forms[0].getElementsByTagName('textarea');
        for (var i = 0; i < f.length; i++)
            f[i].disabled = true
    }
</script>