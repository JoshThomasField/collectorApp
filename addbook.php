<?php
require 'functions.php';

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
    <nav>
        <div class="mobile-nav">
            <a href="index.php"><img class="logo" src="signature(1).png" alt="Logo"></a>
            <i class="fas fa-bars"></i>
            <div class="nav-links">
                <a href="index.php">View Collection</a>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="addBookForm">
            <form action="addbookfunction.php" method="POST">
                <input type="text" name="bookName" placeholder="Book name"><br><br>
                <input type="text" name="author" placeholder="Author"><br><br>
                <input type="text" name="category" placeholder="Category"><br><br>
                <input type="number" name="released" placeholder="Release year"><br><br>
                <input type="submit" value="Add Book">
                <?php
                // write error messages
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo 'Failed to add to database';
                } elseif (isset($_GET['error']) && $_GET['error'] == 2) {
                    echo 'Form is missing fields';
                } elseif (isset($_GET['success']) && $_GET['success'] == 1) {
                    echo 'Successfully added to database.';
                }
                ?>
            </form>
        </div>
    </div>
    <footer>
        <div class="footer">
            <a href="index.php"><img class="logo" src="signature(1).png" alt="Logo"></a>
            <div class="nav-links">
                <a href="index.php">View Collection</a>
            </div>
        </div>
    </footer>
</body>
</html>
