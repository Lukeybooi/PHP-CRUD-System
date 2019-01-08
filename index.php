<?php
require 'config/dbConfig.php';
$db = new InitDB;
$db->setPost("SELECT * FROM posts");
$data = $db->getPost();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Blog Posts</title>
</head>

<body class="bg-dark">
    <div class="form-control container mt-4">
        <?php foreach ($data as $record): ?>
        <p class="display-4 text-center jumbotron">
            <?php echo $record['title'] ?>
        </p>
        <p class="text-justify lead">
            <?php echo $record['body'] ?>
        </p>
        <p class="h5">
            <?php echo $record['author'] ?>
        </p>
        <p class="h6">
            <?php echo $record['created_at'] ?>
        </p>
        <a href="pages/detail.php?id=<?php echo $record['id'] ?>" class="btn btn-dark">Detail &raquo</a>
        <?php endforeach;?>
    </div>
    <div class="form-control container mt-4">
        <a href="front_pages/add.html" class="btn btn-success">Add Record &gt</a>
    </div>
</body>

</html>