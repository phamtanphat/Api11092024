<?php
    require "connect.php";

    if(isset($_POST["insert"])){
        $title = $_POST["title"];
        $description = $_POST["description"];

        $sql = "INSERT INTO `todo`(`id`, `title`, `description`, `idstatus`) VALUES ('0','$title','$description','1')";
        $result = mysqli_query($con, $sql);

        if($result) {
            echo "Data inserted successfully";
        } else {
            echo "Data inserted failed";
        }
    }

    if(isset($_POST["delete"])){
        $task_id = $_POST["task_id"];

        $sql = "DELETE FROM `todo` WHERE id = '$task_id'";
        $result = mysqli_query($con, $sql);

        if($result) {
            echo "Data deleted successfully";
        } else {
            echo "Data delete failed";
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
    <h1>INSERT DATA INTO DATABASE</h1>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Title</label>
      <input type="text" name="title" required value="">
      <label for="">Description</label>
      <input type="text" name="description" required value="">
      <br>
      <br>
      <button type="submit" name="insert">Insert</button>
    </form>
    <br>
    <br>
    <h1>DELETE DATA FROM DATABASE</h1>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Insert task id to delete</label>
      <input type="text" name="task_id" required value="">
      <br>
      <br>
      <button type="submit" name="delete">Delete</button>
    </form>
    
  </body>
</html>
