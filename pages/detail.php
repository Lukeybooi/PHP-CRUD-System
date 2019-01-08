<?php
require '../config/dbConfig.php';
$index_page = "../";

if (isset($_GET['id'])) {
    $db = new InitDB;
    $id = mysqli_real_escape_string($db->getConnection(), $_GET['id']);
    $db->setPostAssoc("SELECT * FROM posts WHERE id = " . $id);
    $data = $db->getPost();
}else{
    header("Location: {$index_page}");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Details</title>
</head>

<body class="bg-dark">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-2"><?php echo $data['title'] ?></h1>
            <p><?php echo $data['body'] ?></p>
            <a href="<?php echo $index_page ?>" class="btn btn-primary btn-lg">&laquo; Previous Page</a>
        </div>
    </div>
    <div class="container display-4 text-light">
        <p>By: <?php echo $data['author'] ?></p>
        <footer class="footer float-right lead ">Created On: <?php echo $data['created_at'] ?></footer>
        <br>
        <a href="../front_pages/edit.html?id=<?php echo $id ?>&title=<?php echo $data['title'] ?>&body=<?php echo $data['body'] ?>&author=<?php echo $data['author'] ?>" class="btn btn-light float-left">Edit</a>
        <a href="../pages/remove_SERVER.php?id=<?php echo $id ?>" class="btn btn-danger float-right">Delete</a>
    </div>
</body>

</html>
