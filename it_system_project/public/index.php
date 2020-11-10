<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Bootstap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid">
        <!-- Search form -->
        <div class="col-12 justify-content-center">
            <div class="form-inline d-flex justify-content-center md-form form-sm mt-0 mb-3">
                <input class="form-control form-control-md" style="width: 80%;" type="text" placeholder="Search" aria-label="Search">
            </div>
        </div>

        <!-- Main Page content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-4 my-2">
                            <?php include("gamecard.php") ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Test layout -->
        <?php include("gamepage.php") ?>
    </div>
</body>

</html>