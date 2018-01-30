@include('about.layouts.header')

@include('layouts.sidebar')

<div class="col-sm-8 col-md-9">
    <div class="explore_post">
        <h3>Apply</h3>


        <div class="row post_form">
            <div class="col-xs-8 col-xs-offset-2 col-sm-6">
                <h4>Send US Your Details</h4>
                <div class="container">
                    @if(Session::has('flash_message'))
                        <div class="alert-alert success">{{Session::get('flash_message')}}</div>
                    @endif

                </div>
                <form action="{{url('applyForm')}}" method="post" id="apply_form" role="form"  class="applyForm" enctype="multipart/form-data">
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

                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="middle-name" class="control-label">Upload CV <span class="mandatory-color">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input id="file" type="file" class="btn btn-secondary" name="cv">
                        </div>
                    </div>

                    {{--Document File--}}
                    <div class="form-group hide" id="preview">
                        <div class="col-sm-8 col-sm-offset-4">
                            <div class="emp_upload_avatar">
                                <img class="img-responsive" alt="" src="">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>


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
