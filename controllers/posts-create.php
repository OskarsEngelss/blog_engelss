<?php
require "Database.php";

$config = require("config.php");

$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $query = "INSERT INTO posts (title, category_id) VALUES (':title', (SELECT id FROM categories WHERE NAME = ':category'));";
  $params[":title"] = $_POST["title"];
  $params[":category"] = $_POST["category"];

  $posts = $db
          ->execute($query, $params)
          ->fetchAll();
}




$title = "Engelss Posts";
require "views/posts-create.view.php";
?>