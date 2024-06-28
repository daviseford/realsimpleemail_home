<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- PAGE settings -->
    <title>Company Login - RealSimpleEmail</title>
    <!-- CSS dependencies -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="wireframe.css" />
</head>

<body class="bg-light">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="text-center col-md-7 mx-auto">
                    <i class="fa d-block fa-bullseye fa-5x mb-4 text-info"></i>
                    <h2><b>Log in to RSE</b></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 order-md-2">
                    <form class="card p-2 my-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="" id="companyNameInput" />
                            <div class="input-group-append">
                                <button class="btn btn-secondary" id="goBtn" role="button" type="submit">
                                    Go
                                </button>
                            </div>
                        </div>
                        <small class="text-muted">Please enter your company's account name</small>
                        <div id="warningSpan" class="text-danger invisible">
                            Try again. This company does not exist in our database.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/login.js" async></script>
</body>

</html>