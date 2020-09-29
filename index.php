<?php
require 'functions.php';
$db = new PDO('mysql:host=db;dbname=books', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$books = getBooksFromDb($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="signature(1).png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="normalize.css" rel="stylesheet">
    <title>Book Collector</title>
</head>
<body>
<nav>
    <div class="mobile-nav">
        <a href="index.php"><img class="logo" src="signature(1).png" alt="Logo"></a>
        <i class="fas fa-bars"></i>
        <div class="nav-links">
            <a href="addbook.php">Add Books</a>
        </div>
    </div>
</nav>
<a href="addbook.php">Link Here</a>
<div class="collection">
    <?php
    foreach($books as $book) {
        echo displayBook($book);
    }
    ?>
</div>
</body>
</html>
