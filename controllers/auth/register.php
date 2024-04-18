<?php
guest();

require "Core/Validator.php";
require "Core/Database.php";
$config = require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database($config);
    $errors = [];

    if (!Validator::email($_POST["email"])) $errors["email"] = "Nepariezs epasta formāts!";
    if (!Validator::password($_POST["password"])) $errors["password"] = "Parolē ir nepilnības!";
    
    $query = "SELECT * FROM users WHERE email=:email;";
    $params = [
        ":email" => $_POST["email"]
    ];
    $result = $db->execute($query, $params)->fetch();
    if ($result) {
        $errors["email"] = "E-pasts jau izmantots!";
    }

    if (empty($errors)) {
        $query = "INSERT INTO users (email, password) VALUES (:email, :password);";
        $params = [
            ":email" => $_POST["email"],
            ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
        ];
        $db->execute($query, $params);

        $_SESSION["flash"] = "Esat veiksmīgi reģistrēts";
        header("Location: /login");
        die();
    }
}

$title = "Register";
require "views/auth/register.view.php";
?>