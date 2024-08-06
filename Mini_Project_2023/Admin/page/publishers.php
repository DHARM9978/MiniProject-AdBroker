<?php
include "./base.php";
include "../config.php";
include "../function.php";
include "../PHP_part/PublisherModule.php";
$con = Db_Connection();
$data = AllPublishers($con);

if (isset($_REQUEST["publisher_id"])) {
    RemovePublisher($con, $_REQUEST["publisher_id"]);
    $data = AllPublishers($con);
}

?>


<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-12">
                <h5>Dashboard/<span style="color: #198ae3;">Publishers/Maintain</span></h5>
            </div>
        </div>

        <!-- Data table -->
        <div class="row my-3">
            <div class="col-md-12 mb-3 w-100">
                <div class="card">
                    <div class="card-header" style="background-color: #3e4b5b;">
                        <h4 class="text-center text-white">All Publishers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Publisher Id</th>
                                        <th>Publisher Name</th>
                                        <th>EnterPrise Name</th>
                                        <th>Publisher Email</th>
                                        <th>Publisher Contact</th>
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
                                            <?php echo $row["pub_id"]; ?>
                                        </th>
                                        <td>
                                            <?php echo $row["pub_name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["enterprise_name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["pub_email"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["pub_contact"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["last_Sign_In"]; ?>
                                        </td>
                                        <td>
                                            <form method="POST" action="./publishers.php">
                                                <!-- Create a form for deletion -->
                                                <input type="hidden" name="publisher_id"
                                                    value="<?php echo $row['pub_id']; ?>">
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