<?php
include __DIR__ . "/book.php";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>HP-Books</title>
</head>

<body>
    <div class="container">
        <?php foreach ($books as $book) { ?>
            <div class="book">
                <h2><?php echo $book->title; ?></h2>
                <h3><?php echo $book->author; ?></h3>
                <h4><?php echo $book->publishingHouse; ?> - <?php echo $book->year; ?></h4>
                <p><?php echo $book->abstract(150); ?></p>
                <!-- <span><?php echo $book->getId(); ?></span> -->
            </div>
        <?php } ?>
    </div>
</body>

</html>