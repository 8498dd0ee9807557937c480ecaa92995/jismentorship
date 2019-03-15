<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Welcome to Mentorship Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="border-bottom:solid 2px #0d47a1;">
        <a href="/profilementee.html"><i class="far fa-user-circle" style="font-size: 25px;color:black;margin-left:5%;"></a></i>
        <i class="far fa-bell" style="margin-left:1%;font-size: 25px;"></i>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left:70%;">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profilementor.html">Mentee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Feeds</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/complaintsraised.html">Complaints raised</a>
                </li>
            </ul>
        </div>
    </nav>
    <form>
        <img class="img-responsive" src="data:image/png;base64,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"
            alt="amazon" style="margin-left:3%;">
        <div class="form-group row" style="margin-left:10%;width: 78%;">
            <label for="input" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="input" placeholder="Enter Your Name here.." />
            </div>
        </div>
        <div class="form-group row" style="margin-left:10%;width: 78%;">
            <label for="staticEmail" class="col-sm-2 col-form-label">E-mail id:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control-plaintext" id="input" value="example@abcd.com" />
            </div>
        </div>
        <div class="form-group row" style="margin-left:10%;width: 78%;">
            <label for="input" class="col-sm-2 col-form-label">Date Of Birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control-plaintext" id="input" />
            </div>
        </div>
        <div class="form-group row" style="margin-left:10%;width: 78%;">
            <label for="input" class="col-sm-2 col-form-label">Gender:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="input" />
            </div>
        </div>
        <div class="form-group row" style="margin-left:10%;width: 78%;">
            <label for="input" class="col-sm-2 col-form-label">University Roll Number:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control-plaintext" id="input" placeholder="Enter your university roll.." />
            </div>
        </div>
        <div class="form-group row" style="margin-left:10%;width: 78%;">
            <label for="input" class="col-sm-2 col-form-label">University Registration number:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control-plaintext" id="input" placeholder="Enter your university Registration number.." />
            </div>
        </div>
        <div class="form-group row" style="margin-left:10%;width: 78%;">
            <label for="input" class="col-sm-2 col-form-label">Phone:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control-plaintext" id="input" placeholder="Enter your Phone number.." />
            </div>
        </div>
        <div class="form-group row" style="margin-left:10%;width: 78%;">
            <label for="input" class="col-sm-2 col-form-label">Alternative Phone :</label>
            <div class="col-sm-10">
                <input type="number" class="form-control-plaintext" id="input" placeholder="Enter Your Alternative Phone.." />
            </div>
        </div>
        <div class="form-group row" style="margin-left:10%;width: 78%;">
            <label for="input" class="col-sm-2 col-form-label">Blood Group :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="input" placeholder="Enter Your Blood Group.." />
            </div>
        </div>
        <div class="form-group row" style="margin-left:10%;width: 78%;">
            <label for="input" class="col-sm-2 col-form-label">Wapp:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="input" placeholder="Enter Your Wapp.." />
            </div>
        </div>
        <div class="form-group" style="margin-left:45%;">
            <a href="#" role="button" class="btn btn-lg btn-primary butt">Edit</a>
        </div>
    </form>
    <footer class="page-footer font-small ">
        <div class="footer-copyright text-center py-3">
            © 2018 Copyright:
            <a href="#" style="color:#fff;"> Mentorship</a>
        </div>
    </footer>
</body>

</html>