<?php
//Lai izvadītu datus no  datu bāzes uz mājaslapu

require "helpers.php";
require "Database.php";
$config = require("config.php");

$query = "SELECT * FROM posts";
$params = [];
if (isset($_GET["id"]) && $_GET["id"]!="") {
    $query .= " WHERE id=:id";
    $params = [":id" => $_GET["id"]];
}
$db = new Database($config);
$posts = $db
        ->execute($query, $params)
        ->fetchAll();

echo "<form>";
echo "<input name='id' />";
echo "<button>Submit</button>";
echo "</form>";

echo "<ul>";
    foreach($posts as $post) {
        echo "<li>" . $post["title"] . "</li>";
    }
echo "</ul>";
?>