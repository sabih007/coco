// "use strict";


// var events = <?php echo json_encode($data) ?>;


// $('#calendar').fullCalendar({
//     header: {
//         left: 'prev,next today',
//         center: 'title',
//         right: 'month,agendaWeek,agendaDay,listWeek'
//     },
//     defaultDate: new Date(),


//     eventLimit: true, // allow "more" link when too many events
//     events: events
// });

user = "strict";


var date = new Date()
var d = date.getDate(),
    m = date.getMonth(),
    y = date.getFullYear()

$('#calendar').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
    },
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    drop: function() {
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove();
        }
    },
    eventLimit: true, // allow "more" link when too many events
    buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
    },
    eventLimit: true,
    events: events
});