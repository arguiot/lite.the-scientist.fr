<?php
require_once('db.php');
$sql = "SELECT * FROM blog_posts WHERE ID = " . $_GET['id'];
foreach($bdd->query($sql) as $val)
{
  $articleTitle = $val['post_title'];
  $articleID = $val['ID'];
  $articleDate = $val['post_date'];
  $articleDesc = htmlspecialchars(mb_strimwidth($val['post_content'], 0, 150, "..."));
  $articleContent = $val['post_content'];
  ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $articleTitle; ?></title>
    <link rel="icon" href="assets/img/icon.png"/>
    <link rel="stylesheet" href="/assets/css/articles.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
    <header style="background-image: url(<?php echo "/assets/img/" . $articleID . ".png"; ?>);">
      <div class"back" ><a class="back" href="main.php"><i class="material-icons" class="arrow">arrow_back</i></a></div>
      <div class="gradient"></div>
      <div class="title">
        <h1><?php echo $articleTitle; ?></h1>
      </div>
    </header>
    <article><?php echo $articleContent; ?></article>
  </body>
</html>
<?php } ?>