<?php

// Ieraksti bloga vietnes nosaukumu!
$title = "";
$programmers = ["Jānis Mārtiņš", "Oskars", "Emīls", "Edmunds", "Oskars", "Adrians", "Ralfs", "Railijs Didzis", "Kristers", "Roberts Aldis", "Gustavs", "Kristaps Imants", "Elvis", "Adrians", "Matīss Mareks", "Markus", "Kristers", "Marsels", "Kristaps Toms", "Eduards", "Jēkabs"] ;

echo "<h1>The Blog Revolution: A Tale of the Popular Blogging Platform <em>$title</em></h1>";

echo "<p>As digital technology spread across the globe like never before, blogging became an even more essential way to share stories, ideas, and discoveries. However, while there were many blogging platforms offering various features, most lacked innovation and user-friendly experiences. That all changed in 2024 when the world was shaken by $title - the future blog platform created by 20 outstanding programmers:</p>";

echo "<ul>";
foreach($programmers as $programmer) {
  echo "<li>$programmer</li>";
}
echo "</ul>";

echo "<p>Together, they created $title - a blogging platform that completely transformed the way we blog and consume content. $title was not only visually captivating, with a modern and user-friendly interface, but it also offered innovative features that surpassed existing competition. From the dynamic content recommendation system to integrated social networks where users could easily share their content, $title was more than just a blogging platform - it was a complete community.</p>";
echo "<p>Thanks to talent and perseverance of the programmers, $title became the world's leading blogging platform in a very short time. The number of users grew rapidly as people from all over the world appreciated the opportunities $title offered and the intimate connection the platform created between writers and readers.</p>";

require "views/story.view.php";
?>