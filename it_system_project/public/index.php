<?php require_once("../config.php") ?>
<?php include(TEMPLATES . DS . "header.php") ?>
<div class="container-fluid">
    <div class="row">
        <?php include(TEMPLATES . DS . "side_navbar.php") ?>

        <div class="col-sm-11">
            <!-- Search form  -->
            <div class="row" style="margin-top: 1%;">
                <div class="col-10 justify-content-center" style="margin-left: auto; margin-right: auto">
                    <div class="form-inline d-flex justify-content-center md-form form-sm mt-0 mb-3">
                        <input class="form-control form-control-md" style="width: 80%;" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="row">
                <div class="col-sm-10" style="margin-left: auto; margin-right: auto; padding-bottom: 10%;">
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                        <div class="col my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>

<?php include(TEMPLATES . DS . "footer.php") ?>


</html>