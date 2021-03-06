<?php
require_once('db.php');
$sql = "SELECT * FROM blog_posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC LIMIT 0, 1";
foreach($bdd->query($sql) as $val)
{
  $articleTitle = $val['post_title'];
  $articleID = $val['ID'];
  $articleDate = $val['post_date'];
  $articleDesc = strip_tags(mb_strimwidth($val['post_content'], 0, 80, "..."));
  $articleContent = $val['post_content'];
  ?>
<section id="featured" style="background-image: url(<?php echo "/assets/img/" . $articleID . ".png"; ?>); height: 400px">
  <div class="content">
    <h1><a href="<?php echo "article.php?id=" . $articleID; ?>"><?php echo $articleTitle; ?></a></h1>
    <p><?php echo $articleDesc; ?></p><a href="<?php echo "article.php?id=" . $articleID; ?>" id="read">Lire cet Article</a>
  </div>
</section>
<?php
}
?>