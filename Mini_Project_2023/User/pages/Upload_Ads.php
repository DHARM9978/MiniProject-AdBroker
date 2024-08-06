<?php
require_once "./Publisher_bash.php";
require_once "../config.php";
require_once "../uploadAdModule.php";
require_once "../functions.php";

$con = Db_Connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad_id = Unique_id($con, "AD20230");
    $ads_category = $_POST["txtAdCategory"];
    $pub_id = $_SESSION["publisher_id"];
    $enterprice_name = $_SESSION["enterprise_name"];
    $price = $_POST["txtPrice"];
    $ad_for = $_POST["txtAdfor"];

    Upload_New_AD($con, $ad_id, $ads_category, $pub_id, $enterprice_name, $ad_for, $price);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ads_Upload</title>
    <link rel="stylesheet" href="../static/bootstrap.min.css">
    <style>
        #input-file {
            display: none;
        }

        #imglabel {
            background-color: yellow;
            width: 50%;
            text-align: center;
            align-items: center;
            margin-left: 23%;
            border-radius: 5px;
        }

        #profile-pic {
            width: 100%;
            height: 100%;

        }
    </style>


    <script>
        let profilepic = document.getElementById('profile-pic');
        let inputfile = document.getElementById('input-file');

        inputfile.onchange = function () {
            profilepic.src = URL.createObjectURL(inputfile.files[0]);
        } 
    </script>
</head>

<body>
    <div class="container mt-5 pt-5 px-3">
        <div class="row mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12 text-center mb-5 mt-3">
                        <h3>Upload Ad</h3>
                    </div>
                    <form action="./Upload_Ads.php" method="post" class="row g-3">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-center">Upload Ad Image</h5>
                                </div>
                                <div class="card-body">
                                    <img src="../static/Images/ImageUpload/Default_Image.png" id="profile-pic">
                                    <label for="input-file" class="text-bg-warning my-3">Upload Images</label>
                                    <input type="file" name="Ad_image" id="input-file">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row g-2">
                                <div class="col-sm-3">
                                    <p>Publisher id</p>
                                </div>
                                <div class="col-sm-9">
                                    <p>
                                        <?php echo $_SESSION["publisher_id"] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr style="border: 1px solid black;">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-sm-3">
                                    <p>Enterprise Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p>
                                        <?php echo $_SESSION["enterprise_name"] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr style="border: 1px solid black;">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-sm-3">
                                    <p>Ad category</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtAdCategory" id="txtAdCategory"
                                        placeholder="Enter Ads Category:-">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr style="border: 1px solid black;">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-sm-3">
                                    <p>Price</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtPrice" id="txtPrice"
                                        placeholder="Enter Price:-">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr style="border: 1px solid black;">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-sm-3">
                                    <p>Ad For which Device</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtAdfor" id="txtAdfor"
                                        placeholder="Devices Mention below">
                                    <p class="text-danger">*Mobile,Web,Mobile and Web</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr style="border: 1px solid black;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12  d-flex justify-content-center">
                            <button type="submit" class="btn btn-warning">Upload Ad</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>