<?php
require 'functions.php';
$db = startDb('joshCollectorApp');

if (
    !empty($_POST['bookName']) &&
    !empty($_POST['author']) &&
    !empty($_POST['category']) &&
    !empty($_POST['released'])
) { if (
        array_key_exists('bookName', $_POST) &&
        array_key_exists('author', $_POST) &&
        array_key_exists('category', $_POST) &&
        array_key_exists('released', $_POST)
    ) {
        $query = $db->prepare('INSERT INTO `booksCollected` (`name`, `author`, `category`, `released`) VALUES (:bookName, :author, :category, :released)');
        if ($query->execute($_POST)) {
            header("Location: addbook.php?success=1");
        } else {
            header("Location: addbook.php?error=1");
        }
    }
} else {
    header("Location: addbook.php?error=2");
}
?>