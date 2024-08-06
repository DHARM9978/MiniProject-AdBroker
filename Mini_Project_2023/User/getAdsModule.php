<?php

function Get_AllAds($con)
{
    $sql = "select * from advertize_tbl;";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $data = $stmt->get_result();

    return $data;
}

function Search_Ad($con, $ad_category, $ad_platform, $budget)
{

    $price = intval($budget) + 500;
    $sql = "select * from advertize_tbl where ads_category='" . $ad_category . " ' or Ad_for='" . $ad_platform . "' or price <= " . $price . " ;";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $data = $stmt->get_result();

    return $data;
}

?>