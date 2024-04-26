<?php require "../views/components/head.php" ?>
<?php require "../views/components/navbar.php" ?>

<div>
    <h1><?=$title?></h1>
    <form method="POST">
        <label>
            Username:
            <input type="text" name='username' value="<?=($_POST["username"] ?? $user["username"])?>"/>
            <?php if(isset($errors["username"])) { ?> 
                <p class="invalid-data"><?= $errors["username"] ?></p>
            <?php } ?>
        </label>
        <button>Change</button>
    </form>
</div>

<?php require "../views/components/footer.php" ?>