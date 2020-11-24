@include('templates.header')

<body>
    <div class="container-fluid">
        <div class="row">
            @include('templates.side_navbar')
            <div class="col-sm-10 mr-auto ml-auto">
                <div class="container mt-3">
                    <div id="profile_part">
                        <img src="{{url('/upload_image/avatar')}}" alt="Profile pic" style="display: inline-block;">
                        <h2 style="display: inline-block; padding-left: 3%">Name (Username/Nickname)</h2>
                    </div>
                    <br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#about_me">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#joined_game">Joined Game</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#setting">Setting</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="about_me" class="container tab-pane active"><br>
                            <h3>About Me</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="joined_game" class="container tab-pane fade"><br>
                            <h3>Joined Game</h3>
                            <div class="container">
                            @for($i = 0; $i < 3; $i++)
                                <div class="row mb-4">
                                @for($j = 0; $j < 3; $j++)
                                    <div class="col-sm">
                                        @include('components.gamecard')
                                    </div>
                                @endfor
                                </div>
                            @endfor
                            </div>
                        </div>
                        <div id="setting" class="container tab-pane fade"><br>
                            <h3>Setting</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
            </div>
            @include('templates.footer')
        </div>
    </div>
</body>

</html>