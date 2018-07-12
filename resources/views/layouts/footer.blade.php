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
                    <h3>Connect</h3>
                  
                    
                        
                        	<div class="anchor"><a href="{{url('photos')}}">Activities</a></div>
                        		
                        		<!--<span>May 1, 2017</span>-->
                        		
                        		
                        		
                        		
                        		<div class="anchor"><a href="{{url('calendar')}}">Calender</a></div>
                       
                        <!--A time out from studies<br>
                        <span>March 21, 2017</span>-->
                    

                    
                       
                      <div class="anchor">
                      	<a href="{{url('apply')}}">Apply</a>
                      </div>
                       
                       <!-- Admissions Open<br>
                        <span>May 01, 2017</span>-->
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="content">
                    <h3>Get in touch</h3>
                    <ul>
                        <li>042-35454001-02</li>
                        <li>hr@cornerstone.pk</li>
                        <li>www.cornerstone.pk</li>
                        <li>71-72 B, Canal Gardens, Near Bahria Town, Lahore.</li>
                    </ul>
                    <div class="soc_nav">
          <a class="btn fa" href="https://www.facebook.com/CornerstoneHighSchool/?ref=br_rs" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <!-- <a class="btn tw" href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a class="btn go" href="javascript:void(0);"><i class="fa fa-google-plus" aria-hidden="true"></i></a> -->
        </div>
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
                <p>Copyright © 2017 Cornerstone School. All rights reserved.</p>
            </div>
            <div class="col-xs-5 footer_nav">
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="#">Events</a></li>
                    <!-- <li><a href="#">Blog</a></li> -->
                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                </ul>
                
            </div>
        </div>
    </div>
 </div>


<script src="{{asset('public/js/jquery.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/custom.js')}}"></script>
<script src="{{asset('public/calendar/js/moment.min.js')}}"></script>
<script src="{{asset('public/calendar/js/fullcalendar.min.js')}}"></script>
<script>

        $(document).ready(function() {

		$('#calendar').fullCalendar({
			defaultDate: '2017-08-15',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'SCHOOL RE-OPENS AND ORIENTATION WEEK',
                    url: '',
					start: '2017-08-15',
					end:'2017-08-19'
				},
				{
					title: 'EID UL ADHA BREAK',
					url: '',
					start: '2017-08-31',
                    end:'2017-09-03'
				},
                {
                    title: 'Peace day/Orientation/ Start of Election campaign',
                    url: '',
                    start: '2017-09-04',
                    end:'2017-09-09'
                },
                {
                    title: 'PTM/ Elections of Student council/ Commencement of Leadership Program for the whole of 1st term',
                    url: '',
                    start: '2017-09-11',
                    end:'2017-09-16'
                },
                {
                    title: 'Induction Ceremony',
                    url: '',
                    start: '2017-09-18',
                    end:'2017-09-23'
                },
                {
                    title: ' ASHURA',
                    url: '',
                    start: '2017-09-25',
                    end:'2017-09-30'
                },
                {
                    title: 'MATHS FUN DAY GRADE1 TO 5',
                    url: '',
                    start: '2017-10-03',
                    end:'2017-10-07'
                },
                {
                    title: 'English DEBATE GRADE 1 TILL 9/Teachers day/BAKE SALE GRADE 6 AND 7',
                    url: '',
                    start: '2017-10-09',
                    end:'2017-10-17'
                },
                {
                    title: 'International Trip to Malaysia.  Grade 7 to 9.',
                    url: '',
                    start: '2017-10-16',
                    end:'2017-10-21'
                },
                {
                    title: 'SPORTS DAY',
                    url: '',
                    start: '2017-10-23',
                    end:'2017-10-28'
                },
                {
                    title: 'Art Exhibition(pre-school)',
                    url: '',
                    start: '2017-10-30',
                    end:'2017-11-04'
                },
                {
                    title: 'Iqbal Day/BAZM-E-URDU',
                    url: '',
                    start: '2017-11-06',
                    end:'2017-11-11'
                },
                {
                    title: 'MOCK GRADE 5 TILL 9',
                    url: '',
                    start: '2017-11-20',
                    end:'2017-11-25'
                },
                {
                    title: 'KINDNESS WEEK GRADE 1 TILL 4',
                    url: '',
                    start: '2017-12-04',
                    end:'2017-12-09'
                },
                {
                    title: 'FIRST TERM EXAMS',
                    url: '',
                    start: '2017-12-14',
                    end:'2017-12-21'
                },
                {
                    title: ' WINTER BREAK',
                    url: '',
                    start: '2017-12-21',
                    end:'2017-12-28'
                }
			]
		});

	

	});

</script>

</body>
</html>
