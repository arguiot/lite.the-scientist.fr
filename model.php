<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        $('svg.menu').click(function () {
          $('ul.nav').toggleClass('show');
        });

        $('nav ul li a').click(function () {
          $('ul.nav').removeClass('show');
        });
      });

    </script>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
    <link rel="icon" href="assets/img/icon.png">
    <title>The scientist | La science n'attend pas !</title>
  </head>
  <body>
    <?php
      require_once('header.php');
      require_once('nav.php');
    ?>
<div class="articles-desktop">
<div class="apple-articles">
<?php
$sql = "SELECT * FROM blog_posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC lIMIT 1, 4";
foreach($bdd->query($sql) as $val)
{
  $articleTitle = $val['post_title'];
  $articleID = $val['ID'];
  $articleDate = $val['post_date'];
  $articleDesc = strip_tags(mb_strimwidth($val['post_content'], 0, 50, "..."));
  ?>
    
          <a href="<?php echo "article.php?id=" . $articleID; ?>" title="<?php echo $articleTitle; ?>" class="article-li apple"></a>
          <div class="article-li apple" style="background: url(<?php echo "/assets/img/" . $articleID . ".png"; ?>); background-size: cover; background-position: center;">
            <div class="content">
              <h3><?php echo $articleTitle; ?></h3>
              <p><?php echo $articleDesc; ?></p>
              <span class="date"><?php echo $articleDate; ?></span>
              <a href="<?php echo "article.php?id=" . $articleID; ?>" title="<?php echo $articleTitle; ?>" id="read">Lire cet Article</a>
            </div>
          </div>
        
    <?php
}
?>
</div>
</div>
    <?php
      require_once('footer.php');
    ?>
  </body>
  </html>
