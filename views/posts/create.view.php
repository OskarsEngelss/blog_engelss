<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Create a post</h1>

<form method="POST">
    <lable>
        Title:
        <input name='title' value="<?=($_POST["title"] ?? "")?>"/>
        <?php if(isset($errors["title"])) { ?> 
            <p class="invalid-data"><?= $errors["title"] ?></p>
        <?php } ?>
    </lable>
    <lable>
        Category:
        <select name="category">
            <option value="sport" <?= ($_POST["category"] ?? "sport") == "sport" ? "selected" : ""?>>sport</option>
            <option value="music" <?= ($_POST["category"] ?? "music")  == "music" ? "selected" : ""?>>music</option>
            <option value="food" <?= ($_POST["category"] ??  "food") == "food" ? "selected" : ""?>>food</option>
        </select>
        <?php if(isset($errors["category"])) { ?> 
            <p class="invalid-data"><?= $errors["category"] ?></p>
        <?php } ?>
    </lable>
    <button>Create</button>
</form>

<?php require "views/components/footer.php" ?>