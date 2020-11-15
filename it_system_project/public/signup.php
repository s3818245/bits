<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UnknowName</title>


    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



    <!-- Bootstap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <!-- Other CSS File-->
    <link rel="stylesheet" href="it_system_project/public/css/style.css">


</head>

<style>
    body {
        background-color: cornflowerblue;
    }

    .form-group input {
        border-style: none;
        width: 100%;
        font-size: 16px;
        border: none;
        border-bottom: 2px solid #777;
        outline: none;
        padding: 10px;
        box-sizing: border-box;
    }

    .form-group input:focus {
        border-bottom: 2px solid #03a9f4;
    }
</style>
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
                            <input type="date" name="dob" id="dob" placeholder="">
                        </div>

                        <div class="form-group d-flex justify-content-center">
                            <input type="submit" name="submit" class="btn btn-primary" style="width: 100%">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>