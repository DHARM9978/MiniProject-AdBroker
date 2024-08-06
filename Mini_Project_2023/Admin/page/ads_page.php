<?php
include "./base.php";
include "../config.php";
include "../PHP_part/AdsModule.php";
$con = Db_Connection();
$data = AllAds($con);

if (isset($_REQUEST["Ads_id"])) {
    RemoveAd($con, $_REQUEST["Ads_id"]);
    $data = AllAds($con);
}

?>


<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-12">
                <h5>Dashboard/<span style="color: #198ae3;">Ads</span></h5>
            </div>
        </div>

        <!-- Data table -->
        <div class="row my-3">
            <div class="col-md-12 mb-3 w-100">
                <div class="card">
                    <div class="card-header" style="background-color: #3e4b5b;">
                        <h4 class="text-center text-white">All Advertisement</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Advertise Id</th>
                                        <th>Advertise category</th>
                                        <th>Publisher id</th>
                                        <th>Enterprise Name</th>
                                        <th>Advertise for</th>
                                        <th>price</th>
                                        <th>ad_section</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $data->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $row["ads_id"]; ?>
                                            </th>
                                            <td>
                                                <?php echo $row["ads_category"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["pub_id"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["enterprise_name"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["Ad_for"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["price"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["ad_section"]; ?>
                                            </td>
                                            <td>
                                                <form method="POST" action="./ads_page.php">
                                                    <!-- Create a form for deletion -->
                                                    <input type="hidden" name="Ads_id"
                                                        value="<?php echo $row['ads_id']; ?>">
                                                    <button type="submit" class="btn btn-secondary" name="delete"
                                                        onclick="return confirm('Are you sure , you want to Remove this Ads?')"><i
                                                            class="far fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data table -->
    </div>
</main>

</body>

</html>