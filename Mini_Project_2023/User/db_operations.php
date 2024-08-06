<?php

function Add_Publisher($conn, $pub_id, $pub_name, $enterprice_name, $pub_email, $pub_phone, $pub_password)
{
    $sql = "insert into publisher_register(pub_id,pub_name,enterprise_name,pub_email,pub_contact,pub_password) values ('" . $pub_id . "','" . $pub_name . "','" . $enterprice_name . "','" . $pub_email . "','" . $pub_phone . "','" . $pub_password . "');";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        if ($stmt->execute()) {
            $qur = "insert into id_collection values('" . $pub_id . "');";
            $id_stmt = $conn->prepare($qur);
            $id_stmt->execute();

            //Start the Sessions
            $_SESSION["publisher_id"] = $pub_id;
            $_SESSION["publisher_name"] = $pub_name;
            $_SESSION["enterprise_name"] = $enterprice_name;
            $_SESSION["publisher_email"] = $pub_email;
            $_SESSION["publisher_contact"] = $pub_phone;
            $_SESSION["is_publisher_logged_in"] = true;
            $_SESSION["is_first_time_Ragister"] = true;

            header("Location:/Mini_Project_2023/User/pages/Publisher_Home.php");
        } else {
            echo "Something Went Wrong Try Again....";
        }
    } else {
        echo "There may be an error occured in register with us....";
    }
}

function Get_Publisher($conn, $pub_id, $pub_password)
{
    $sql = "select * from publisher_register where pub_id='" . $pub_id . "' and pub_password='" . $pub_password . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {

        $data = $stmt_result->fetch_assoc();

        if ($data['pub_password'] === $pub_password) {

            $sign_in_date = date("y-m-d h:i:s");

            $qur = "update publisher_register set last_Sign_in='" . $sign_in_date . "' where pub_id = '" . $pub_id . "';";
            $id_stmt = $conn->prepare($qur);
            $id_stmt->execute();

            //Start the Sessions
            $_SESSION["publisher_id"] = $pub_id;
            $_SESSION["publisher_name"] = $data["pub_name"];
            $_SESSION["enterprise_name"] = $data["enterprise_name"];
            $_SESSION["publisher_email"] = $data["pub_email"];
            $_SESSION["publisher_contact"] = $data["pub_contact"];
            $_SESSION["is_publisher_logged_in"] = true;

            header('Location:/Mini_Project_2023/User/pages/Publisher_Home.php');
        } else {
            echo "<h2>invaild password</h2>";
        }
    } else {
        echo "<h2>invaild id or password</h2>";
    }
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

            //Start the Sessions
            $_SESSION["client_id"] = $cl_id;
            $_SESSION["client_name"] = $cl_name;
            $_SESSION["client_lastname"] = $cl_lastname;
            $_SESSION["client_email"] = $cl_email;
            $_SESSION["client_contact"] = $cl_phone;
            $_SESSION["islogged_in"] = true;
            $_SESSION["is_first_time_Ragister"] = true;

            header("Location:/Mini_Project_2023/User/pages/home.php");
        } else {
            echo "Something Went Wrong Try Again....";
        }
    } else {
        echo "There may be an error occured in register with us....";
    }
}

function Get_Client($conn, $cl_id, $cl_password)
{
    $sql = "select * from client_ragister where cl_id='" . $cl_id . "' and cl_password='" . $cl_password . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {

        $data = $stmt_result->fetch_assoc();

        if ($data['cl_password'] === $cl_password) {

            $sign_in_date = date("y-m-d h:i:s");

            $qur = "update client_ragister set last_Sign_in='" . $sign_in_date . "' where cl_id = '" . $cl_id . "';";
            $id_stmt = $conn->prepare($qur);
            $id_stmt->execute();

            //Start the Sessions
            $_SESSION["client_id"] = $cl_id;
            $_SESSION["client_name"] = $data["cl_name"];
            $_SESSION["client_lastname"] = $data["cl_lastname"];
            $_SESSION["client_email"] = $data["cl_email"];
            $_SESSION["client_contact"] = $data["cl_contact"];
            $_SESSION["islogged_in"] = true;

            header('Location:/Mini_Project_2023/User/pages/home.php');
        } else {
            echo "<h2>invaild password</h2>";
        }
    } else {
        echo "<h2>invaild id or password</h2>";
    }
}

function Update_Pub_Profile($con, $pub_id, $pub_name, $enterprice_name, $pub_email, $pub_contact)
{

    $sql = "update publisher_register set pub_name='" . $pub_name . "',enterprise_name='" . $enterprice_name . "',pub_email='" . $pub_email . "',pub_contact='" . $pub_contact . "' where pub_id = '" . $pub_id . "';";

    $stmt = $con->prepare($sql);
    if ($stmt) {
        if ($stmt->execute()) {

            //Start the Sessions
            $_SESSION["publisher_id"] = $pub_id;
            $_SESSION["publisher_name"] = $pub_name;
            $_SESSION["enterprise_name"] = $enterprice_name;
            $_SESSION["publisher_email"] = $pub_email;
            $_SESSION["publisher_contact"] = $pub_contact;
            $_SESSION["is_publisher_logged_in"] = true;

            header("Location:/Mini_Project_2023/User/pages/Publisher_Home.php");
        } else {
            echo "Something Went Wrong Try Again....";
        }
    } else {
        echo "There may be an error occured Please Try Again....";
    }
}

function Update_Client_Profile($con, $cl_id, $cl_name, $cl_lastname, $cl_email, $cl_contact)
{

    $sql = "update client_ragister set cl_name='" . $cl_name . "',cl_lastname='" . $cl_lastname . "',cl_email='" . $cl_email . "',cl_contact='" . $cl_contact . "' where cl_id = '" . $cl_id . "';";

    $stmt = $con->prepare($sql);
    if ($stmt) {
        if ($stmt->execute()) {

            //Start the Sessions
            $_SESSION["client_id"] = $cl_id;
            $_SESSION["client_name"] = $cl_name;
            $_SESSION["client_lastname"] = $cl_lastname;
            $_SESSION["client_email"] = $cl_email;
            $_SESSION["client_contact"] = $cl_contact;
            $_SESSION["islogged_in"] = true;

            header("Location:/Mini_Project_2023/User/pages/home.php");
        } else {
            echo "Something Went Wrong Try Again....";
        }
    } else {
        echo "There may be an error occured Please Try Again....";
    }
}
?>