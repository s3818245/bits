<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$title}} - GMagnet</title>


    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



    <!-- Bootstap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <!-- Other CSS File-->
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">

    <!-- Other JS File -->

    <script src="{{ secure_asset('js/tools.js') }}"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


</head>

<style>
    body {
        background-color: #ECF8FE;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0B2838;">
        
  <a class="navbar-brand" href="{{url('/')}}" style="color: white">LOGO</a>
  <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" >
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item mx-1 my-1">
        <a class="nav-link" href="{{url('/signup')}}" style="width: 100%; text-align: center; color: white; background-color: #0CA5F7; border-radius: 10px; margin-right: 10px; opacity: 0.9">Sign Up</a>
      </li>
      <li class="nav-item mx-1 my-1">
        <a class="nav-link" href="{{url('/login')}}" style="width: 100%; text-align: center; color: white; border: 1px solid white; border-radius: 10px;">Login</a>
      </li>
      <li class="nav-item dropdown mx-1 my-1">
        <a class="nav-link dropdown-toggle" style="color: white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Profile LOGO?
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{url('/profilepage')}}">Profile</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>


    </nav>