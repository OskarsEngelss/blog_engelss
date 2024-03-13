<?php
$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];

if ($url == "/about") {
    require "controllers/about.php";
} else if ($url == "/") {
    require "controllers/index.php";
} else if ($url == "/story") {
    require "controllers/story.php";
}
?>