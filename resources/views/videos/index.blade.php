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
            <h2>All Videos</h2></div>
        <div class="col-md-2">
            <a href="{{url('/create/videos')}}" class="btn btn-lg btn-primary">Add New Video</a>

        </div>
    </div>

</div>

<div class="container">


    <h2></h2>
    <table class="table table-hover">
        <thead>

            <tr>
            <th>Title</th>
            <th>Link</th>


        </tr>
        </thead>
        @foreach($video as $videos)

        <tbody>
        <tr>
            <td><a href="">{{$videos->title}}</a></td>
            <td>{{$videos->link}}</td>

            <td><a href="{{url('videos/edit/'.$videos->id)}}" class="btn btn-primary">Edit</a></td>
            <td><a href="{{url('videos/delete/'.$videos->id)}}" class="btn btn-danger" Onclick="return ConfirmDelete();">Delete</a></td>

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
























