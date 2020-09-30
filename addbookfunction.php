<?php
require 'functions.php';
$db = startDb('books');

if (
    array_key_exists('bookName', $_POST) &&
    array_key_exists('author', $_POST) &&
    array_key_exists('category', $_POST) &&
    array_key_exists('released', $_POST)
) {
    $query = $db->prepare('INSERT INTO `booksCollected` (`name`, `author`, `category`, `released`, `deleted`) VALUES (:bookname, :author, :category, :releaseYear , :deleteStatus)');
    if ($query->execute([':bookname' => $_POST['bookName'], ':author' => $_POST['author'], ':category' => $_POST['category'], ':releaseYear' => $_POST['released'], ':deleteStatus' => 0])) {
        header("Location: addbook.php?success=1");
    } else {
        header("Location: addbook.php?error=1");
    }
}
?>