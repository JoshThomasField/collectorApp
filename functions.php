<?php

function returnBooks(PDO $db):array
{
    $query = $db->prepare('SELECT `name`, `author`, `category`, `released` FROM `booksCollected`');
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function displayBooks(array $book):string
{
    if(array_key_exists('name', $book) && array_key_exists('author', $book) && array_key_exists('category', $book) && array_key_exists('released', $book)) {
        return '<div class="item">' .
            '<div class="bookDetails">' .
            '<p class="bookHeading">' . $book['name'] . '</p>' .
            '<p class="bookAuthor">' . $book['author'] . '</p>' .
            '<p class="bookCategory">' . $book['category'] . '</p>' .
            '<p class="releaseYear">' . $book['released'] . '</p>' .
            '</div>' .
            '</div>';
    } else {
        return '';
    }
}

function addBook(array $bookInfo, PDO $db)
{
    $query = $db->prepare('INSERT INTO `booksCollected` (`name`, `author`, `category`, `released`) VALUES (?, ?, ?, ?)');
    if ($query->execute([$bookInfo['name'], $bookInfo['author'], $bookInfo['category'], $bookInfo['released']])) {
        header("Location: addbook.php");
    } else {
        header("Location: addbook.php?error=1");
    }
}
?>