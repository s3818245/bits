@include('templates.header')
<div class="container-fluid">
    <div class="row">
        
    @include('templates.side_navbar')
            
        <div class="col-md-10 col-sm-11 col-12">
            <!-- Search form  -->
            <div class="row" style="margin-top: 1%;">
                <div class="col-sm-1"></div>
                <div class="col-sm-11 justify-content-center" style=" margin-left: auto; margin-right: auto">
                    <div class="input-group d-flex justify-content-center mt-0 mb-3 form-inline">
                        <input class="form-control my-0 py-1 mx-1 red-border" style="max-width: 80%;" type="text" placeholder="Search" aria-label="Search">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="label-icon">Category</span> <span class="caret">&nbsp;</span></button>
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Add new game
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-11 d-flex align-items-stretch" style="margin-left: auto; margin-right: auto; padding-bottom: 10%;">
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
                    @for($i = 0; $i < 9; $i++)
                        <div class="col my-2">
                            @include('components.gamecard')
                        </div>
                    @endfor
                    </div>
                </div>
            </div>
        </div>
        @include('templates.footer')
    </div>
    
</div>

</body>
@include('components.addgame')

</html>