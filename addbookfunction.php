<?php
require 'functions.php';
$db = startDb('books');

if (!empty($_POST)) {
    if (!empty($_POST['bookName']) && !empty($_POST['author']) && !empty($_POST['category']) && !empty($_POST['released'])) {
        $bookInfo = ['name' => $_POST['bookName'], 'author' => $_POST['author'], 'category' => $_POST['category'], 'released' => $_POST['released']];
        addBook($bookInfo, $db);
    } else {
        header("Location: addbook.php?error=2");
    }
}
?>