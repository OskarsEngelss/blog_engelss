<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Edit</h1>

<form method="POST">
    <input name="id" value="<?= $post["id"] ?>" type="hidden" />
    <lable>
        Title:
        <input name='title' value="<?=($_POST["title"] ?? $post["title"])?>"/>
        <?php if(isset($errors["title"])) { ?> 
            <p class="invalid-data"><?= $errors["title"] ?></p>
        <?php } ?>
    </lable>
    <lable>
        Category:
        <select name="category">
            <option value="sport" <?= ($_POST["category"] ?? $post["name"]) == "sport" ? "selected" : ""?>>sport</option>
            <option value="music" <?= ($_POST["category"] ?? $post["name"]) == "music" ? "selected" : ""?>>music</option>
            <option value="food" <?= ($_POST["category"] ?? $post["name"]) == "food" ? "selected" : ""?>>food</option>
        </select>
        <?php if(isset($errors["category"])) { ?> 
            <p class="invalid-data"><?= $errors["category"] ?></p>
        <?php } ?>
    </lable>
    <button>EDIT</button>
</form>

<?php require "views/components/footer.php" ?>