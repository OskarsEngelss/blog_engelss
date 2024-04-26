<?php
auth();

require "../Core/Validator.php";
require "../Core/Database.php";
$config = require("../config.php");
$db = new Database($config);

$userQuery = "SELECT * FROM users WHERE id=:id";
$params = [
    ":id" => $_SESSION["user_id"]
];
$user = $db->execute($userQuery, $params)->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (!Validator::string($_POST["username"], min: 1, max: 16 )) $errors["username"] = "Username is 0-16 characters!";
    

    if (empty($errors)) {
        $query = "UPDATE users SET username = :username;";
        $params = [
            ":username" => $_POST["username"]
        ];
        $db->execute($query, $params);

        header("Location: /");
        die();
    }
}

$differentStyle = "auth-admin";
$title = "Change Username";
require "../views/users/changeUsername.view.php";
?>