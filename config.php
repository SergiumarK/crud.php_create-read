<?php
    $conn = new mysqli("localhost", "root", "", "cars_db");

    if ($conn -> connect_error) {
        die("Connect failed: " .$conn -> connect_error);
    }
?>  