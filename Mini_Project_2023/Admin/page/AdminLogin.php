<?php
include "../config.php";
include "../PHP_part/AdminLoginModule.php";
$con = Db_Connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adm_name = trim($_POST["adminName"]);
    $adm_pass = trim($_POST["adminPassword"]);

    GetAdmin($con, $adm_name, $adm_pass);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../static/adminLogin.css">
    <link rel="stylesheet" href="../static/CSS/bootstrap.min.css">
    <script src="../static/JS/jquery-3.6.0.min.js"></script>
    <script src="../static/JS/AdminLogin1.js"></script>
    <title>Login Page</title>
</head>

<body style="background: #f2edf3;">
    <div class="position-absolute top-50 start-50 translate-middle" style="width: 33%;height: auto;">
        <div class="card" style="background: #f8f9fa;">
            <div class="card-body">
                <div class="container">
                    <h4 class="mb-3">Admin Login</h4>
                </div>
                <div class="container my-3">
                    <form action="./AdminLogin.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Admin Name</label>
                            <input type="text" class="form-control" name="adminName" id="adminName"
                                placeholder="Admin Name:-">
                            <span id="validationname" style="color:red"> This field can't be empty</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="adminPassword" id="adminPassword"
                                placeholder="Password:-">
                            <span id="validatepassword" style="color:red"> This field can't be empty</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" name="client_operation" class="btn"
                                style="width: 50%;background: linear-gradient(to right, #da8cff, #9a55ff);color: white;">
                                Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>