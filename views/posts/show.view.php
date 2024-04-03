<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($post["title"])?></h1>
<form method="POST" action="/delete-posts" class="delete-form">
    <input type="hidden" name="id" value="<?= $post["id"] ?>" />
    <button class="delete-button">Delete</button>
</form>

<h1>Edit</h1>
<form method="POST">
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
            <option value="sport">sport</option>
            <option value="music">music</option>
            <option value="food">food</option>
        </select>
        <?php if(isset($errors["category"])) { ?> 
            <p class="invalid-data"><?= $errors["category"] ?></p>
        <?php } ?>
    </lable>
    <button>EDIT</button>
</form>

<?php require "views/components/footer.php" ?>