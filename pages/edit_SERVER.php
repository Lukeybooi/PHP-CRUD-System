<?php
require '../config/dbConfig.php';
$db = new InitDB;
$connection = $db->getConnection();

if (!empty($_GET['id']) && !empty($_GET['title']) && !empty($_GET['body']) && !empty($_GET['author'])) {
    $id = mysqli_real_escape_string($connection, $_GET['id']);
    $title = mysqli_real_escape_string($connection, $_GET['title']);
    $body = mysqli_real_escape_string($connection, $_GET['body']);
    $author = mysqli_real_escape_string($connection, $_GET['author']);

    $query = "UPDATE `posts` SET `title` = '{$title}', `body` = '{$body}', `author` = '{$author}' WHERE `posts`.`id` = '{$id}'";
    $db->setQuery($query);
} else {
    die("ERROR");
}
