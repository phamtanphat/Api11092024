<?php
    require "connect.php";
    require "response.php";
    require "todo.php";

    $title = $_POST["title"];
    $description = $_POST["description"];
    $status_default = 1;

    if(isset($title) && isset($description)){
        $insert_sql = "INSERT INTO todo VALUES (NULL,'$title','$description','$status_default')";
        $insert_result = mysqli_query($con, $insert_sql);
        $id = $con->insert_id;
        if ($id > 0) {
            $query_sql = "SELECT * FROM todo WHERE id = '$id'";
            $query_result = mysqli_query($con, $query_sql);
            if ($query_result->num_rows > 0) {
                $arr = [];
                while ($row = $query_result->fetch_row()) {
                    array_push($arr, new Todo($row[0], $row[1], $row[2], $row[3]));
                }
                echo json_encode(new Response($arr, "Insert successful"));
            } else {
                echo json_encode(new Response(NULL, "Data is empty"));
            }
        } else {
            echo json_encode(new Response(NULL, "Data is empty"));
        }
    } else {
        echo json_encode(new Response(NULL, "Data is empty"));
    }
    exit();
?>