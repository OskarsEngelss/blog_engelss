<?php
guest();

require "Validator.php";
require "Database.php";
$config = require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database($config);
    $errors = [];

    $query = "SELECT * FROM users WHERE email=:email";
    $params = [
        ":email" => $_POST["email"],
    ];
    $user = $db->execute($query, $params)->fetch();
    if (!$user || !password_verify($_POST["password"], $user["password"])) $errors["email"] = "Ivadītajā informācijā ir trūkumi.";

    if (empty($errors)) {
        $_SESSION["user"] = true;
        $_SESSION["email"] = $_POST["email"];
        
        header("Location: /home");
        die();
    }
}

$title = "Login";
require "views/auth/login.view.php";
?>