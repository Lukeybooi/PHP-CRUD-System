<?php
require '../config/dbConfig.php';
$db = new InitDB;
$connection = $db->getConnection();

if (!empty($_GET['id'])) {
    $id = mysqli_real_escape_string($connection, $_GET['id']);
    $query = "DELETE FROM `posts` WHERE `posts`.`id` = {$id}";
    $db->setQuery($query);

    header('Location: ../index.php');

} else {
    die("ERROR");
}
