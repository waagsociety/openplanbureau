<section class="news-items">
  <ul class="list">
    <?php foreach($page->children()->visible() as $item): ?>
    <li><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
    <?php endforeach ?>
  </ul>
</section>
