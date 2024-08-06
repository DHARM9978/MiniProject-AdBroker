<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../static/home.css">
    <link rel="stylesheet" href="../static/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-color: #f3f2ed;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning">Advertisement</span>Broker
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#getadform">Get Ads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php">Ad Demo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contactUs.php">Contact us</a>
                    </li>


                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <?php
                    if (!isset($_SESSION["islogged_in"]) || $_SESSION["islogged_in"] !== true) {
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Login
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./ClientLogin.php">Login as Client</a></li>
                                <li><a class="dropdown-item" href="./PublisherLogin.php">Login as Publisher</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown btn btn-warning" id="btnsignup">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Sign Up
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./ClientSignUp.php">Sign Up as Client</a></li>
                                <li><a class="dropdown-item" href="./PublisherSignUp.php">Sign Up as Publisher</a></li>
                            </ul>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a href="./profile.php"><button class="btn btn-warning">Profile</button></a>
                        </li>
                    <?php } ?>
            </div>
        </div>
    </nav>