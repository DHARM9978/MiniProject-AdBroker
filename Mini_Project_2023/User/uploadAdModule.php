<?php

function Upload_New_AD($con, $ads_id, $ads_category, $pub_id, $enterprise_name, $ad_for, $price)
{
    $sql = "insert into advertize_tbl(ads_id,ads_category,pub_id,enterprise_name,Ad_for,price) values('" . $ads_id . "','" . $ads_category . "','" . $pub_id . "','" . $enterprise_name . "','" . $ad_for . "','" . $price . "')";

    $stmt = $con->prepare($sql);

    if ($stmt) {
        if ($stmt->execute()) {
            $qur = "insert into id_collection values('" . $ads_id . "');";
            $id_stmt = $con->prepare($qur);
            $id_stmt->execute();
            echo "<script>";
            echo "alert('AD Uploaded Successfully...');";
            echo "</script>";
            header("Location:/Mini_Project_2023/User/pages/PublisherAllAds.php");
        } else {
            echo "Something Went Wrong Try Again....";
        }
    } else {
        echo "There may be an error occured in uploading the ad....";
    }

}

?>