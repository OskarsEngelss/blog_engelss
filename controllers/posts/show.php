<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM posts WHERE id=:id";
$params = [
    ":id" => $_GET["id"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if (trim($_POST["title"]) == "") {
        $errors["title"] = "Title can't be empty!";
    }
    if (strlen($_POST["title"]) > 255) {
        $errors["title"] = "Title can't be longer than 255 characters!";
    }
    if ($_POST["category"] != "sport" && $_POST["category"] != "food" && $_POST["category"] != "music") {
        $errors["category"] = "Category has to be one of the specified!";
    }

    if (empty($errors)) {
        $query = "UPDATE posts SET title = :title, category_id = (SELECT id FROM categories WHERE NAME = :category) WHERE id = :id;";
        $params = [
            ":id" => $_GET["id"],
            ":title" => $_POST["title"],
            ":category" => $_POST["category"]
        ];
    
        $db->execute($query, $params);
        header("Location: /");
        die();
      }

}

$post = $db->execute($query, $params)->fetch();
          
$title = "Engelss Posts";
require "views/posts/show.view.php";
?>