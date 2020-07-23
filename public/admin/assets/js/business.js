$("#bookedAmount").click(function () {
    var url = "Admin/User/getbookings";
    var checked = 'BookedAmount';
    ajaxget(url, checked);
});

$("#recievableAmount").click(function () {
    var url = "Admin/User/jsonbookrcvable";
    var checked = 'payable';
    ajaxget(url, checked);
});

$("#recievedAmount").click(function () {
    var url = "Admin/User/jsonbookrecieved";
    var checked = 'advanceamount';
    ajaxget(url, checked);
});

$("#bookingStatus").click(function () {
    var url = "Admin/User/jsonbookstatus";
    var checked = 'BookedAmount';
    ajaxget(url, checked);
});
$('#wizard_with_validation > div.actions.clearfix > ul > li:nth-child(3) > a').click(function () {
    alert('fdsadfsadsfadsf');
});

function ajaxget(url, check) {
    var color = ["yellow", "purple", "green", "lightseagreen", "orange", "blue"];
    $.ajax({
        url: url,
        dataType: "JSON",
        success: function (data) {
            var html = '<li class="bob"><p><span class="col " >Invoice ID</span><span class="col " >House Name</span><span class="col ">Arival Date</span><span class="col">Departure Date</span> <span class="col">Contact Person</span> <span class="col">Status</span><span class="col">Alerts</span> <span class=" col">Booked</span></div></p><div class="progress progress-xs progress-transparent custom-color-black"><div class="progress-bar" data-transitiongoal="87"></div></li>';
            for (var count = 0; count < data.length; count++) {
                let startDate = data[count].BookingDate;
                let endDate = data[count].ArrivalDate;
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                var yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;
                let timeDiff = (new Date(endDate)) - (new Date(startDate));
                let days_between_end_start = timeDiff / (1000 * 60 * 60 * 24)
                let perc = days_between_end_start * (50 / 100);
                let perc1 = Math.round(perc);
                let timeDiffc = (new Date(endDate)) - (new Date(today));
                let days_between_end_current = timeDiffc / (1000 * 60 * 60 * 24)
                console.log(days_between_end_start);
                if (days_between_end_current < perc1 && data[count].Status == 'pending') {
                    html += '<li><p><span class="col">' + data[count].Invoice_id + '</span><span class="col">' + data[count].HouseName + '</span><span class="col">' + data[count].ArrivalDate + '</span><span class="col">' + data[count].DepartureDate + '</span> <span class="col">' + data[count].BookingPerson + '</span> <span class="col">' + data[count].Status + '</span> <span class="col"><i class="btn btn-sm round btn-danger">' + days_between_end_current + ' Days Left</i></span><span class=" col ' + check + '">Rs.' + data[count][check] + '/-</span></div></p><div class="progress progress-xs progress-transparent custom-color-' + random_color(color) + '"><div class="progress-bar" data-transitiongoal="87"></div></li>';
                } else if (data[count].Status == 'Completed') {
                    html += '<li><p><span class="col">' + data[count].Invoice_id + '</span><span class="col">' + data[count].HouseName + '</span><span class="col">' + data[count].ArrivalDate + '</span><span class="col">' + data[count].DepartureDate + '</span> <span class="col">' + data[count].BookingPerson + '</span> <span class="col">' + data[count].Status + '</span> <span class="col"><i class="btn btn-sm round btn-success">Completed</i></span><span class=" col ' + check + '">Rs.' + data[count][check] + '/-</span></div></p><div class="progress progress-xs progress-transparent custom-color-' + random_color(color) + '"><div class="progress-bar" data-transitiongoal="87"></div></li>';
                } else if (perc1 <= days_between_end_current && data[count].Status != 'Completed') {
                    html += '<li><p><span class="col">' + data[count].Invoice_id + '</span><span class="col">' + data[count].HouseName + '</span><span class="col">' + data[count].ArrivalDate + '</span><span class="col">' + data[count].DepartureDate + '</span> <span class="col">' + data[count].BookingPerson + '</span> <span class="col">' + data[count].Status + '</span> <span class="col"><i class="btn btn-sm round btn-warning">' + days_between_end_current + ' Days Left</i></span><span class=" col  ' + check + '">Rs.' + data[count][check] + '/-</span></div></p><div class="progress progress-xs progress-transparent custom-color-' + random_color(color) + '"><div class="progress-bar" data-transitiongoal="87"></div></li>';
                } else if (days_between_end_current < 0 && (data[count].Status != 'Completed' || data[count].Status == 'pending')) {
                    html += '<li><p><span class="col">' + data[count].Invoice_id + '</span><span class="col">' + data[count].HouseName + '</span><span class="col">' + data[count].ArrivalDate + '</span><span class="col">' + data[count].DepartureDate + '</span> <span class="col">' + data[count].BookingPerson + '</span> <span class="col">' + data[count].Status + '</span> <span class="col"><i class="btn btn-sm round btn-warning">' + days_between_end_current + ' OverDue</i></span><span class=" col  ' + check + '">Rs.' + data[count][check] + '/-</span></div></p><div class="progress progress-xs progress-transparent custom-color-' + random_color(color) + '"><div class="progress-bar" data-transitiongoal="87"></div></li>';
                }
            }
            $("#sb-site > div.wrap-fluid > div > div:nth-child(3) > div.row.clearfix > div > div > div.body > ul").html(html);
        }
    });

}

var output, started, duration, desired;
duration = 5000;
desired = '50';
output = $('#speed');
started = new Date().getTime();
animationTimer = setInterval(function () {
    if (output.text().trim() === desired || new Date().getTime() - started > duration) {
        console.log('animating');
        output.text('' + Math.floor(Math.random() * 60));
    } else {
        console.log('animating');
        output.text('' + Math.floor(Math.random() * 120));
    }
}, 5000);



$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var bookingperson = button.data('invoice')
    var bookingid = button.data('bookingid')
    var bookedamounts = button.data('bookedamounts')
    var advanceamount = button.data('advanceamount')
    var payable = button.data('payable')
    var modal = $(this)
    modal.find('.modal-title').text('Update Pending invoice # ' + bookingperson)
    modal.find('.modal-body #BookingID').val(bookingid)
    modal.find('.modal-body #bookedamounta').val(bookedamounts)
    modal.find('.modal-body #payablecal').val(payable)
})


$('#exampleModal2').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var bookingperson = button.data('invoice')
    var bookingid = button.data('bookingid')
    var bookedamounts = button.data('bookedamounts')
    var advanceamount = button.data('advanceamount')
    var payable = button.data('payable')
    var modal = $(this)
    modal.find('.modal-title').text('Booking Cancellation invoice # ' + bookingperson)
    modal.find('.modal-body #BookingID').val(bookingid)
    modal.find('.modal-body #bookedamounta').val(bookedamounts)
    modal.find('.modal-body #payablecal').val(payable)
})

$('#farmhousemodal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var fid = button.data('fid')
    var fname = button.data('fname')
    var rent = button.data('rent')
    var description = button.data('description')
    var contactno = button.data('contactno')
    var contactperson = button.data('contactperson')
    var email = button.data('email')
    var capacity = button.data('capacity')
    var personupto = button.data('personupto')
    var url = button.data('url')
    var ntn_no = button.data('ntn_no')
    var gst_no = button.data('gst_no')
    var modal = $(this)
    modal.find('.modal-body  #HouseID').val(fid)
    modal.find('.modal-body  #Name').val(fname)
    modal.find('.modal-body  #Rent').val(rent)
    modal.find('.modal-body  #Description').val(description)
    modal.find('.modal-body  #ContactNo').val(contactno)
    modal.find('.modal-body  #ContactPerson').val(contactperson)
    modal.find('.modal-body  #Email').val(email)
    modal.find('.modal-body  #Capacity').val(capacity)
    modal.find('.modal-body  #PersonUpto').val(personupto)
    modal.find('.modal-body  #URL').val(url)
    modal.find('.modal-body  #NTN_NO').val(ntn_no)
    modal.find('.modal-body  #GST_NO').val(gst_no)
})



$('#employetarget').on('show.bs.modal', function (event) {



    var button = $(event.relatedTarget)
    var employeeid = button.data('employeeid');
    var targetmonth = button.data('targetmonth');
    var startdate = button.data('startdate');
    var enddate = button.data('enddate');
    var targetassign = button.data('targetassign');
    var id = button.data('id');
    var modal = $(this)
    modal.find('.modal-title').text('Update Target Id # ' + id)
    modal.find('.modal-body #EmployeeID').val(employeeid)
    modal.find('.modal-body #TargetMonth').val(targetmonth)
    modal.find('.modal-body #StartData').val(startdate)
    modal.find('.modal-body #EndDate').val(enddate)
    modal.find('.modal-body #TargetAssign').val(targetassign)
})


$('#advanceamount').keyup(function () {
    advance();
})

$('#bookedamounts').keyup(function () {

    var totalAmount = parseInt($(this).val());
    var payable = parseInt($('#payablecal').val());
    if (totalAmount > payable) {
        $('.msg').text('Pay Amount should be less then payable amount ').css('color', 'red');
        $(this).val(0);
        $('#updatest').attr('disabled', true);
    }
    if (totalAmount == payable) {
        $('#updatest').attr('disabled', false);
        $('.msg').text('Procced ').css('color', 'green');
    }
});

function advance() {
    if ($('#advanceamount').val() != "") {
        var pay = $('#BookedAmounts').val() - $('#advanceamount').val();
        $('#payable').val(pay);
    } else {
        $('#payable').val($('#bookedAmount').val());
    }
}

function random_color(color) {
    return color[Math.floor(Math.random() * color.length)];
}

$(document).ready(function () {
    $('#example,#example1,#example2,#example3,#example4,#example5,#example6,#example7,#example8,#example9').DataTable();
});

function ajaxsend(variable) {
    var color = ["yellow", "purple", "green", "lightseagreen", "orange", "blue"];
    $.ajax({
        url: "Admin/User/bookedby",
        method: 'post',
        data: variable,
        dataType: "JSON",
        success: function (data) {
            console.log(data);
            var html = '<li><p><div class="row"><span class="col-md-2 txt">House Name</span><span class="col-md-2 ">Arival Date</span><span class="col-md-2">Departure Date</span> <span class="col-md-3">Contact Person</span> <span class="col-md-1 text-right">Status</span> <span class=" col-md-2 txt text-right">Booked</span></div></p><div class="progress progress-xs progress-transparent custom-color-black"><div class="progress-bar" data-transitiongoal="87"></div></div></li>';
            for (var count = 0; count < data.length; count++) {
                html += '<li><p><div class="row"><span class="col-md-2 txt">' + data[count].HouseName + '</span><span class="col-md-2 ">' + data[count].ArrivalDate + '</span><span class="col-md-2">' + data[count].DepartureDate + '</span> <span class="col-md-2">' + data[count].BookingPerson + '</span> <span class="col-md-2 text-right">' + data[count].Status + '</span> <span class=" col-md-2 txt text-right">Rs.' + data[count].BookedAmount + '/-</span></div></p><div class="progress progress-xs progress-transparent custom-color-' + random_color(color) + '"><div class="progress-bar" data-transitiongoal="87"></div></div></li>';
            }
            $("#myid > div > div > div > div.body > ul").html(html);
        }
    });
}


$(document).ready(function () {
    $("#ratebtn button").click(function (ev) {
        ev.preventDefault()
        alert($(this).val());
        var databtn = $(this).val();
        // if ($(this).attr("value") == "PEAK") {
        //     var databtn = $(this).attr("value");
        // }
        // if ($(this).attr("value") == "MIDPEAK") {
        //     var databtn = $(this).attr("value");
        // }
        // if ($(this).attr("value") == "OFFPEAK") {
        //     var databtn = $(this).attr("value");
        // }
        // if ($(this).attr("value") == "RAMZAN") {
        //     var databtn = $(this).attr("value");
        // }
        $.ajax({
            type: "post",
            url: "ratechange",
            data: databtn,
            dataType: "json",
            success: function (response) {
                location.reload();
            }
        });
    });
});
// date function below
// $(function () {
//     var dtToday = new Date();
//     var month = dtToday.getMonth() + 1;
//     var day = dtToday.getDate();
//     var year = dtToday.getFullYear();
//     if (month < 10)
//         month = '0' + month.toString();
//     if (day < 10)
//         day = '0' + day.toString();
//     var minDate = year + '-' + month + '-' + day;
//     $("input[type='date']").attr('min', minDate);
// });

// moris function below



$(function () {
    "use strict";
    MorrisDonutChart();
});
// Morris donut chart




// $(function() {
//     $.ajax({
//         url: 'dashboard/total-data',
//     }).done(function(data) {
//         Morris.Donut({
//             element: 'm_donut_chart',
//             data: JSON.parse(data),
//             resize: true,
//             colors: ['#2cbfb7', '#3dd1c9', '#60ded7', '#a1ece8', '#87d6c6', '#54cdb4', '#1ab394', '#54cdb4', '#1ab394', '#54cdb4', '#1ab394']
//         });
//         // Morris.Donut({
//         //     element: 'morris-donut-chart',
//         //     data: JSON.parse(data),
//         //     resize: true,
//         //     colors: ['#87d6c6', '#54cdb4', '#1ab394', '#54cdb4', '#1ab394', '#54cdb4', '#1ab394']
//         // });
//     }).fail(function() {});
// });


function MorrisDonutChart() {
    $.ajax({
        url: 'Admin/user/housecount',
    }).done(function (data) {
        // console.log(JSON.parse(data).series);
        Morris.Donut({
            element: 'm_donut_chart',
            data: JSON.parse(data).farmhouse,
            resize: true,
            colors: ['#03658C', '#7CA69E', '#F2594A', '#F28C4B', '#7E6F6A', '#36AFB2', '#9c6db2', '#d24a67', '#89a958', '#00739a', '#BDBDBD']
        });
        Morris.Donut({
            element: 'm_donut_chart1',
            data: JSON.parse(data).timeslot,
            resize: true,
            colors: ['#03658C', '#7CA69E', '#F2594A', '#F28C4B', '#7E6F6A', '#36AFB2', '#9c6db2', '#d24a67', '#89a958', '#00739a', '#BDBDBD']
        });
        Morris.Donut({
            element: 'm_donut_chart2',
            data: JSON.parse(data).totaluser,
            resize: true,
            colors: ['#03658C', '#7CA69E', '#F2594A', '#F28C4B', '#7E6F6A', '#36AFB2', '#9c6db2', '#d24a67', '#89a958', '#00739a', '#BDBDBD']
        });
        // Morris.Donut({
        //     element: 'm_donut_chart3',
        //     data: JSON.parse(data.data1),
        //     resize: true,
        //     colors: ['#2cbfb7', '#3dd1c9', '#60ded7', '#a1ece8', '#87d6c6', '#54cdb4', '#1ab394', '#54cdb4']
        // });
    }).fail(function () {});
}


$(document).ready(function(){
 
 load_folder_list();
 
 function load_folder_list()
 {
  var action = "fetch";
  $.ajax({
   url:"Admin/Functions/action",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#folder_table').html(data);
   }
  });
 }
 
 $(document).on('click', '#create_folder', function(){
  $('#action').val("create");
  $('#folder_name').val('');
  $('#folder_button').val('Create');
  $('#folderModal').modal('show');
  $('#old_name').val('');
  $('#change_title').text("Create Folder");
 });
 
 $(document).on('click', '#folder_button', function(){
  var folder_name = $('#folder_name').val();
  var old_name = $('#old_name').val();
  var action = $('#action').val();
  if(folder_name != '')
  {
   $.ajax({
    url:"Admin/Functions/action",
    method:"POST",
    data:{folder_name:folder_name, old_name:old_name, action:action},
    success:function(data)
    {
     $('#folderModal').modal('hide');
     load_folder_list();
     alert(data);
    }
   });
  }
  else
  {
   alert("Enter Folder Name");
  }
 });
 
 $(document).on("click", ".update", function(){
  var folder_name = $(this).data("name");
  $('#old_name').val(folder_name);
  $('#folder_name').val(folder_name);
  $('#action').val("change");
  $('#folderModal').modal("show");
  $('#folder_button').val('Update');
  $('#change_title').text("Change Folder Name");
 });
 
 $(document).on("click", ".delete", function(){
  var folder_name = $(this).data("name");
  var action = "delete";
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"Admin/Functions/action",
    method:"POST",
    data:{folder_name:folder_name, action:action},
    success:function(data)
    {
     load_folder_list();
     alert(data);
    }
   });
  }
 });
 
 $(document).on('click', '.upload', function(){
  var folder_name = $(this).data("name");
  $('#hidden_folder_name').val(folder_name);
  $('#uploadModal').modal('show');
 });
 
 $('#upload_form').on('submit', function(){
  $.ajax({
   url:"Admin/Functions/upload",
   method:"POST",
   data: new FormData(this),
   contentType: false,
   cache: false,
   processData:false,
   success: function(data)
   { 
    load_folder_list();
    alert(data);
   }
  });
 });
 
 $(document).on('click', '.view_files', function(){
  var folder_name = $(this).data("name");
  var action = "fetch_files";
  $.ajax({
   url:"Admin/Functions/action",
   method:"POST",
   data:{action:action, folder_name:folder_name},
   success:function(data)
   {
    $('#file_list').html(data);
    $('#filelistModal').modal('show');
   }
  });
 });
 
 $(document).on('click', '.remove_file', function(){
  var path = $(this).attr("id");
  var action = "remove_file";
  if(confirm("Are you sure you want to remove this file?"))
  {
   $.ajax({
    url:"Admin/Functions/action",
    method:"POST",
    data:{path:path, action:action},
    success:function(data)
    {
     alert(data);
     $('#filelistModal').modal('hide');
     load_folder_list();
    }
   });
  }
 });

$(document).on('blur', '.change_file_name', function(){
  var folder_name = $(this).data("folder_name");
  var old_file_name = $(this).data("file_name");
  var new_file_name = $(this).text();
  var action = "change_file_name";
  $.ajax({
   url:"Admin/Functions/action",
   method:"POST",
   data:{folder_name:folder_name, old_file_name:old_file_name, new_file_name:new_file_name, action:action},
   success:function(data)
   {
    alert(data);
   }
  });
 });
 
});


 