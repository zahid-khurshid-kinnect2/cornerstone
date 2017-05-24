<!-- footer-top -->
<div class="footer_top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="content">
                    <div class="footer_logo">
                        <img src="{{asset('public/images/footer-logo.png')}}" height="62" width="58" alt="image">
                        <img src="{{asset('public/images/footer-logo-text.png')}}" height="13" width="229" alt="image">
                    </div>
                    <p>
                       We believe that schooling is the most significant phase in a child’s development because personality formation process of a child starts when he begins school.
                    </p>
                    <p>
                        We at Cornerstone realize the importance of this stage and emphasize the most appropriate and accurate type of knowledge, skills, and attitudes to be inculcated at elementary level program.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content">
                    <h3>Latest News</h3>
                    <p>
                        Admissions Open<br>
                        <span>May 1, 2017</span>
                    </p>

                    <p>
                        A time out from studies<br>
                        <span>March 21, 2017</span>
                    </p>

                    <p>
                        Admissions Open<br>
                        <span>May 01, 2017</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content">
                    <h3>Get in touch</h3>
                    <ul>
                        <li>0321 4029030</li>
                        <li>info@cornerstoneschool.com</li>
                        <li>www.cornerstoneschool.com</li>
                        <li>1-km Defence Road, off Bhuptian, Chowk, Lahore.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer-bottom -->
<div class="container-fluid footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-7">
                <p>Copyright © 2017 Corner Stone School. All rights reserved.</p>
            </div>
            <div class="col-xs-5 footer_nav">
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('public/js/jquery.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/custom.js')}}"></script>
<script src='{{asset('public/calendar/js/moment.min.js')}}'></script>
<script src='{{asset('public/calendar/js/fullcalendar.min.js')}}'></script>
<script>

        $(document).ready(function() {

		$('#calendar').fullCalendar({
			defaultDate: '2017-04-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
                    url: 'http://google.com/',
					start: '2017-04-14'
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

</body>
</html>
