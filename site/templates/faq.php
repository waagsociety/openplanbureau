<?php

$items = $page->children()->visible();
$count = $items->count();
$index = 0;

?>

<?php snippet('header') ?>
  <article class="main" role="main">
    <header class="intro container big">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->intro()->kirbytext() ?>
    </header>
    <div class="accordion container">
        <?php foreach($items as $item): $index++; ?>
            <div class="accordion-container">
              <button class="accordion is-toggle"><?php echo $index ?>. <?php echo $item->title() ?> </button>
              <div class="panel">
                <?php echo $item->text()->kirbytext() ?>
              </div>
            </div>
        <?php endforeach ?>
    </div>
  </article>

<?php snippet('footer') ?>
