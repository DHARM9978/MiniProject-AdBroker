<?php

function Unique_id($conn,$start_id_formet)
{
    try {
        $random_number = strval(rand(1000, 9999));
        $id = $start_id_formet . $random_number;

        $chk_id = "";

        $sql = "select ID from id_collection where ID='$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows < 0) {
            $random_number = strval(rand(1000, 9999));
            $id = $start_id_formet . $random_number;
        }
    } catch (\Throwable $th) {
        echo "There May be some error occured in system please try again";
    }
    return $id;
}
?>