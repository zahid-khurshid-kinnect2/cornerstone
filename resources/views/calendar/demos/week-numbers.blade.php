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
				right: 'month,agendaWeek,agendaDay,listWeek'
			},
			defaultDate: '2017-04-12',
			navLinks: true, // can click day/week names to navigate views

			weekNumbers: true,
			weekNumbersWithinDays: true,
			weekNumberCalculation: 'ISO',

			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2017-04-01'
				},
				{
					title: 'Meeting',
					start: '2017-04-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-04-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-04-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-04-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-04-28'
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
