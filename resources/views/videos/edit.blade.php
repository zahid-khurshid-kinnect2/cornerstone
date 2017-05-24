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

    {!!Form::model ($video,['url' => 'videos/update/'.$video->id,'method' => 'post', 'id' => 'editForm','enctype'=> 'multipart/form-data'])!!}

    {{ Form::label('title', 'Title') }}
    {{  Form::text('title',$video->title,["class" =>"form-control form-control-lg"])}}


    {{ Form::label('link', 'Link') }}
    {{  Form::text('link',$video->link,["class" =>"form-control form-control-lg"])}}



    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <a href="{{URL::previous()}}" class="btn btn-primary">Cancel</a>
            <button type="submit" id="update" class="btn btn-success">Update</button>
        </div>
    </div>




    {!! Form::close() !!}
</div>



<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
