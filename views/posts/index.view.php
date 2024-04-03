<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<form>
  <input name='id' value='<?= ($_GET["id"] ?? "") ?>'/>
  <button>Filter by ID</button>
</form>

<form>
  <input name='category' value='<?= ($_GET["category"] ?? "") ?>'/>
  <button>Filter by category</button>
</form>

<h1>Posts:</h1>

<ul>
<?php foreach($posts as $post) { ?>
  <li>
    <a class="posts" href="/show?id=<?= $post["id"] ?>"><?= htmlspecialchars($post["title"])?></a>
    <form method="POST" action="/delete-posts" class="delete-form">
      <input type="hidden" name="id" value="<?= $post["id"] ?>" />
      <button class="delete-button">Delete</button>
    </form>
  </li>
<?php } ?>
</ul>

<?php require "views/components/footer.php" ?>

