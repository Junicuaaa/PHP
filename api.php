<?php
    header("Content-Type: application/json");
    $_DATA = json_decode(file_get_contents("php://input"), true);
    var_dump($_DATA)
?>