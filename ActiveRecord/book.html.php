<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book</title>
</head>
<body>
<?php
use Nd2\ActiveRecord\Book;

require '../ActiveRecord/Book.php';

    if(isset($_GET['book'])) {
        $book = Book::load($_GET['book']);
    }
    if(!empty($book)) {
        ?>
        <div>
            <table>
                <tr>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Authors</th>
                    <th>Genre</th>
                </tr>
                <tr>
                    <td><?php echo $book->getTitle() ?></td>
                    <td><?php echo $book->getYear() ?></td>
                    <td><?php echo $book->getAuthors() ?></td>
                    <td><?php echo $book->getGenre() ?></td>
                </tr>
            </table>
        </div>
  <?php } else { ?>
<div>
    <h2>Book not found</h2>
</div>
<?php } ?>
<a href="booklist.html.php">Back to list</a>
</body>
</html>