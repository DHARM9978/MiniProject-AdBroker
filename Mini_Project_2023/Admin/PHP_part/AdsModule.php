<?php

function AllAds($con)
{
    $sql = "select * from advertize_tbl";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $stmt_result = $stmt->get_result();

    return $stmt_result;
}


function RemoveAd($conn, $ad_id)
{
    $sql = "delete from advertize_tbl where ads_id = '" . $ad_id . "';";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        if ($stmt->execute()) {
            $qur = "delete from id_collection where ID = '" . $ad_id . "';";
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