<?php

function AllClients($con)
{
    $sql = "select * from client_ragister";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $stmt_result = $stmt->get_result();

    return $stmt_result;
}


function Add_Client($conn, $cl_id, $cl_name, $cl_lastname, $cl_email, $cl_phone, $cl_password)
{
    $sql = "insert into client_ragister(cl_id,cl_name,cl_lastname,cl_email,cl_contact,cl_password) values ('" . $cl_id . "','" . $cl_name . "','" . $cl_lastname . "','" . $cl_email . "','" . $cl_phone . "','" . $cl_password . "');";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        if ($stmt->execute()) {
            $qur = "insert into id_collection values('" . $cl_id . "');";
            $id_stmt = $conn->prepare($qur);
            $id_stmt->execute();
            header("Location:/Mini_Project_2023/Admin/page/clients.php");
        } else {
            echo "Something Went Wrong Try Again....";
        }
    } else {
        echo "There may be an error occured in Adding new Client....";
    }
}

function RemoveClient($conn, $cl_id)
{
    $sql = "delete from client_ragister where cl_id = '" . $cl_id . "';";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        if ($stmt->execute()) {
            $qur = "delete from id_collection where ID = '" . $cl_id . "';";
            $id_stmt = $conn->prepare($qur);
            $id_stmt->execute();
        } else {
            echo "Something went wrong please try again...";
        }
    } else {
        echo "There may be an error occured in Removing this Client....";
    }
}
?>