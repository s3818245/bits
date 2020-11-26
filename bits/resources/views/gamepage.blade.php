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
                            <!-- Avatar -->
                            <img class="rounded-circle border border-logo" style="max-height: 190px;" src="{{url('/upload_image/gamepagelogo.png')}}" alt="Logo">
                            <!-- Dropdown section -->
                            <div class="dropleft pull-right">
                                <button class="btn btn-light hover-button" type="button" style="padding: 2px 5px 0px 5px;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                    <ion-icon name="camera-outline" class="" style="font-size:30px">  </ion-icon>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="changeImageMenu">
                                    <a class="dropdown-item" id="edit-banner" href="" data-toggle="modal" data-target="#editImageModal" value="banner" onclick="editImageModal(this.id)">Change banner image</a>
                                    <a class="dropdown-item" id="edit-logo" href="" data-toggle="modal" data-target="#editImageModal" value="logo" onclick="editImageModal(this.id)">Change logo image</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <br>
                            <h2>Game title</h2>
                            Hashtags
                        </div>
                    </div>

                    <!-- Modal to upload image -->
                    <!-- Banner -->
                    <div class="modal fade bd-example-modal-sm" id="editImageModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editImageModalTitle"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="" action="">
                                    <div style="padding: 15px 20px 15px 10px">
                                        <input type="file" id="imageFile" name="">
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </form>
                            </div>
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