<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="login-div">
    <form class="login-form" method="POST">
        <label class="login-margin">
            Email:
            <input type="email" name='email' value="<?=($_POST["email"] ?? "")?>"/>
            <?php if(isset($errors["email"])) { ?> 
                <p class="invalid-data"><?= $errors["email"] ?></p>
            <?php } ?>
        </label>
        <label class="login-margin">
            Password:
            <input type="password" name='password' value="<?=($_POST["password"] ?? "")?>"/>
            <span class="explanation">(jābūt 8 rakstzīmēm, 1 burtam, 1 lielam, 1 mazam un 1 īpašam simbolam.)</span>
            <?php if(isset($errors["password"])) { ?> 
                <p class="invalid-data"><?= $errors["password"] ?></p>
            <?php } ?>
        </label>
        <button class="login-margin">Register</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>