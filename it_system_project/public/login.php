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

    <!-- Font CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
        padding-left: 30px;
        box-sizing: border-box;
    }

    .form-group input:focus {
        border-bottom: 2px solid #03a9f4;
    }

    .form-group .fa {
        position: absolute;
        margin-left: 8px;
        margin-top: 12px;
        font-size: 18px;
    }
</style>


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
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <!-- <label for="">Password:</label> -->
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" name="login" style="width: 100%" class="btn btn-primary">Login</button>
                        </div>
                        <h6 class="text-center">
                            <a href="signup.php">Create a new account</a>
                        </h6>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>