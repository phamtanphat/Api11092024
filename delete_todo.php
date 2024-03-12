<?php
    require "connect.php";
    require "response.php";
    require "todo.php";

    $id_todo = $_POST["id_todo"];

    if(isset($id_todo)){
        $query_sql = "SELECT * FROM todo WHERE id = '$id_todo' LIMIT 1";
        $query_result= mysqli_query($con, $query_sql);
        if ($query_result->num_rows > 0) {
            $delete_sql = "DELETE FROM todo WHERE id = '$id_todo'";
            if ($con->query($delete_sql) === TRUE) {
                $arr = [];
                while ($row = $query_result->fetch_row()) {
                    array_push($arr, new Todo($row[0], $row[1], $row[2], $row[3]));
                }
                echo json_encode(new Response($arr, "Delete todo successful"));
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