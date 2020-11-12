<?php include("it_system_project/resources/template/frontend/header.php")?>
<!-- bootstraps for testing sake -->
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
    <link rel="stylesheet" href="../public/css/style.css">


    <!-- ICONS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<!-- Post with image -->
<div class = "p-5"> 
    <div class="card mb-4">

        <div class = "card-header text-muted">
            Posted by: Username
            <i class="fas fa-edit pull-right hover-icon"></i>
        </div>

        <div class = "card-body">
            <h2 class = "card-title">Post title</h2>
            <p class = "class-text"> Post description
            </p>
        </div>

        <div class = "p-4">
            <img class="card-img-bottom" src="http://placehold.it/750x300" alt=post-image>
        </div>
        
        <div class = "card-footer text-muted">
            
            <i class="fa fa-thumbs-up hover-icon"> 0 </i>

            &nbsp;&nbsp;

            <i class=" fa fa-thumbs-down hover-icon "> 0 </i>

            &nbsp;&nbsp;&nbsp;&nbsp;

            <i class=" far fa-comment-dots hover-icon "></i>

            &nbsp;&nbsp;&nbsp;&nbsp;


        </div>
    </div>
</div>

<!-- Post without image -->

<div class = "p-5"> 
    <div class="card mb-4">

        <div class = "card-header text-muted">
            Posted by: Username
            <i class='fas fa-edit pull-right hover-icon'></i>
        </div>

        <div class = "card-body">
            <h2 class = "card-title">Post title</h2>
            <p class = "class-text"> Post description
            </p>
        </div>

        <div class = "card-footer text-muted">
            
            <i class="fa fa-thumbs-up hover-icon"> 0 </i>

            &nbsp;&nbsp;

            <i class="fa fa-thumbs-down hover-icon"> 0 </i>

            &nbsp;&nbsp;&nbsp;&nbsp;

            <i class="far fa-comment-dots hover-icon" ></i>

            &nbsp;&nbsp;&nbsp;&nbsp;

        </div>
    </div>
</div>