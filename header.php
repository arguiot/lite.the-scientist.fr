<?php
require_once('db.php');
$sql = "SELECT * FROM blog_posts ORDER BY post_date DESC LIMIT 0, 1";
foreach($bdd->query($sql) as $val)
{
  $articleTitle = $val['post_title'];
  $articleID = $val['ID'];
  $articleDate = $val['post_date'];
  $articleDesc = htmlspecialchars(mb_strimwidth($val['post_content'], 0, 150, "..."));
  $articleContent = $val['post_content'];
  ?>
<section id="featured" style="background-image: url(<?php echo "/assets/img/" . $articleID . ".png"; ?>); height: 400px">
  <div class="content">
    <h1><?php echo $articleTitle; ?></h1>
    <p><?php echo $articleDesc; ?></p><a href="<?php echo "article.php?id=" . $articleID; ?>" id="read">Lire cet Article</a>
  </div>
</section>
<?php
}
?>