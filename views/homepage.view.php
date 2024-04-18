<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1><?=$_SESSION["email"]?></h1>

<div class="button-holder">
    <form method="POST" class="back-circle" action="/logout">
        <button class="back-button">Log out</button>
    </form>
</div>

<?php require "components/footer.php" ?>