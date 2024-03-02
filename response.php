<?php
    class Response {
        function __construct($data, $message) {
            $this->data = $data;
            $this->message = $message;
        }
    }
?>