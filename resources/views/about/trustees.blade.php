@include('about.layouts.header')

@include('layouts.sidebar')

            <div class="col-sm-8 col-md-9">
                <div class="explore_post">
                    <h3>BOARD OF TRUSTEES</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id diam ipsum. Sed finibus libero eget nunc dapibus, id porta ex dignissim. In et lorem et felis varius gravida eget non urna. Ut nisl lorem, pretium id orci at, posuere cursus nisi. Nulla fermentum aliquet tincidunt. Quisque vel est eleifend, vehicula risus gravida, pulvinar felis. Mauris at nisl nulla. Phasellus blandit erat eu sem suscipit, at consectetur ligula tincidunt.</p>
                    <ul>
                        <li>Cras malesuada nisl auctor, egestas tortor sit amet, mollis quam.</li>
                        <li>Praesent eget tellus tristique, vestibulum mi vel, lacinia diam.</li>
                        <li>Suspendisse vulputate ligula non nisl malesuada, id bibendum neque mattis.</li>
                        <li>Ut dignissim velit non mauris molestie dignissim.</li>
                    </ul>

                    <div class="board_img">
                        <h4>EXECUTIVE COMMITTEE</h4>

                        <div class="row">
                            <div class="col-xs-3">
                                <div class="board_item">
                                    <img class="img-responsive" src="{{asset('public/images/board_president.jpg')}}" alt="image">
                                    <div class="position">President</div>
                                    <div class="name">Wajiha Raoof</div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="board_item">
                                    <img class="img-responsive" src="{{asset('public/images/board_sample_img.jpg')}}" height="210" width="195" alt="image">
                                    <div class="position">Vice-President</div>
                                    <div class="name">Name Here</div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="board_item">
                                    <img class="img-responsive" src="{{asset('public/images/board_sample_img.jpg')}}" height="210" width="195" alt="image">
                                    <div class="position">Principal</div>
                                    <div class="name">Name Here</div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="board_item">
                                    <img class="img-responsive" src="{{asset('public/images/board_sample_img.jpg')}}" height="210" width="195" alt="image">
                                    <div class="position">Secretary</div>
                                    <div class="name">Name Here</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="board_img">
                        <h4>TRUSTEES</h4>

                        <div class="row">
                            <div class="col-xs-3">
                                <div class="board_item">
                                    <img class="img-responsive" src="{{asset('public/images/board_sample_img.jpg')}}" height="210" width="195" alt="image">
                                    <div class="position">Position</div>
                                    <div class="name">Name Here</div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="board_item">
                                    <img class="img-responsive" src="{{asset('public/images/board_sample_img.jpg')}}" height="210" width="195" alt="image">
                                    <div class="position">Position</div>
                                    <div class="name">Name Here</div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="board_item">
                                    <img class="img-responsive" src="{{asset('public/images/board_sample_img.jpg')}}" height="210" width="195" alt="image">
                                    <div class="position">Position</div>
                                    <div class="name">Name Here</div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
