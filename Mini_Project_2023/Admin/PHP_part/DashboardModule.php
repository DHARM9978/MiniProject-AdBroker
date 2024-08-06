<?php

include "../PHP_part/PublisherModule.php";
include "../PHP_part/ClientModule.php";

function Total_Clients($con)
{
    $data = AllClients($con);

    $lengthOfData = $data->num_rows;

    return $lengthOfData;
}

function Total_Publishers($con)
{
    $data = AllPublishers($con);

    $lengthOfData = $data->num_rows;

    return $lengthOfData;
}

function Total_Ads($con)
{
    $sql = "select * from advertize_tbl;";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $data = $stmt->get_result();

    $lengthOfData = $data->num_rows;

    return $lengthOfData;
}

function Total_Orders($con)
{
    $sql = "select * from ads_order;";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $data = $stmt->get_result();

    $lengthOfData = $data->num_rows;

    return $lengthOfData;
}

function AllOrders($con)
{
    $sql = "select * from ads_order";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $stmt_result = $stmt->get_result();

    return $stmt_result;
}
?>