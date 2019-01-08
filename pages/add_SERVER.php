<?php
require '../config/dbConfig.php';
$db = new InitDB;
$connection = $db->getConnection();

if (!empty($_GET['title']) && !empty($_GET['body']) && !empty($_GET['author'])) {
    $title = mysqli_real_escape_string($connection, $_GET['title']);
    $body = mysqli_real_escape_string($connection, $_GET['body']);
    $author = mysqli_real_escape_string($connection, $_GET['author']);

    $query = "INSERT INTO `posts` (`title`, `body`, `author`) VALUES ('{$title}', '{$body}', '{$author}')";
    $db->setQuery($query);
} else {
    die("ERROR");
}
