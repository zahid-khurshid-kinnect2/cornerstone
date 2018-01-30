<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cornerstone School</title>

    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="header_main">
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <!--<li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>-->
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active"><img src="{{asset('public/images/03.jpg')}}" alt="image-carousel"></div>
            <div class="item"><img src="{{asset('public/images/002.jpg')}}" alt="image-carousel"></div>
            <div class="item"><img src="{{asset('public/images/003.jpg')}}" alt="image-carousel"></div>
            <!--<div class="item"><img src="{{asset('public/images/04.jpg')}}" alt="image-carousel"></div>
            <div class="item"><img src="{{asset('public/images/02.jpg')}}" alt="image-carousel"></div>-->
        </div>
        <!-- Carousel nav -->
        <!--<a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>-->
        <!--<a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>-->
    </div>

    <div class="nav_top" >
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">DOWNLOADS</a></li>
                <li><a href="#">QUICK LINKS</a></li>
                <li><a href="#">MEDIA</a></li>
                <li><a href="#">PORTALS</a></li>
            </ul>
        </div>
    </div>

    <div class="logo_container">
        <div class="logo">
            <a class="btn btn_logo" href="{{url('/')}}">
                <img class="img-responsive" src="{{asset('public/images/logo.png')}}" alt="image-logo">
            </a>
        </div>
    </div>

    <nav id="navbar_corner" class="navbar navbar_corner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle btn collapsed" data-toggle="collapse" data-target="#corner_nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="corner_nav">
                <ul class="nav nav_corner navbar-nav">
                    <li class="active">
                        <a href="{{url('science-lab')}}">Facilities</a>
                        <div class="dropdown_content">
                            <ul>
                                <li><a href="{{url('science-lab')}}">Science Lab</a></li>
                                <li><a href="{{url('food-nutrition')}}">Food & Nutrition Lab</a></li>
                                <li><a href="{{url('pool')}}">Swimming Pool</a></li>
                                <li><a href="{{url('infirmary')}}">Infirmary</a></li>
                                <li><a href="{{url('day-care')}}">Day Care</a></li>
                                <li><a href="{{url('indoor-play')}}">Indoor Play Gym</a></li>
                                <li><a href="{{url('student-locker')}}">Student Locker</a></li>
                                <li><a href="{{url('art-room')}}">Art Room</a></li>
                                <li><a href="{{url('cafeteria')}}">Cafeteria</a></li>
                                <li><a href="{{url('ict-lab')}}">ICT Lab</a></li>
                                <li><a href="{{url('gymnasium')}}">Gymnasium</a></li>
                                <li><a href="{{url('media-room')}}">Media Room</a></li>
                                <li><a href="{{url('library')}}">Library</a></li>
                                <li><a href="{{url('transport')}}">School Transport</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('about')}}">About</a>
                        <div class="dropdown_content">
                            <ul>
                            	<li><a href="{{url('admissions')}}">Admissions</a></li>
                                <li><a href="{{url('about')}}">Message of Director</a></li>
                                <li><a href="{{url('mission')}}">Mission / Vission</a></li>
                                <li><a href="{{url('faculty')}}">Meet The Team</a></li>
                                <li><a href="{{url('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Discover</a>
                        <div class="dropdown_content">
                            <ul>
                            	
                                <li><a href="{{url('pre-school')}}">Pre School</a></li>
                                <li><a href="{{url('elementary')}}">Elementary</a></li>
                                <li><a href="{{url('middle-school')}}">Middle School</a></li>
                                <li><a href="{{url('high-school')}}">High School</a></li>
                                <li><a href="{{url('matriculation')}}">Matriculation</a></li>
                                <li><a href="{{url('igcse')}}">IGCSE</a></li>
                                <li><a href="{{url('a-levels')}}">A-Levels</a></li>
                                <li><a href="{{url('internship')}}">Internship Program</a></li>
                                <li><a href="{{url('shadow-teaching')}}">Shadow Teaching</a></li>                                
                                
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('photos')}}">Connect</a>
                        <div class="dropdown_content">
                            <ul>
                                <li><a href="{{url('calendar')}}">Calender</a></li>
                                <!-- <li><a href="javascript:void(0);">Parent Portal</a></li> -->                                
                                <li><a href="{{url('photos')}}">Activities</a></li>
                                <li><a href="{{url('apply')}}">Apply</a></li>
                            </ul>
                        </div>
                    </li>
                    <!--<li class="dropdown">-->
                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                    <!--<ul class="dropdown-menu">-->
                    <!--<li><a href="#">Action</a></li>-->
                    <!--<li><a href="#">Another action</a></li>-->
                    <!--<li><a href="#">Something else here</a></li>-->
                    <!--<li role="separator" class="divider"></li>-->
                    <!--<li><a href="#">Separated link</a></li>-->
                    <!--<li role="separator" class="divider"></li>-->
                    <!--<li><a href="#">One more separated link</a></li>-->
                    <!--</ul>-->
                    <!--</li>-->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="scroll_to">
        <button class="btn_scroll">
            <img src="{{asset('public/images/down_arrow.png')}}" alt="arrow">
        </button>
    </div>

    <!--<div class="fixed_buttons">
        <a href="javascript:void(0);" class="btn btn_fix">Virtual Tour</a>
        <a href="javascript:void(0);" class="btn btn_fix welcome">Welcome Video</a>
    </div>-->
</header>
