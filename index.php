<?php
    require 'functions.php';

    $books = getBooksFromDb();
?>
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
    <div class="collection">
    <?php
    foreach($books as $book) {
        echo displayBook($book);
    }
    ?>
    </div>
</body>
</html>
