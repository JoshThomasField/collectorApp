<?php
require 'functions.php';
$db = startDb('books');
$books = getBooksFromDb($db);

if(isset($_POST['delete'])){
    $toDelete = $_POST['bookToBeDeleted'];//
    deleteBookFromDb($toDelete, $db);
}
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
