<?php

function GetAdmin($conn, $adminName, $adminPassword)
{
    $sql = "select * from admin_tbl where AdminName='" . $adminName . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();

        if ($data['AdminPassword'] === $adminPassword) {
            header('Location:/Mini_Project_2023/Admin/page/AdminPage.php');
        } else {
            echo "<h2>Invailed Password</h2>";
        }
    } else {
        echo "<h2>Invailed Admin Name or Password</h2>";
    }
}

?>