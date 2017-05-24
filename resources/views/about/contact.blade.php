@include('about.layouts.header')

@include('layouts.sidebar')

            <div class="col-sm-8 col-md-9">
                <div class="explore_post">
                    <h3>CONTACT US</h3>
                    <div class="map_container">
                        <div id="map" style="height: 100%"></div>
                    </div>

                    <div class="row post_form">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-6">
                            <h4>SEND US A MESSAGE</h4>
                            <div class="container">
                                @if(Session::has('flash_message'))
                                    <div class="alert-alert success">{{Session::get('flash_message')}}</div>
                                @endif

                            </div>
                            <form action="{{url('requestForm')}}" method="post" id="contact_form" role="form"  class="contactForm" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger fade in" id="closeWin">
                                        <a href="#" class="close" id="tagClose" data-dismiss="alert" aria-label="close">&times;</a>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <span style="color: #ff0000;">
                        <li>{{ $error }}</li>
                        </span>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="number" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                                </div>

                                <button type="submit" class="btn">Submit</button>
                            </form>
                        </div>

                        <div class="col-xs-8 col-xs-offset-2 col-sm-6">
                            <h4>Contact Info</h4>

                            <div class="contact_info">
                                <ul>
                                    <li>
                                        <span class="contact_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <span class="text">71-72 B Canal Gardens, Near Bahria Town, Lahore.</span>
                                    </li>
                                    <li>
                                        <span class="contact_icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                        <span class="text">042 35971300  |  042 35971350</span>
                                    </li>
                                    <li>
                                        <span class="contact_icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                        <span class="text">0303 6662700  |  0303 6662800</span>
                                    </li>
                                    <li>
                                        <span class="contact_icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                        <span class="text">info@cornerstone.pk</span>
                                    </li>
                                    <li>
                                        <span class="contact_icon"><i class="fa fa-internet-explorer" aria-hidden="true"></i></span>
                                        <span class="text">www.cornerstone.pk</span>
                                    </li>
                                </ul>

                                <hr>

                                <h4>FOLLOW US ON</h4>
                                <ul>
                                    <li class="social_icon"><a href="https://www.facebook.com/CornerstoneHighSchool/"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a></li>
                                    <li class="social_icon"><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social_icon li"><a href="javascript:void(0);"><i class="fa fa-linkedin"
                                                                                                aria-hidden="true"></i>
                                        </a></li>
                                    <li class="social_icon"><a href="javascript:void(0);"><i
                                                    class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{{--// Google Map--}}
<script>
    // Google Map - initMap
    function initMap() {
        var uluru = {lat: 31.390599, lng: 74.240759};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru,
            scrollwheel: false,
            mapTypeControl: false
            // scaleControl: false,
            // draggable: false,
        });

        var marker = new google.maps.Marker({
            map:map,
            position: uluru
            // icon: 'map_marker.png' // null = default icon
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKy0I7m0jUOeIl9orTbmV0xVD-KVdPX9k&callback=initMap">
</script>


@include('layouts.footer')
