<?php
include "./base.php";
include "../config.php";
include "../PHP_part/ClientModule.php";
$con = Db_Connection();
$data = AllClients($con);

if (isset($_REQUEST["client_id"])) {
    RemoveClient($con, $_REQUEST["client_id"]);
    $data = AllClients($con);
}


?>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-12">
                <h5>Dashboard/<span style="color: #198ae3;">Clients/Maintain</span></h5>
            </div>
        </div>

        <!-- Data table -->
        <div class="row my-3">
            <div class="col-md-12 mb-3 w-100">
                <div class="card">
                    <div class="card-header" style="background-color: #3e4b5b;">
                        <h4 class="text-center text-white">All Clients</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Client Id</th>
                                        <th>Client Name</th>
                                        <th>Client LastName</th>
                                        <th>Client Email</th>
                                        <th>Client Contact</th>
                                        <th>Last Sign in</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $data->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $row["cl_id"]; ?>
                                            </th>
                                            <td>
                                                <?php echo $row["cl_name"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["cl_lastname"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["cl_email"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["cl_contact"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["last_Sign_In"]; ?>
                                            </td>
                                            <td>
                                                <form method="POST" action="./publishers.php">
                                                    <!-- Create a form for deletion -->
                                                    <input type="hidden" name="client_id"
                                                        value="<?php echo $row['cl_id']; ?>">
                                                    <button type="submit" class="btn btn-secondary" name="delete"
                                                        onclick="return confirm('Are you sure , you want to Remove this Publisher?')"><i
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