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




<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="form_container">
            <h2>All Events</h2></div>
        <div class="col-md-2">
            <a href="{{url('/create/events')}}" class="btn btn-lg btn-primary">Create New Event</a>

        </div>
    </div>

</div>

<div class="container">


    <h2></h2>
    <table class="table table-hover">
        <thead>

            <tr>
            <th>Title</th>
            <th>Body</th>
            <th>Updated At</th>

        </tr>
        </thead>
        @foreach($event as $events)

        <tbody>
        <tr>
            <td><a href="">{{$events->title}}</a></td>
            <td>{{$events->body}}</td>
            <td>{{$events->image}}</td>
            {{--{!! Html::linkRoute('events.edit','Edit',array($events->id)),array('class'=>'btn btn-primary') !!}--}}
            <td><a href="{{url('events/edit/'.$events->id)}}" class="btn btn-primary">Edit</a></td>
            <td><a href="{{url('events/delete/'.$events->id)}}" class="btn btn-danger" Onclick="return ConfirmDelete();">Delete</a></td>

            @endforeach


        </tr>


        </tbody>
    </table>
</div>

<script>
    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }
</script>
























