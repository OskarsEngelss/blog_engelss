<?php
require "Validator.php";
require "Database.php";

$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM posts WHERE id=:id";
$params = [
    ":id" => $_GET["id"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    if (!Validator::string($_POST["title"], min: 1, max: 255)) $errors["title"] = "Title can't be empty or longer than 255 characters!";

    $categoryList = ["sport", "food", "music"];
    if (!Validator::category($_POST["category"], $categoryList)) $errors["category"] = "Category has to be one of the specified!";

    if (empty($errors)) {
        $query = "UPDATE posts SET title = :title, category_id = (SELECT id FROM categories WHERE NAME = :category) WHERE id = :id;";
        $params = [
            ":id" => $_POST["id"],
            ":title" => $_POST["title"],
            ":category" => $_POST["category"]
        ];
    
        $db->execute($query, $params);
        header("Location: /");
        die();
    }

}

$post = $db->execute($query, $params)->fetch();

$title =  $post["title"] . " edit";
require "views/posts/edit.view.php";
?>