<?php
function startDb(string $dbName): PDO {
    $dbName = 'joshCollectorApp';
    $db = new PDO('mysql:host=localhost;dbname='.$dbName, 'joshf', '6l84yoP_');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getBooksFromDb(PDO $db): array
{
    $query = $db->prepare('SELECT `name`, `author`, `category`, `released` FROM `booksCollected` WHERE `deleted` = 0');
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function displayBook(array $book): string
{
    if(
        array_key_exists('name', $book) &&
        array_key_exists('author', $book) &&
        array_key_exists('category', $book) &&
        array_key_exists('released', $book)
    ) {
        return '<div class="item">' .
            '<div class="bookDetails">' .
            '<p class="bookHeading">' . $book['name'] . '</p>' .
            '<p class="bookAuthor">' . $book['author'] . '</p>' .
            '<p class="bookCategory">' . $book['category'] . '</p>' .
            '<p class="releaseYear">' . $book['released'] . '</p>' .
            '</div>' .
            '<form method="POST"><input type="hidden" name="bookToBeDeleted" value="'.$book['name'].'">'.
            '<input type="submit" name="delete" value="Delete"/><br/></form></div>';
    } else {
        return '';
    }
}

function deleteBookFromDb(string $toDelete, PDO $db)
{
    $query = $db->prepare('UPDATE `booksCollected` SET `deleted` = 1 WHERE `name` = (?)');
    $query->execute([$toDelete]);
    header("Location: index.php");
}
?>