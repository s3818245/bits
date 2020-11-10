<h2 class="text-center">SIGN UP</h2>
<div class="container-fluid d-flex justify-content-center">
    <div class="col-sm-6 d-flex justify-content-center">
        <form class="form" action="" method="post" name="signUpForm">
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">First Name:<input type="text" name="firstname" class="form-control" placeholder="Enter Firstname Here"></label>
            </div>
            <div class="form-group col-md-6">
                <label for="">Last Name:<input type="text" name="lastname" class="form-control" placeholder="Enter Lastname Here"></label>
            </div>
            </div>
            <div class="form-group">
                <label for="">Username:<input type="text" name="username" class="form-control" placeholder="Enter Username Here"></label>
            </div>
            <div class="form-group">
                <label for="password">Password:<input type="password" name="password" class="form-control" placeholder="Enter Password Here"></label>
            </div>
            <label for="">Gender:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="male" id="male" value="maleOption" checked>
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="female" id="female" value="femaleoption">
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
            <div class="form-group">
                <label for="">Date of Birth (MM/dd/yyyy):</label>
                <input type="date" name="dob" id="dob">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>