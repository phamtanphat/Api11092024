<?php
    require "connect.php";
    require "status.php";
    require "response.php";

    $sql = "SELECT * FROM status";
    $result = mysqli_query($con, $sql);
   
    if ($result->num_rows > 0) {
        $arr = [];
        while ($row = $result->fetch_row()) {
            array_push($arr, new Status($row[0], $row[1]));
        }
        echo json_encode(new Response($arr, "Successful"));
    } else {
        echo json_encode(new Response(NULL, "Data is empty"));
    }
    exit();
?>