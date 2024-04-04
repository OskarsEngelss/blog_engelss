<?php
require "Validator.php";
require "Database.php";

$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];

  if (!Validator::string($_POST["title"], min: 1, max: 255)) $errors["title"] = "Title can't be empty or longer than 255 characters!";

  $categoryList = ["sport", "food", "music"];
  if (!Validator::category($_POST["category"], $categoryList)) $errors["category"] = "Category has to be one of the specified!";

  if (empty($errors)) {
    $query = "INSERT INTO posts (title, category_id) VALUES (:title, (SELECT id FROM categories WHERE NAME = :category));";
    $params = [
      ":title" => $_POST["title"],
      ":category" => $_POST["category"]
    ];

    $db->execute($query, $params);
    header("Location: /");
    die();
  }
}




$title = "Engelss Posts";
require "views/posts/create.view.php";
?>