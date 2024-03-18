<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1>Create a post</h1>

<form method="POST">
    <lable>
        Title:
        <input name='title'/>
    </lable>
    <lable>
        Category:
        <input name='category'/>
    </lable>
    <button>Create</button>
</form>

<?php require "components/footer.php" ?>