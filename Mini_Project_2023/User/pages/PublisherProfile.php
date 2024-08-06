<?php
require_once "../config.php";
require_once "../db_operations.php";

$conn = Db_Connection();
$stmt = "";

$pub_id = $pub_name = $enterprise_name = $pub_email = $pub_contact = "";

if (isset($_POST["btnSaveChanges"])) {

    $pub_id = $_SESSION["publisher_id"];
    $pub_name = trim($_POST["txtPub_name"]);
    $enterprise_name = trim($_POST["txtEnterpriseName"]);
    $pub_email = trim($_POST["txtEmail"]);
    $pub_contact = trim($_POST["txtContact"]);

    Update_Pub_Profile($conn, $pub_id, $pub_name, $enterprise_name, $pub_email, $pub_contact);

    header("Location:Publisher_Home.php");
}

if (isset($_POST["btnLogout"])) {
    header("Location:logout.php");
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="../static/Pub_Profile.css">
    <link href="../static/bootstrap.min.css" rel="stylesheet">
    <script src="../static/bootstrap.bundle.min.js"></script>
</head>

<body>

    <form action="./PublisherProfile.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <h1 id="ProfileName">Profile</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="hero">
                    <div class="card">
                        <img src="../static/Images/ImageUpload/Default_Image.png" id="profile-pic"
                            style="height: 200px;" class="rounded-circle" width="200">
                        <label for="input-file" id="imglabel">Upload Image</label>
                        <input type="file" id="input-file">
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <h3 style="margin-bottom: 50px;">Personal Details</h3>

                <div class="row">
                    <div class="col-md-3">
                        Publisher Id
                    </div>
                    <div class="col-md-9">
                        <label name="lblpublisherid">
                            <?php echo $_SESSION["publisher_id"] ?>
                        </label>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-3">
                        Publisher Name
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="txtPub_name" id="txtPubName"
                            value="<?php echo $_SESSION["publisher_name"] ?>">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-3">
                        EnterPrise Name
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="txtEnterpriseName" id="txtEnterpriseName"
                            value="<?php echo $_SESSION["enterprise_name"] ?>">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-3">
                        Email-id
                    </div>
                    <div class="col-md-9">
                        <input type="email" class="form-control" name="txtEmail" id="txtEmail"
                            value="<?php echo $_SESSION["publisher_email"] ?>">
                    </div>
                </div>
                <hr>

                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-md-3">
                        Contact No
                    </div>
                    <div class="col-md-9">
                        <input type="tel" class="form-control" name="txtContact" id="txtContact"
                            value="<?php echo $_SESSION["publisher_contact"] ?>">
                    </div>
                </div>

                <div class="buttons" style="text-align: center; padding-top: 30px;">
                    <button class="btn btn-warning mb-2 mx-1" style="width: 200px;" name="btnSaveChanges">Save
                        Changes</button>
                    <button class="btn btn-warning mb-2 mx-1" style="width: 200px;" name="btnLogout">Logout</button>
                </div>
            </div>
        </div>
    </form>


</body>

<script>
    let profilepic = document.getElementById('profile-pic');
    let inputfile = document.getElementById('input-file');

    inputfile.onchange = function () {
        profilepic.src = URL.createObjectURL(inputfile.files[0]);
    } 
</script>

</html>