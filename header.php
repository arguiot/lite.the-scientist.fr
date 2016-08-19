<section id="featured" style="background-image: url(<?php echo "/img.php?id=" . $articleID; ?>); height: 400px">
  <div class="content">
    <h1><?php echo $articleTitle; ?></h1>
    <p><?php echo $articleDesc; ?></p><a href="<?php echo "article.php?id=" . $articleID; ?>" id="read">Lire cet Article</a>
  </div>
</section>