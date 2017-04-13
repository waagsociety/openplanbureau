<section class="grid news-list-section">
  <section class="grid-cell container u-1of3 center-content">
    <div>
      <h2>Laatste nieuws</h2>
      <ul class="list">
        <?php foreach($pages->find('nieuws')->children()->visible()->limit(5) as $item): ?>
        <li><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
        <?php endforeach ?>
      </ul>
      <a href="<?php echo $site->find('nieuws')->url() ?>" class="btn btn-1">Meer nieuws</a>
    </div>
  </section>

  <section class="grid-cell grid--grow grid--center container bg-image news-list-image">
    <h1 class="slogan"><?php echo $site->slogan() ?></h1>
  </section>
</section>
