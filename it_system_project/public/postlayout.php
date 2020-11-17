<!-- Post with image -->
<div class="px-4 pt-3">
    <div class="card mb-4">
        <div class="card-header text-muted">
            Posted by: Username
            <i class="fas fa-edit pull-right hover-icon"></i>
        </div>

        <div class="card-body">
            <h2 class="card-title">Post title</h2>
            <p class="class-text"> Post description
            </p>
        </div>

        <div class="p-4">
            <img class="card-img-bottom" src="http://placehold.it/750x300" alt=post-image>
        </div>

        <div class="card-footer text-muted">
            <i class="fa fa-thumbs-up hover-icon" id="post-01-up" onclick="votePost(this.id);" value="0"> 0 </i>
            &nbsp;&nbsp;
            <i class=" fa fa-thumbs-down hover-icon" id="post-01-down" onclick="votePost(this.id);" value="0"> 0 </i>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <i class=" far fa-comment-dots hover-icon" data-toggle="modal" data-target="#postcomment"></i>
            &nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>
</div>

<!-- Post without image -->

<div class="px-4 pt-3">
    <div class="card mb-4">

        <div class="card-header text-muted">
            Posted by: Username
            <i class='fas fa-edit pull-right hover-icon'></i>
        </div>

        <div class="card-body">
            <h2 class="card-title">Post title</h2>
            <p class="class-text"> Post description
            </p>
        </div>

        <div class="card-footer text-muted">

            <i class="fa fa-thumbs-up hover-icon" id="post-02-up" onclick="votePost(this.id);" value="0"> 0 </i>

            &nbsp;&nbsp;

            <i class="fa fa-thumbs-down hover-icon" id="post-02-down" onclick="votePost(this.id);" value="0"> 0 </i>

            &nbsp;&nbsp;&nbsp;&nbsp;

            <i class="far fa-comment-dots hover-icon" data-toggle="modal" data-target="#postcomment"></i>

            &nbsp;&nbsp;&nbsp;&nbsp;

        </div>
    </div>

    <?php include(PAGES . DS . "postcomment.php");?>
</div>