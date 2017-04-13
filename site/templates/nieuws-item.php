<?php snippet('header') ?>

  <article class="main" role="main">
    
    <?php $postimage = $page->postimage()->toFile() ?>
    <?php if ($postimage) : ?>
    <header class="blog header" style="background-image: url(<?php echo $page->contentURL() ?>/<?php echo $page->postimage() ?>)">
      <div class="overlay">
      </div>
      <?php if (strlen($postimage->copyright()) > 0) : ?>
        <div class="photo_info">
            <?php echo $postimage->copyright() ?>
        </div>
      <?php endif ?>
    </header>
    <?php endif ?>
    <div class="container big">
      <div class="text">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>
  </article>

<?php snippet('footer') ?>
