<?php 
  $items = $page->children();
  $count = $items->count();
  $index = 0;
?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script type="text/javascript">
  var controller = new ScrollMagic.Controller();
</script>

<?php foreach($items as $item): $index++; ?>
   <section id="grid-<?php echo $index ?>" class="grid slide">
    <div class="trigger"></div>
    <div class="grid-cell container big">
      <div class="text">
        <h2><?php echo $item->title() ?></h2>
        <?php echo kirbytext($item->text()) ?>
      </div>
    </div>

    <div class="grid-cell">
      <figure class="post__picture">
        <img src="<?php echo $item->contentURL() ?>/<?php echo $item->postimage() ?>">
      </figure>
    </div>
  </section>
  <script>
      var sceneGrid<?php echo $index ?> = new ScrollMagic.Scene({
                triggerElement: "#grid-<?php echo $index ?> .trigger", 
                duration: 2000
              })
              .setTween("#grid-<?php echo $index ?> .post__picture", { yPercent: -30, scale: 1.05}) // trigger a TweenMax.to tween
              // .addIndicators({name: "1 (duration: 200)"}) // add indicators (requires plugin)
              .addTo(controller);

      var sceneGridTekst<?php echo $index ?> = new ScrollMagic.Scene({
                triggerElement: "#grid-<?php echo $index ?> .trigger", 
                duration: 2000
              })
              .setTween("#grid-<?php echo $index ?> .text", { yPercent: 10}) // trigger a TweenMax.to tween
              // .addIndicators({name: "1 (duration: 200)"}) // add indicators (requires plugin)
              .addTo(controller);
  </script>
 <?php endforeach ?>
