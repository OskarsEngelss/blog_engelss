<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($post["title"])?></h1>
<form method="POST" action="/delete-posts" class="delete-form">
    <input type="hidden" name="id" value="<?= $post["id"] ?>" />
    <button class="delete-button">Delete</button>
</form>

<br>
<a href="/edit?id=<?=$post["id"]?>">Edit</a>

<?php require "views/components/footer.php" ?>