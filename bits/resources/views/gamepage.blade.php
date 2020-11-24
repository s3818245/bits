@include('templates.header')

<div class="container-fluid">
    <div class="row">
        @include('templates.side_navbar')

        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <div class="card">
                        <img class="card-img" src="{{url('/upload_image/gamepagecover.jpg')}}" alt="banner" style="object-fit: cover; height:190px; width:100%">
                        <div class="card-img-overlay">
                            <img class="rounded-circle border border-logo" style="max-height: 190px;" src="{{url('/upload_image/gamepagelogo.png')}}" alt="Logo">
                        </div>
                        <div class="card-footer">
                            <br>
                            <h2>Game title</h2>
                            Hashtags
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <ul class="nav nav-tabs ">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#description" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#post" aria-controls="post" aria-selected="false">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#rating" aria-controls="rating" aria-selected="false">Rating</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#memberlist" aria-controls="memberlist" aria-selected="false">Member list</a>
                        </li>
                    </ul>
                    <div class="tab-content" style="margin-left:2%">
                        <div class="tab-pane fade show active" id="description" aria-labelledby="description">@include('components.infocard')</div>
                        <div class="tab-pane fade" id="post" aria-labelledby="post">@include('components.postcard')</div>
                        <div class="tab-pane fade" id="rating" aria-labelledby="rating">@include('components.ratingcard')</div>
                        <div class="tab-pane fade" id="memberlist" aria-labelledby="memberlist">@include('components.membercard')</div>
                    </div>
                </div>
            </div>



        </div>
        @include('templates.footer')
    </div>

</div>

<script type="text/javascript" src="js/tools.js"></script>