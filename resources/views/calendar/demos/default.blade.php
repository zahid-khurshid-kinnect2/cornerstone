@include('about.layouts.header')
<link href='{{asset('public/calendar/css/fullcalendar.min.css')}}' rel='stylesheet' />
<link href='{{asset('public/calendar/css/fullcalendar.print.min.css')}}' rel='stylesheet' media='print' />

<style>

	

	#calendar {

		max-width: 900px;
		margin: 0 auto;
	}

</style>
<div id='calendar'></div>
	{{--<iframe src="https://calendar.google.com/calendar/embed?src=sheraz.alibutt7%40gmail.com&ctz=Asia/Karachi" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>--}}
@include('layouts.footer')

