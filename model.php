<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
    <link rel="icon" href="assets/img/icon.png">
    <title>The scientist | La science n'attend pas !</title>
  </head>
  <body>
    <?php
      require_once('header.php');
      require_once('nav.php');
    ?>
<?php
$sql = "SELECT * FROM blog_posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC";
foreach($bdd->query($sql) as $val)
{
  $articleTitle = $val['post_title'];
  $articleID = $val['ID'];
  $articleDate = $val['post_date'];
  $articleDesc = htmlspecialchars(mb_strimwidth($val['post_content'], 0, 150, "..."));
  ?>
    <div class="articles-desktop">
          <a href="<?php echo "article.php?id=" . $articleID; ?>" title="<?php echo $articleTitle; ?>" class="article-li apple"></a>
          <div class="article-li apple" style="background: url(<?php echo "/assets/img/" . $articleID . ".png"; ?>); background-size: cover; background-position: center;">
            <div class="content">
              <h3><?php echo $articleTitle; ?></h3>
              <p><?php echo $articleDesc; ?></p>
              <span class="date"><?php echo $articleDate; ?></span>
              <a href="<?php echo "article.php?id=" . $articleID; ?>" title="<?php echo $articleTitle; ?>" id="read">Lire cet Article</a>
            </div>
          </div>
      </div>
    </div>
    <?php
}
?>
    <?php
      require_once('footer.php');
    ?>
  </body>
  </html>
