<?php
function returnBooks():array
{
    $db = new PDO('mysql:host=db;dbname=books', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare('SELECT `name`, `author`, `category`, `released` FROM `booksCollected`');
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function displayBooks(array $book):string
{
    if(array_key_exists("name", $book) && array_key_exists("author", $book) && array_key_exists('category', $book) && array_key_exists('released', $book)) {
        return '<div class="item">' .
            '<div class="bookDetails">' .
            '<p>' . $book['name'] . '</p>' .
            '<p>' . $book['author'] . '</p>' .
            '<p>' . $book['category'] . '</p>' .
            '<p>' . $book['released'] . '</p>' .
            '</div>' .
            '</div>';
    } else {
        return '';
    }
}
?>