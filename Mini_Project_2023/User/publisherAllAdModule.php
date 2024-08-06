<?php

function All_Publisher_Ads($con, $pub_id)
{
    $sql = "select * from advertize_tbl where pub_id = '" . $pub_id . "'";

    $stmt = $con->prepare($sql);
    $stmt = $con->query($sql);
    return $stmt;

}

?>