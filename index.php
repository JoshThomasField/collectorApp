<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="normalize.css" rel="stylesheet">
    <title>Book Collector</title>
</head>
<body>
<a href="addbook.php">This is a link</a>
    <div class="collection">
    <?php
    require 'functions.php';
    $db = new PDO('mysql:host=db;dbname=books', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $books = returnBooks($db);
    foreach($books as $book) {
        echo displayBooks($book);
    }

    ?>
    </div>
</body>
</html>
