<html>
<head><title>Company Login - RealSimpleEmail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet"
          type="text/css">
    <script src="js/login.js" async></script>
</head>
<body>

<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse"><span
                    class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
                    class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.html"><span>RealSimpleEmail</span></a></div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">
                    <a href="#">Login<br></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12"><h1 class="text-center">Please enter your company's account name</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-md-6">
                                <form role="form" id="companyNameForm">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                   placeholder="" id="companyNameInput">
                                            <span class="input-group-btn">
                                            <button class="btn btn-success" id="goBtn" role="button" type="submit">
                                                Go
                                            </button>
                                            </span>
                                        </div>
                                        <span class="text-danger hidden" id="warningSpan">
                                            <small>Try again. This company
                                                does not exist in our database.
                                            </small>
                                        </span>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>