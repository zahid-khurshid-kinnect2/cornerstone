@include('layouts.header')

<!-- president_msg -->
<div class="president_msg">
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-3">
                <div class="p-img">
                    <img class="img-responsive" src="{{asset('public/images/president_img.png')}}" alt="image">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="message">
                    <h3>Director’s Message</h3>
                    <div class="well">
                        “Cornerstone is your child’s “second home”. We cherish a vision of intellectual excellence to build a refined and well-groomed individual whose destiny is to arrive at their goals, that is a successful life ahead. We have an ingenious and innovative academic team. <a href="{{url('about')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about_detail -->
<div class="about_detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 about_box">
                <div class="wrapper">
                    <img src="{{asset('public/images/img_about-1.png')}}" height="112" width="112" alt="image">
                    <h4>ABOUT CORNERSTONE</h4>
                    <p>We believe that schooling is the most significant phase in a child’s development because personality formation process of a child starts when he begins school. We at Cornerstone realize the importance of this stage and..

                    </p>
                    <a class="btn btn-link" href="{{url('about')}}">Read More</a>
                </div>
            </div>
            <div class="col-sm-4 about_box">
                <div class="wrapper">
                    <img src="{{asset('public/images/img_about-1.png')}}" height="112" width="112" alt="image">
                    <h4>Our Mission</h4>
                    <p>We at Cornerstone aim to build and foster our future young leaders by shaping their intellect with the desired knowledge, skills, abilities, and character enabling them to briskly fit into the society to help create a great and..

                        </p>
                    <a class="btn btn-link" href="{{url('mission')}}">Read More</a>
                </div>
            </div>
            <div class="col-sm-4 about_box">
                <div class="wrapper">
                    <img src="{{asset('public/images/img_about-1.png')}}" height="112" width="112" alt="image">
                    <h4>Our Vision</h4>
                    <p>We are striving to drive in a global educational environment based on reflective guidance and enduring knowledge together with the societal values towards achieving individual excellence and life goals.



                    </p>
                    <a class="btn btn-link" href="{{url('mission')}}">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Double Slider -->
<!-- <div class="multi_carousel"> -->
    <!-- <div class="container">
        <div class="row">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-xs-6">
                            <div class="item_wrapper">
                                <a href=""><img src="{{asset('public/images/slider-2-img-1.jpg')}}" class="img-responsive"></a>
                                <div class="caption">
                                    <h4>Historic Events</h4>
                                    <p>A knowing of our history and heritage. <a href="#">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-6">
                            <div class="item_wrapper">
                                <a href=""><img src="{{asset('public/images/slider-2-img-2.jpg')}}" class="img-responsive"></a>
                                <div class="caption">
                                    <h4>Extracurricular</h4>
                                    <p>A time out from studies. <a href="#">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-6">
                            <div class="item_wrapper">
                                <a href=""><img src="{{asset('public/images/slider-2-img-1.jpg')}}" class="img-responsive"></a>
                                <div class="caption">
                                    <h4>SPORTS GALA</h4>
                                    <p>Sports Activities <a href="#">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-6">
                            <div class="item_wrapper">
                                <a href=""><img src="{{asset('public/images/slider-2-img-2.jpg')}}" class="img-responsive"></a>
                                <div class="caption">
                                    <h4>Cultural Event</h4>
                                    <p>Culture awareness. <a href="#">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div> -->

<!-- {{--Double Slider--}}
{{--<div class="multi_carousel">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="carousel slide multi-item-carousel" id="theCarousel">--}}
                {{--<div class="carousel-inner">--}}
                    {{--@foreach($event as $events)--}}
                    {{--<div class="item active">--}}

                    {{--<div class="item">--}}
                        {{--<div class="col-xs-6">--}}
                            {{--<div class="item_wrapper">--}}
                                {{--<a href=""><img src="{{asset('storage/app/public/images/events/'.$events->image)}}" class="img-responsive"></a>--}}

                                {{--<div class="caption">--}}
                                    {{--<h4>{{$events->title}}</h4>--}}
                                    {{--<p>{{$events->body}}. <a href="#">Read More</a></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>--}}
                {{--<a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}} -->

@include('layouts.footer')
