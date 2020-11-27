<div class="container-fluid">
    <div class="container">
        <div class="px-4 pt-3">
            <div class="card mb-4">
                <div class="card-body text-muted">
                    <div class="row ml-2">
                        <h5>Rate this game</h5>
                    </div>

                    <div class="row row-cols-5 ml-2 justify-content-around">
                        <div class="col star" style="text-align: center;">
                            <ion-icon id="star1" name="star" size="large" onclick="setRating(this.id);"></ion-icon>
                        </div>
                        
                        <div class="col star" style="text-align: center;">
                            <ion-icon id ="star2" name="star" size="large" onclick="setRating(this.id);"></ion-icon>
                        </div>
                        <div class="col star" style="text-align: center">
                            <ion-icon id="star3"name="star" size="large" onclick="setRating(this.id);"></ion-icon>
                        </div>
                        <div class="col star" style="text-align: center">
                            <ion-icon id="star4" name="star" size="large" onclick="setRating(this.id);"></ion-icon>
                        </div>
                        <div class="col star" style="text-align: center">
                            <ion-icon id="star5" name="star" size="large" onclick="setRating(this.id);"></ion-icon>
                        </div>
                    </div>
                    <br>
                    <form action="">
                        <input type="hidden" id="user-rating" value="0">
                        <div class="form-row ml-2">
                            <div class="col-ml-2">
                                <label for="rating-comment"> <h5>Comment</h5></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Write your comment">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <button type="submit"class="btn btn-primary btn-md float-left">Rate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="px-4 pt-3">
            <div class="card mb-4">
                <div class="card-body text-muted">
                    <div class="row ml-2">
                        <h5>Ratings</h5>
                    </div>
                    <div class="row ml-2 justify-content-around">
                        <div class="col-3 border">
                            Average Chart
                        </div>
                        <div class="col-8 border">

                            <div class="col" style="text-align: center">
                                <ion-icon name="star-outline" size="large"></ion-icon>
                            </div>

                            <div class="col" style="text-align: center">
                                <ion-icon name="star-outline" size="large"></ion-icon>
                            </div>

                            <div class="col" style="text-align: center">
                                <ion-icon name="star-outline" size="large"></ion-icon>
                            </div>

                            <div class="col" style="text-align: center">
                                <ion-icon name="star-outline" size="large"></ion-icon>
                            </div>

                            <div class="col" style="text-align: center">
                                <ion-icon name="star-outline" size="large"></ion-icon>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="card-body text-muted">
                    <div class="row ml-2">
                        <h5>Reviews</h5>
                    </div>
                    @include('components.ratinglayout')
                </div>
            </div>
        </div>
    </div>
</div>