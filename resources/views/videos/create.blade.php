@include('layouts.app')

<style>
    .form_container {
        margin-left: 180px;
        margin-top: 60px;
        padding: 20px 30px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="sub-menu">
                            <a href="{{url('dashboard')}}" class="">
                                <span>Dashboard</span>
                            </a>

                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>

</div>


<div class="form_container">

    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert-alert success">{{Session::get('flash_message')}}</div>
        @endif

    </div>

    <form class="form-horizontal" method="post" action="{{url('create/videos')}}" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control form-control-lg" id="title" placeholder="Title">
            </div>
        </div>

        <div class="form-group row">
            <label for="link" class="col-sm-2 col-form-label col-form-label-lg">Link</label>
            <div class="col-sm-10">
                <input type="text" name="link" class="form-control form-control-lg" id="link" placeholder="Title">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

