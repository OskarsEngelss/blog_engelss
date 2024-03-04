<?php
//Lai izvadītu datus no  datu bāzes uz mājaslapu

require "helpers.php";
require "Database.php";
$config = require("config.php");

$query = "SELECT * FROM posts";
if (isset($_GET["id"]) && $_GET["id"]!=null) {
    $id = $_GET["id"];
    $query = "SELECT * FROM posts WHERE id=$id";
}
$db = new Database($config);
$posts = $db
        ->execute($query)
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