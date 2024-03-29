@include('templates.header')
@include('components.editimage')
@include('components.editcmt_des_bio',
['modalId' => 'profileModal',
'edittext' => '<label for="editusername">New Username</label>
<input type="text" class="form-control pl-2" id="editusername" placeholder="New Username">',
'edittextarea'=> '<label for="editaboutme">Description</label>
<textarea class="form-control" id="editaboutme" rows="5"></textarea>',
'modaltitle' => 'Edit Profile'])

<body>
    <div class="container-fluid">
        <div class="row">
            @include('templates.side_navbar')
            <div class="col-sm-10 mr-auto ml-auto">
                <div class="container mt-3">
                    <div id="profile_part">
                        <div class="img-container">
                            <img src="{{url('/upload_image/avatar')}}" alt="Profile pic" style="display: inline-block; object-fit: cover; height:210px; width:210px">
                            <div class="img-button">
                                <button id="userId-avatar" class="btn btn-light hover-button" value="avatar" data-toggle="modal" data-target="#editImageModal" onclick="editImageModal(this.id)">
                                    <ion-icon name="camera-outline" class="" style="font-size:30px"></ion-icon>
                                </button>
                            </div>
                        </div>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="joined_game" class="container tab-pane fade"><br>
                            <h3>Joined Game</h3>
                            <div class="container">
                                @for($i = 0; $i < 3; $i++) <div class="row mb-4">
                                    @for($j = 0; $j < 3; $j++) <div class="col-sm">
                                        @include('components.gamecard')
                            </div>
                            @endfor
                        </div>
                        @endfor
                    </div>
                </div>
                <div id="setting" class="container tab-pane fade"><br>
                    <h3>Setting</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3 ml-auto mr-auto" style="font-size: 120%">Edit Profile</div>
                            <div class=" col-sm-9 ml-auto mr-auto">
                                <i class='far fa-edit hover-icon' data-toggle="modal" data-target="#profileModal"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 ml-auto mr-auto" style="font-size: 120%">Location</div>
                            <div class="col-sm-9 ml-auto mr-auto">
                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="outline-dark">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('templates.footer')
    </div>
    </div>
</body>

</html>