@include('templates.header')


<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4" style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 15px; margin-top: 150px;">
            <h2 class="text-center">LOG IN</h2>
            <hr>
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-12 d-flex justify-content-center">
                    <form class="form" action="" method="post" name="loginForm">
                        <div class="form-group">
                            <!-- <label for="">Username:</label> -->
                            <i class="fa fa-user icon_login" aria-hidden="true"></i>
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <!-- <label for="">Password:</label> -->
                            <i class="fa fa-unlock-alt icon_login" aria-hidden="true"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" name="login" style="width: 100%" class="btn btn-primary">Login</button>
                        </div>
                        <h6 class="text-center">
                            <a href="{{url('/signup')}}">Create a new account</a>
                        </h6>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>