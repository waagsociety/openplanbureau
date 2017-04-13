  <?php foreach($page->children()->visible() as $item): ?>
  <article class="grid news-list">
    <div class="grid-cell container">
      <div class="text">
        <h2><?php echo $item->title() ?></h2>
        <p><?php echo $item->intro() ?></p>
        <a href="<?php echo $item->url() ?>" class="btn btn-1">View</a>
      </div>
    </div>
    <div class="grid-cell image-cell" style="background-image: url(<?php echo $item->contentURL() ?>/<?php echo $item->postimage() ?>)">
    </div>
  </article>
  <?php endforeach ?>
     
