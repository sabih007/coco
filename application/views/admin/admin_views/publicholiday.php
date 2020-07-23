<head>
    <title></title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card b-b">
            <div class="body">
                <!-- <h1>content goes here</h1> -->
                <div class="table-responsive">
                    <br />
                    <table id="example1" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>DayDate</th>
                                <th>Day </th>
                                <th>HolidayName</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" language="javascript">
$(document).ready(function() {

    function load_data() {
        $.ajax({
            url: "<?php echo base_url(); ?>holiday_data",
            dataType: "JSON",
            success: function(data) {
                console.log(data);
                var html = data[0];
                for (var count = 1; count < data.length; count++) {
                    html += '<tr>';
                    html += '<td class="table_data" data-row_id="' + data[count].ID +
                        '" data-column_name="DayDate" contenteditable>' + data[count].DayDate +
                        '</td>';
                    html += '<td class="table_data" data-row_id="' + data[count].ID +
                        '" data-column_name="Day" contenteditable>' + data[count].Day + '</td>';
                    html += '<td class="table_data" data-row_id="' + data[count].ID +
                        '" data-column_name="HolidayName" contenteditable>' + data[count]
                        .HolidayName + '</td>';
                    html += '<td class="table_data" data-row_id="' + data[count].ID +
                        '" data-column_name="Type" contenteditable>' + data[count].Type + '</td>';
                    html += '<td><button type="button" name="delete_btn" id="' + data[count].ID +
                        '" class="btn btn-xs btn-danger btn_delete">Delete</button></td></tr>';
                }
                $('tbody').html(html);
            }
        });
    }

    load_data();

    $(document).on('click', '#btn_add', function() {
        var DayDate = $('#DayDate').text();
        var Day = $('#Day').text();
        var HolidayName = $('#HolidayName').text();
        var Type = $('#Type').text();
        var data = {
            'DayDate': $('#DayDate').val(),
            'Day': $('#Day').val(),
            'HolidayName': $('#HolidayName').val(),
            'Type': $('#Type').val(),
        }
        $.ajax({
            url: "<?php echo base_url(); ?>holiday_insert",
            method: "POST",
            data: data,
            success: function(data) {
                load_data();
            }
        })
    });

    $(document).on('blur', '.table_data', function() {
        var id = $(this).data('row_id');
        var table_column = $(this).data('column_name');
        var value = $(this).text();
        $.ajax({
            url: "<?php echo base_url(); ?>holiday_update",
            method: "POST",
            data: {
                id: id,
                table_column: table_column,
                value: value
            },
            success: function(data) {
                load_data();
            }
        })
    });

    $(document).on('click', '.btn_delete', function() {
        var id = $(this).attr('id');
        if (confirm("Are you sure you want to delete this?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>holiday_delete",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    load_data();
                }
            })
        }
    });

});
</script>