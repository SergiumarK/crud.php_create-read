<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
            include "./styles.css"
        ?>
    </style>
</head>
<body>
    <header>
        <h1>web</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="create.php">Create</a>
        </nav>
    </header>
    <main class='form-holder'>
        <h1 class='create'>Create</h1>
        <form action="save.php" method="post">
            <input type="text" name="brand" placeholder="Brand">
            <input type="text" name="model" placeholder="Model">
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            <input type="number" name="price" placeholder="Price" step="0.01">
            <input type="url" name="image" placeholder="image_address">
            <button>Create</button>  
        </form>
    </main>
</body>
</html>