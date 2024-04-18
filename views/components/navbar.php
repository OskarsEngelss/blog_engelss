<header>
  <nav>
    <a href="/">Posts</a>
    <a href="/about">About Us</a>
    <a href="/story">Story</a>
    <a href="/create-posts">Create posts</a>
    <?php if (!isset($_SESSION["user"])) { ?>
      <a href="/register">Register</a>
      <a href="/login">Login</a>
    <?php } else { ?>
      <a href="/home">Home</a>
    <?php } ?>
  </nav>
</header>