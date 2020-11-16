<?php include("../resources/templates/frontend/header.php") ?>
<div class="container-fluid">
    <div class="row">
        <?php include("../resources/templates/frontend/side_navbar.php") ?>

        <div class="col-11">
            <!-- Search form  -->
            <div class="row" style="margin-top: 1%;">
                <div class="col-sm-10 justify-content-center" style=" margin-left: auto; margin-right: auto">
                    <!-- <div class="form-inline d-flex justify-content-center md-form form-sm mt-0 mb-3">
                    <input class="form-control form-control-md" style="width: 80%;" type="text" placeholder="Search" aria-label="Search">
                </div> -->
                    <!-- <form class="form-inline justify-content-center md-form form-sm mt-0 mb-3 active-cyan-4" style="width: auto;">
                        <input class="form-control form-control-md my-0 py-1 red-border" style="width: 80%;" type="text" placeholder="Search" aria-label="Search">
                        <select class="custom-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                            <span class="input-group-text red lighten-3"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                        </div>


                    </form> -->
                    <div class="input-group d-flex justify-content-center md-form form-sm mt-0 mb-3">
                        <input class="form-control form-control-md my-0 py-1 red-border" style="width: 80%;" type="text" placeholder="Search" aria-label="Search">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="label-icon">Category</span> <span class="caret">&nbsp;</span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="category_filters">
                                    <li>
                                        <input class="cat_type category-input" data-label="All" id="all" value="" name="radios" type="radio"><label for="all">All</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="radios" id="Design" value="Design"><label class="category-label" for="Design">Cat</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="radios" id="Marketing" value="Marketing"><label class="category-label" for="Marketing">Cat</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="radios" id="Programming" value="Programming"><label class="category-label" for="Programming">Cat</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="radios" id="Sales" value="Sales"><label class="category-label" for="Sales">Cat</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="radios" id="Support" value="Support"><label class="category-label" for="Support">Cat</label>
                                    </li>
                                </ul>
                            </div>
                            <button id="searchBtn" type="button" class="btn btn-primary btn-search align-items-center"><span class="label-icon" style="text-align: center">Search</span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="row">
                <div class="col-sm-10 d-flex align-items-stretch" style="margin-left: auto; margin-right: auto; padding-bottom: 10%;">
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

<?php include("../resources/templates/frontend/footer.php") ?>


</html>