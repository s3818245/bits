<?php include("../resources/templates/frontend/header.php") ?>
<div class="container-fluid">
    <div class="row">
        <?php include("../resources/templates/frontend/side_navbar.php") ?>
    
    <div class="col-sm-11">
        <!-- Search form  -->
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10 justify-content-center">
                <div class="form-inline d-flex justify-content-center md-form form-sm mt-0 mb-3">
                    <input class="form-control form-control-md" style="width: 80%;" type="text" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="row">
            <div class="col-sm-2"></div>         
            <div class="col-sm-10">
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
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Main Page content -->
        

    <!-- Test layout -->
    <?php include("postlayout.php") ?>
</div>
</body>

<?php include("../resources/templates/frontend/footer.php") ?>
</html>