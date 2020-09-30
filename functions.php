<?php
function startDb(string $dbName): PDO {
    $db = new PDO('mysql:host=db;dbname='.$dbName, 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getBooksFromDb(PDO $db): array
{
    $query = $db->prepare('SELECT `name`, `author`, `category`, `released` FROM `booksCollected`');
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function displayBook(array $book): string
{
    if(array_key_exists('name', $book) && array_key_exists('author', $book) && array_key_exists('category', $book) && array_key_exists('released', $book)) {
        return '<div class="item">' .
            '<div class="bookDetails">' .
            '<p class="bookHeading">' . $book['name'] . '</p>' .
            '<p class="bookAuthor">' . $book['author'] . '</p>' .
            '<p class="bookCategory">' . $book['category'] . '</p>' .
            '<p class="releaseYear">' . $book['released'] . '</p>' .
            '</div>' .
            '<form method="post">
            <input type="submit" name="test" id="'.$book['name'].'" value="Delete"/><br/>
            </form>' .
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