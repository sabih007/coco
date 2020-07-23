<head>
    <title></title>

    <link href='<?php echo base_url();?>public/bootstrap/packages/core/main.css' rel='stylesheet' />
    <link href='<?php echo base_url();?>public/bootstrap/packages/daygrid/main.css' rel='stylesheet' />
    <link href='<?php echo base_url();?>public/bootstrap/packages/list/main.css' rel='stylesheet' />
    <script src='<?php echo base_url();?>public/bootstrap/packages/core/main.js'></script>
    <script src='<?php echo base_url();?>public/bootstrap/packages/interaction/main.js'></script>
    <script src='<?php echo base_url();?>public/bootstrap/packages/daygrid/main.js'></script>
    <script src='<?php echo base_url();?>public/bootstrap/packages/list/main.js'></script>
    <script src='<?php echo base_url();?>public/bootstrap/packages/google-calendar/main.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    user = "strict";
    var event = <?php echo json_encode($data) ?> ;
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'list', 'googleCalendar'],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,listYear'
            },
            displayEventTime: false,
            // To make your own Google API key, follow the directions here:
            googleCalendarApiKey: 'AIzaSyAVCP2Ex0sgpZUWn08k5R8qpSzVTNFOWVA',
            eventSources: [
                event,
                'en.pk#holiday@group.v.calendar.google.com'
            ],
            eventClick: function(event) {
                // Prevent redirect to Google Calendar
                event.jsEvent.cancelBubble = true;
                event.jsEvent.preventDefault();
            }
        });
        calendar.render();
    });

     </script>
</head>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="nest">
            <div class="title-alt">
                <h6>Booking calendar</h6>
            </div>
            <div class="body-nest">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>