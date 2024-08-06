<?php

function AllPublishers($con)
{
    $sql = "select * from publisher_register";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $stmt_result = $stmt->get_result();

    return $stmt_result;
}

function Add_Publisher($conn, $pub_id, $pub_name, $enterprice_name, $pub_email, $pub_phone, $pub_password)
{
    $sql = "insert into publisher_register(pub_id,pub_name,enterprise_name,pub_email,pub_contact,pub_password) values ('" . $pub_id . "','" . $pub_name . "','" . $enterprice_name . "','" . $pub_email . "','" . $pub_phone . "','" . $pub_password . "');";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        if ($stmt->execute()) {
            $qur = "insert into id_collection values('" . $pub_id . "');";
            $id_stmt = $conn->prepare($qur);
            $id_stmt->execute();
            header("Location:/Mini_Project_2023/Admin/page/publishers.php");
        } else {
            echo "Something Went Wrong Try Again....";
        }
    } else {
        echo "There may be an error occured in register with us....";
    }
}

function RemovePublisher($conn, $pub_id)
{
    $sql = "delete from publisher_register where pub_id = '" . $pub_id . "';";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        if ($stmt->execute()) {
            $qur = "delete from id_collection where ID = '" . $pub_id . "';";
            $id_stmt = $conn->prepare($qur);
            $id_stmt->execute();
        } else {
            echo "Something went wrong please try again...";
        }
    } else {
        echo "There may be an error occured in Removing this Publisher....";
    }
}

?>