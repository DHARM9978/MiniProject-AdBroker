<?php
require_once "./Publisher_bash.php";
require_once "../config.php";
require_once "../publisherAllAdModule.php";

$con = Db_Connection();

$pub_id = $_SESSION["publisher_id"];

$data = All_Publisher_Ads($con, $pub_id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Ads Page</title>
    <link rel="stylesheet" href="../static/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <style>
        table,
        tr,
        td {
            padding: 0% 2%;
        }
    </style>
</head>

<body style="background-color: #f3f2ed;">
    <!-- Title -->
    <div class="container my-5 pt-3">
        <h4 class="text-center">Your All uploaded Ads</h4>
    </div>
    <!-- Title -->
    <!-- AD List -->
    <div class="AD_list mb-3">
        <?php
        $lengthOfData = $data->num_rows;
        if ($lengthOfData > 0) {
            while ($row = $data->fetch_assoc()) {
                ?>
        <div class="container ">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="text-dark d-flex justify-content-end">
                            <?php echo $row["price"] ?>₹
                        </h4>
                    </div>
                    <div class="col-md-12 m-auto">
                        <table class="table-responsive">
                            <tr>
                                <td>
                                    <p>Advertise Id</p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo $row["ads_id"] ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>EnterPrise Name</p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo $row["enterprise_name"] ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ad Category</p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo $row["ads_category"] ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ad published on</p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo $row["Ad_for"] ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ad certificate</p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo $row["ad_section"] ?>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php }
        } else { ?>
        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="text-center">You no Ads in our System</h4>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>


    <!-- AD List -->
    </div>

</body>

</html>