<?php
require 'functions.php';
$db = startDb('books');

if (array_key_exists('bookName', $_POST)
    && array_key_exists('author', $_POST)
    && array_key_exists('category', $_POST)
    && array_key_exists('released', $_POST)) {
    $query = $db->prepare('INSERT INTO `booksCollected` (`name`, `author`, `category`, `released`, `deleted`) VALUES (?, ?, ?, ?, ?)');
    if ($query->execute([$_POST['bookName'], $_POST['author'], $_POST['category'], $_POST['released'], 0])) {
        header("Location: addbook.php?success=1");
    } else {
        header("Location: addbook.php?error=1");
    }
}
?>