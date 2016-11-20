<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book</title>
</head>
<body>
<?php
use Nd2\Php\Book;
use Nd2\Php\DbConnection;

require_once '../Php/DbConnection.php';
require '../Php/Book.php';

    if(isset($_GET['book'])) {
        $id = $_GET['book'];
        $db = new DbConnection();
        $book = $db->findById($id);
    }
    if(!empty($book)) {
        $book = new Book($book);
        ?>
        <div>
            <table>
                <th>Title</th>
                <th>Year</th>
                <th>Genre</th>
                <tr>
                    <td><?php echo $book->getTitle() ?></td>
                    <td><?php echo $book->getYear() ?></td>
                    <td><?php echo $book->getGenre() ?></td>
                </tr>
            </table>
        </div>
  <?php } else { ?>
<div>
    <h2>Book not found</h2>
</div>
<?php } ?>

</body>
</html>