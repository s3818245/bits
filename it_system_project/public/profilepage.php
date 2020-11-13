<?php include("../resources/templates/frontend/header.php") ?>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include("../resources/templates/frontend/side_navbar.php") ?>
        <div class="col-sm-11"> 
            <div class="container mt-3">
                <div id="profile_part">
                    <img src="../resources/upload_image/avatar" alt="Profile pic" style="display: inline-block;">
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
                            <div class="row">
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                                <div class="col-sm">
                                <?php include("gamecard.php") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="setting" class="container tab-pane fade"><br>
                        <h3>Setting</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php include("../resources/templates/frontend/footer.php") ?>


</html>

