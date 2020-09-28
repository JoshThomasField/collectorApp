<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
<div class="collection">
<?php
$db = new PDO('mysql:host=db;dbname=books', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `name`, `author`, `catergory`, `released` FROM `booksCollected`');
$query->execute();
$result = $query->fetchAll();
foreach($result as $book) {
    echo '<div class="item> 
                <div class="bookDetails">'
                    '<p>'$book['name']'</p>'
                    <p>$book['author']</p>
                    <p>$book['catergory']</p>
                    <p>$book['released']</p>
                </div>
          </div>
}

?>
</div>
</body>
</html>
<div class="item">
    <div class="bookdetails">

    </div>
</div>