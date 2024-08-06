<?php

include "../config.php";
include "../function.php";
include "../PHP_part/ClientModule.php";
$con = Db_Connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cl_id = Unique_id($con, "CL20230");
    $cl_name = trim($_POST["cl_name"]);
    $cl_lastname = trim($_POST["cl_lastname"]);
    $cl_email = trim($_POST["cl_email"]);
    $cl_phone = trim($_POST["cl_phone"]);
    $password = trim($_POST["cl_password"]);
    $cl_password = md5($password);

    Add_Client($con, $cl_id, $cl_name, $cl_lastname, $cl_email, $cl_phone, $cl_password);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>
    <link rel="stylesheet" href="../static/CSS/bootstrap.min.css">
    <script src="../static/JS/font.min.js"></script>
    <script src="../static/JS/jquery-3.6.0.min.js"></script>
    <script src="../static/JS/Add_client1.js"></script>
</head>

<body style="background-color: #f2edf3;">
    <div class=" position-absolute top-50 start-50 translate-middle" style="width: 50%;height: auto;">
        <div class="card" style="background : #f8f9fa;">
            <div class="card-body">
                <div class="container mt-3">
                    <h5>Add New Client</h5>
                </div>
                <div class="container my-3">
                    <form action="./Add_client.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="cl_name" id="cl_name"
                                placeholder="Enter Name:-">
                            <span id="validatefname" style="color: red;">This field can't be empty</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="cl_lastname" id="cl_lastname"
                                placeholder="Enter Last Name:-">
                            <span id="validatelname" style="color: red;">This field can't be empty</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="cl_email" id="cl_email"
                                placeholder="Enter Email:-">
                            <span id="validateemail" style="color: red;">This field can't be empty</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="cl_phone" id="cl_phone" maxlength="10"
                                placeholder="Enter Phone number:-">
                            <span id="validatephno" style="color: red;">This field can't be empty</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="cl_password" id="cl_password"
                                placeholder="Enter Password:-">
                            <span id="validatepassword" style="color: red;">This field can't be empty</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" name="client_operation" class="btn"
                                style="width: 50%;background: linear-gradient(to right, #da8cff, #9a55ff);color: white;">
                                Add Client</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>