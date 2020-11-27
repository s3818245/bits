<div class="container-fluid">
    <div class="container">
        <div class="px-4 pt-3">
            <div class="card mb-4">
                <div class="card-body text-muted">
                    <div class="row ml-2">
                        <h5>Choose something to post</h5>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-1">
                            <img class="rounded-circle border border-logo" style="max-height: 50px; max-width: 50px;" src="{{url('/upload_image/gamecardlogo.png')}}" alt="Logo">
                        </div>
                        <div class="col-10">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#add-image-post"> Image </button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#add-text-post"> Discussion </button>
                            @include('components.addpost')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @include('components.postlayout')
    </div>
</div>