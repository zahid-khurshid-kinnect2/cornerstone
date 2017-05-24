<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
	<link href='{{asset('public/calendar/css/fullcalendar.min.css')}}' rel='stylesheet' />
	<link href='{{asset('public/calendar/css/fullcalendar.print.min.css')}}' rel='stylesheet' media='print' />
	<script src='{{asset('public/calendar/js/moment.min.js')}}'></script>
    <script src='{{asset('public/calendar/jquery/jquery.min.js')}}'></script>
	<script src='{{asset('public/calendar/js/fullcalendar.min.js')}}'></script>
	<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			defaultDate: '2017-04-12',
			navLinks: true, // can click day/week names to navigate views
			businessHours: true, // display business hours
			editable: true,
			events: [
				{
					title: 'Business Lunch',
					start: '2017-04-03T13:00:00',
					constraint: 'businessHours'
				},
				{
					title: 'Meeting',
					start: '2017-04-13T11:00:00',
					constraint: 'availableForMeeting', // defined below
					color: '#257e4a'
				},
				{
					title: 'Conference',
					start: '2017-04-18',
					end: '2017-04-20'
				},
				{
					title: 'Party',
					start: '2017-04-29T20:00:00'
				},

				// areas where "Meeting" must be dropped
				{
					id: 'availableForMeeting',
					start: '2017-04-11T10:00:00',
					end: '2017-04-11T16:00:00',
					rendering: 'background'
				},
				{
					id: 'availableForMeeting',
					start: '2017-04-13T10:00:00',
					end: '2017-04-13T16:00:00',
					rendering: 'background'
				},

				// red areas where no events can be dropped
				{
					start: '2017-04-24',
					end: '2017-04-28',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
				{
					start: '2017-04-06',
					end: '2017-04-08',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				}
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'></div>

</body>
</html>
