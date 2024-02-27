<?php
require "helpers.php";

echo "Hello <br><br>";

$connection_string = "mysql:host=localhost;dbname=blog_engelss;user=root;password=;charset=utf8mb4";
$pdo = new PDO($connection_string);

//Sagatavo SQL izpildei
$query = $pdo->prepare("SELECT * FROM posts");
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<ol>";
    foreach($posts as $post) {
        echo "<li>" . $post["title"] . "</li>";
    }
echo "</ol>";
?>