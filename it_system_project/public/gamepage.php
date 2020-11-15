<?php 
    require_once("../config.php");
    include(TEMPLATES . DS . "header.php");
?>

<div class="container-fluid">
    <div class="row">
        <?php include(TEMPLATES . DS . "side_navbar.php");?>
        <div class="col-sm-11">

            <div class="card">
                <img class="card-img"src="https://pm1.narvii.com/7015/0102226ac2e9bd46eec572464ee9b7ed010be3a6r1-1500-500v2_uhq.jpg" alt="banner" style = "object-fit: cover; height:190px; width:100%">
                <div class="card-img-overlay">
                    <img class="rounded-circle border border-logo" style="max-height: 190px;" src="https://i.pinimg.com/originals/6f/fc/1f/6ffc1f4eef25a6af011ac1d8e1f19861.png" alt="Logo">
                </div>
                <div class="card-footer">
                    <br>
                    <h2>Game title</h2>
                    Hashtags
                </div>
            </div>

            <div class="row">
                <ul class="nav nav-tabs ">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#description" aria-controls="description" aria-selected="true">Description:</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#post" aria-controls="post" aria-selected="false">Post:</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#rating" aria-controls="rating" aria-selected="false">Rating:</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#memberlist" aria-controls="memberlist" aria-selected="false">Member list:</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" style="margin-left:2%">
                <div class="tab-pane fade show active" id="description" aria-labelledby="description"><?php include("infocard.php")?></div>
                <div class="tab-pane fade" id="post" aria-labelledby="post"><?php include("postcard.php")?></div>
                <div class="tab-pane fade" id="rating" aria-labelledby="rating"><?php include("ratingcard.php")?></div>
                <div class="tab-pane fade" id="memberlist" aria-labelledby="memberlist"><?php include("membercard.php")?></div>
            </div>

        </div>
    </div>

</div>

<script type="text/javascript" src="js/tools.js"></script>