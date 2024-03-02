<?php
    class Todo {
        function __construct($id, $title, $description, $id_status) {
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
            $this->id_status = $id_status;
        }
    }
?>