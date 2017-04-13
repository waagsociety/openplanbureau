<?php snippet('header') ?>

  <article class="main" role="main">
    <header class="intro container big">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->intro()->kirbytext() ?>
    </header>
    <div class="container">
      <div class="text">
      <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>
  </article>

<?php snippet('footer') ?>
