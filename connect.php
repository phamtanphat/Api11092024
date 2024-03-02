<?php
    $host = "localhost";
    $user_name = "root";
    $pass_word = "";
    $database_name = "todo_database";

    $con = mysqli_connect($host, $user_name, $pass_word, $database_name);
    mysqli_query($con ,"SET NAMES 'utf8'");
?>