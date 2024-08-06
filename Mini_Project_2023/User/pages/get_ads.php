<?php
include_once "./bash.php";
include_once "../config.php";
include_once "../getAdsModule.php";
$con = Db_Connection();
$row = "";

$data = Get_AllAds($con);

if (isset($_POST["btnGetAds"])) {
    $ad_category = $_POST["select_ad_category"];
    $ad_platform = $_POST["select_ad_platform"];
    $ad_budget = $_POST["ad_Budget"];

    $data = Search_Ad($con, $ad_category, $ad_platform, $ad_budget);
} else {
    echo "No ads Founded";
}

if (isset($_POST["btnAllAds"])) {
    $data = Get_AllAds($con);
}

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

    <!-- AD Form -->
    <div class="container mt-5 pt-5">
        <div class="card px-3" style="box-shadow: 4px 4px 4px rgb(0 0 0 / 0.2);">
            <div class="card-body">
                <h4 class="text-center text-uppercase my-5">Fill Your Reqirenments</h4>
                <form action="./get_ads.php" method="POST" class="row g-3">
                    <div class="col-md-3 text-center">
                        <label>Select Your Ad Category</label>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select form-select-sm mb-3" name="select_ad_category">
                            <?php
                            $str1 = "select distinct ads_category from advertize_tbl;";
                            $res1 = $con->query($str1);
                            while ($row_select = $res1->fetch_assoc()) { ?>
                                <option value="<?php echo $row_select['ads_category'] ?>">
                                    <?php echo $row_select['ads_category'] ?>
                                </option>
                            <?php } ?>
                            <option selected>Select Ad Category</option>
                        </select>
                    </div>
                    <div class="col-md-3 text-center">
                        <label>Select Platform for Ad</label>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select form-select-sm mb-3" name="select_ad_platform">
                            <?php
                            $str1 = "select distinct Ad_for from advertize_tbl;";
                            $res1 = $con->query($str1);
                            while ($row_select = $res1->fetch_assoc()) { ?>
                                <option value="<?php echo $row_select['Ad_for'] ?>">
                                    <?php echo $row_select['Ad_for'] ?>
                                </option>
                            <?php } ?>
                            <option selected>Select Platform for Ad</option>
                        </select>
                    </div>
                    <div class="col-md-3 text-center">
                        <label>Enter Your Budget</label>
                    </div>
                    <div class="col-md-3">
                        <input type="number" class="form-control" name="ad_Budget" id="txtBudget"
                            placeholder="Budget EX:-2000">
                        <p class="text-danger">* Remind this is charge of 1 month</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <label>Select Your Ad Certificate</label>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                            <?php
                            $str1 = "select distinct ad_section from advertize_tbl;";
                            $res1 = $con->query($str1);
                            while ($row_select = $res1->fetch_assoc()) { ?>
                                <option value="<?php echo $row_select['ad_section'] ?>">
                                    <?php echo $row_select['ad_section'] ?>
                                </option>
                            <?php } ?>
                            <option selected>Select Ad Cerficate</option>
                        </select>
                        <p class="text-danger">* Remind this is based on your reqirenment</p>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-warning me-2" name="btnGetAds">Get Ads</button>
                        <button type="submit" class="btn btn-warning ms-2" name="btnAllAds">All Ads</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- AD Form -->

        <div class="col-md-12 my-5">
            <h5>Ads based on your Reqirenment</h5>
        </div>

        <!-- AD List -->
        <div class="AD_list mb-3">
            <?php
            while ($row = $data->fetch_assoc()) {
                ?>
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
                        <div class="col-md-12 d-flex justify-content-center">
                            <form action="./get_ads.php" method="post">
                                <button type="submit" class="btn btn-warning " name="delete"
                                    onclick="return alert('Order Facility Added Soon...\n We Apologise for that.')">Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


        <!-- AD List -->
    </div>

</body>

</html>