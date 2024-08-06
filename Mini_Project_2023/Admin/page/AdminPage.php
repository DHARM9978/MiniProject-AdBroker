<?php
include "./base.php";
include "../config.php";
include "../PHP_part/DashboardModule.php";

$con = Db_Connection();

$_noOfClients = Total_Clients($con);
$_noOfPublishers = Total_Publishers($con);
$_noOfAds = Total_Ads($con);
$_noOfOrders = Total_Orders($con);

$data = AllOrders($con);

?>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-12">
                <h4>Dashboard</h4>
            </div>
        </div>
        <!-- cards -->
        <div class="row mb-3">
            <div class="col-md-3 mb-3">
                <div class="card text-white text-center h-100" style="background-color: #198ae3;">
                    <div class="card-header">
                        <h5>Publishers</h5>
                    </div>
                    <div class="card-body py-3">
                        <h3 class="text-center">
                            <?php echo $_noOfPublishers ?>
                        </h3>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="./publishers.php" style="text-decoration:none;color:white">
                            <p>View Details</p>
                        </a>
                        <span class="ms-auto">
                            <a href="./publishers.php" style="text-decoration: none;color: white;">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white text-center h-100" style="background-color: #3e4b5b;">
                    <div class="card-header">
                        <h5>Clients</h5>
                    </div>
                    <div class="card-body py-3">
                        <h3 class="text-center">
                            <?php echo $_noOfClients ?>
                        </h3>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="./clients.php" style="text-decoration:none;color:white">
                            <p>View Details</p>
                        </a>
                        <span class="ms-auto">
                            <a href="./clients.php" style="text-decoration: none;color: white;">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white text-center h-100" style="background-color: #1bcfb4;">
                    <div class="card-header">
                        <h5>Ads</h5>
                    </div>
                    <div class="card-body py-3">
                        <h3 class="text-center">
                            <?php echo $_noOfAds ?>
                        </h3>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="./ads_page.php" style="text-decoration:none;color:white">
                            <p>View Details</p>
                        </a>
                        <span class="ms-auto">
                            <a href="./ads_page.php" style="text-decoration: none;color: white;">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white text-center h-100" style="background-color: #fe7c96;">
                    <div class="card-header">
                        <h5>Orders</h5>
                    </div>
                    <div class="card-body py-3">
                        <h3 class="text-center">
                            <?php echo $_noOfOrders ?>
                        </h3>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="./AdminPage.php" style="text-decoration:none;color:white">
                            <p>View Details</p>
                        </a>
                        <span class="ms-auto">
                            <a href="./AdminPage.php" style="text-decoration: none;color: white;">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- cards -->

        <!-- table of all Orders -->
        <div class="row mb-3">
            <div class="col-md-12 mb-3 w-100">
                <div class="card">
                    <div class="card-header" style="background-color: #3e4b5b;">
                        <h4 class="text-center text-white">All Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Publisher Id</th>
                                        <th>Enterprise name</th>
                                        <th>Client Id</th>
                                        <th>Client name</th>
                                        <th>Client email</th>
                                        <th>Order date</th>
                                        <th>Accept</th>
                                        <th>Decline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $data->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $row["order_id"]; ?>
                                            </th>
                                            <td>
                                                <?php echo $row["pub_id"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["enterprise_name"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["cl_id"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["cl_name"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["cl_email"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["order_date"]; ?>
                                            </td>
                                            <td><button type="submit" class="btn btn-secondary" name="update"
                                                    value="update"><i class="fa-solid fa-check"></i></button></td>
                                            <td><button type="submit" class="btn btn-secondary" name="delete"
                                                    value="delete"><i class="far fa-trash-alt"></i></button></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- table of all Orders -->

        <!-- Admin footer -->
        <div class="row">
            <div class="col-md-12 text-center" style="background-color: #f8f9fa;">
                <div class="card">
                    <div class="card-footer">
                        Admin Panel 2023 © Jay Dharm and Krishna
                    </div>
                </div>
            </div>
        </div>
        <!-- Admin footer -->
    </div>
</main>

</body>

</html>