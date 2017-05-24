@include('gallery.layouts.header')

@include('gallery.layouts.sidebar')


<div class="col-sm-8 col-md-9">
    <div class="explore_post">



<h3> Video Gallery </h3>
{{--<div style:margin-right:10px;">--}}
        @foreach($video as $videos)
<div class="col-md-4">

    <div>
        <h4 class="panel-title"><center>{{$videos->title}}</center></h4>
    </div>

    <div>
        <iframe class="embed-responsive-item" src="{{$videos->link}}" width="275" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
    </div>

</div>
    </div>

</div>

@endforeach

{{--<div class="col-md-4">--}}
    {{--<div >--}}
        {{--<h4 class="panel-title"><center>23rd March 2016.</center></h4>--}}
    {{--</div>--}}

    {{--<iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FCornerstoneHighSchool%2Fvideos%2F1596052590716048%2F&show_text=0&width=275" width="275" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>--}}


{{--</div>--}}


{{--<div class="col-md-4">--}}

    {{--<div >--}}
        {{--<h4 class="panel-title"><center>*Cap and gown ceremony</center></h4>--}}
    {{--</div>--}}

    {{--<iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FCornerstoneHighSchool%2Fvideos%2F1631449857176321%2F&show_text=0&width=275" width="275" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>--}}

{{--</div>--}}


{{--<div class="col-md-4">--}}

    {{--<div>--}}
        {{--<h4 class="panel-title"><center>*Video of activities</center></h4>--}}
    {{--</div>--}}

    {{--<iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FCornerstoneHighSchool%2Fvideos%2F1633505733637400%2F&show_text=0&width=275" width="275" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>--}}

{{--</div>--}}


{{--<div class="col-md-4">--}}
    {{--<div>--}}
        {{--<h4 class="panel-title"><center>Pakistan Day 2016</center></h4>--}}
    {{--</div>--}}

    {{--<iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FCornerstoneHighSchool%2Fvideos%2F1588947021426605%2F&show_text=0&width=275" width="275" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>--}}

{{--</div>--}}

    {{--</div>--}}
{{--</div>--}}



@include('layouts.footer')
