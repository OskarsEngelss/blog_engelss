<?php
require "Core/Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM posts WHERE id=:id";
$params = [
    ":id" => $_GET["id"]
];

$post = $db->execute($query, $params)->fetch();
          
$title = $post["title"];
require "views/posts/show.view.php";
?>