<?php
require "helpers.php";
require "Database.php";

$db = new Database();
$posts = $db
        ->execute("SELECT * FROM posts")
        ->fetchAll();

echo "<ol>";
    foreach($posts as $post) {
        echo "<li>" . $post["title"] . "</li>";
    }
echo "</ol>";
?>