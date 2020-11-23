@include('templates.header')

<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4" style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 15px; margin-top: 80px;">
            <h2 class="text-center">SIGN UP</h2>
            <hr>
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-12 d-flex justify-content-center">
                    <form class="form" action="" method="post" name="signUpForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- <label for="">First Name:</label> -->
                                <input type="text" name="firstname" placeholder="First name">
                            </div>
                            <div class="form-group col-md-6">
                                <!-- <label for="">Last Name:</label> -->
                                <input type="text" name="lastname" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="">Username:</label> -->
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <!-- <label for="">Password:</label> -->
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <label for="">Gender:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="maleOption" checked>
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="femaleoption">
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth (MM/dd/yyyy):</label>
                            <input type="date" name="dob" id="dob" placeholder="">
                        </div>

                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" name="login" style="width: 100%" class="btn btn-primary">Sign up</button>
                        </div>
                        <h6 class="text-center">
                            <a href="{{url('/login')}}">Already have an account? Log in</a>
                        </h6>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>