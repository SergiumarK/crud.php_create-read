<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        require ("config.php");

        if (!empty($_POST["brand"]) && !empty($_POST["model"]) && !empty($_POST["price"]) && !empty($_POST["image"])) {
            $brand = $_POST["brand"];
            $model = $_POST["model"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $image = $_POST["image"];

            $sql = "INSERT INTO cars (brand, model, description, price, image) VALUES ('$brand', '$model', '$description', $price, '$image')";

            $conn -> query($sql);  


            header("Location: ./index.php" );
        }

    } 
?>