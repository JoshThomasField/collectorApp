<?php
require 'functions.php';

?>
<?php
$db = new PDO('mysql:host=db;dbname=books', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if (!empty($_POST)) {
    if(!empty($_POST['bookName']) && !empty($_POST['author']) && !empty($_POST['category']) && !empty($_POST['released'])) {
        $bookInfo = ['name' => $_POST['bookName'], 'author' => $_POST['author'], 'category' => $_POST['category'], 'released' => $_POST['released']];
        addBook($bookInfo, $db);
    } else {
        header("Location: addbook.php?error=2");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="normalize.css" rel="stylesheet">
    <title>Book Collector</title>
</head>
<body>
<a href="index.php">This is a link</a>
<form action="" method="POST">
    <input type="text" name="bookName" placeholder="Book name"><br><br>
    <input type="text" name="author" placeholder="Author"><br><br>
    <input type="text" name="category" placeholder="Category">
    <input type="number" name="released" placeholder="Release year">
    <input type="submit" value="Submit">
    <?php
    // write error messages
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo 'Failed to add to database';
    } elseif (isset($_GET['error']) && $_GET['error'] == 2) {
        echo 'Form is missing fields';
    }
    ?>
</form>

</body>
</html>
