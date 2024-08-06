<?php
include "../config.php";
include "../function.php";
include "../PHP_part/PublisherModule.php";
$con = Db_Connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pub_id = Unique_id($con, "PB20230");
    $pub_name = trim($_POST["pub_name"]);
    $enterprise_name = trim($_POST["enterprise_name"]);
    $pub_email = trim($_POST["pub_email"]);
    $pub_phone = trim($_POST["pub_phone"]);
    $password = trim($_POST["pub_password"]);
    $pub_password = md5($password);

    Add_Publisher($con, $pub_id, $pub_name, $enterprise_name, $pub_email, $pub_phone, $pub_password);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Publisher</title>
    <link rel="stylesheet" href="../static/CSS/bootstrap.min.css">
    <script src="../static/font.min.js"></script>
    <script src="../static/JS/jquery-3.6.0.min.js"></script>
    <script src="../static/JS/Add_Publisher1.js"></script>
</head>

<body style="background-color: #f2edf3;">
    <div class="position-absolute top-50 start-50 translate-middle" style="width: 50%;height: auto;">
        <div class="card" style="background : #f8f9fa;">
            <div class="card-body">
                <div class="container mt-3">
                    <h5>Add New Publisher</h5>
                </div>
                <div class="container my-3">
                    <form action="./Add_publisher.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="pub_name" id="pub_name" placeholder="Name:-">
                            <span id="validatename" style="color: red;">This fied can't be empty</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">EnterPrise Name</label>
                            <input type="text" class="form-control" name="enterprise_name" id="enterprise_name"
                                placeholder="EnterPrise Name:-">
                            <span id="validateename" style="color: red;">This fied can't be empty</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="pub_email" id="pub_email"
                                placeholder="Email:-">
                            <span id="validateemail" style="color: red;">This fied can't be empty</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="pub_phone" id="pub_phone" maxlength="10"
                                placeholder="Phone number:-">
                            <span id="validatephno" style="color: red;">This fied can't be empty</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="pub_password" id="pub_password"
                                placeholder="Password:-">
                            <span id="validatepassword" style="color: red;">This fied can't be empty</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" name="client_operation" class="btn"
                                style="width: 50%;background: linear-gradient(to right, #da8cff, #9a55ff);color: white;">
                                Add Publisher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>