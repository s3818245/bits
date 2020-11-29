@include('components.editcmt_des_bio', 
['modalId' => 'commentModal',
'edittext' => '<label for="editcomment">New Comment</label>
                <input type="text" class="form-control pl-2" id="editcomment" placeholder="New Comment">',
'modaltitle' => 'Edit Comment'])
<!-- Modal -->
<div class="modal fade" id="postcomment" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="">Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- Comment layout -->
                @for($i = 0; $i < 3; $i++)
                <div class="card mb-4" >
                    <div class="card-body text-muted" style=" padding-top:2px!important">
                        <div class="row justify-content-between" style="font-size:15px;">
                            <div class="px-1" style="width: auto; display: flex;">
                                Username
                            </div>
                            <div class="px-1">
                                Date commented
                            </div>
                        </div>
                        <div class="row border-top" style="color:black">
                            <div class="px-1 col-sm-11" style="height: auto;">
                                Comment
                            </div>
                            <div class="px-1 col-sm-1" style="height: auto;">
                                <a data-toggle="modal" href="#commentModal" data-dismiss="modal">
                                    <i  class='far fa-edit hover-icon' data-placement="top" title="Edit Comment" data-toggle="tooltip"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="container-fluid">
                <form action="" class="">
                    <div class="form-group form-inline d-flex justify-content-betweens">
                        <input type="text"  style="width: 80%;" class="form-control" id="comment" placeholder="Enter your comment">
                        <button type="button" class="btn btn-secondary btn-md mx-2">Post</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>