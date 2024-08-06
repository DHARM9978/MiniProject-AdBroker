<?php
require "./Publisher_bash.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="ContactUs.css">
    <link href="../static/bootstrap.min.css" rel="stylesheet">
    <script src="../static/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-color: #f3f2ed;">

    <div class="container-fluid my-5">
        <div class="container">
            <div>
                <h2 class="text-center mb-5 shadow-sm p-3" style="font-size: 45px;">Contact Us</h2>
            </div>

            <div class="row">
                <div class="col-md-7 shadow rounded p-5">
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter First Name">
                        </div>

                        <div class="col mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter Last Name">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email ">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="email" class="form-control" placeholder="Enter Subject ">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <textarea for="" class="form-control" placeholder="Enter The Query" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div type="button" class="btn btn-warning ">
                                Submit
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-5 bg-light" style="margin-bottom: 50px;">
                    <div class="ml-2">
                        <img src="../static/Images/ContactUsImages/Mail.jpg" class="img-fluid"
                            style="height: 100%; width: 100%;">
                    </div>
                </div>



            </div>
        </div>
    </div>


</body>

</html>