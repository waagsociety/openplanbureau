<?php snippet('header') ?>
  <article class="main" role="main">
    <header class="intro container big">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </header>
    <?php snippet('list') ?>
  </article>

<?php snippet('footer') ?>
