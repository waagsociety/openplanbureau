<nav>
  <ul class="menu">
    <li <?php e($page->isHomePage(), ' class="logo active"') ?> class="logo">
      <a href="<?php echo url('/'); ?>">
        <svg width="148" height="90">
          <use xlink:href="#logo" />
        </svg>
      </a>
    </li>
    <?php foreach($pages->visible() as $p): ?>
    <li <?php e($p->isOpen(), 'class="item active"') ?> class="item">
      <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
  <div class="mobile-container">
    <button class="mobile-toggle" onclick="toggleMenu()">
      Menu
    </button>
  </div>
  <ul id="mobile-menu" class="mobile-menu">
    <li <?php e($page->isHomePage(), ' class="logo active"') ?> class="logo">
      <a href="<?php echo url('/'); ?>">
        <svg width="148" height="90">
          <use xlink:href="#logo" />
        </svg>
      </a>
    </li>
    <?php foreach($pages->visible() as $p): ?>
    <li <?php e($p->isOpen(), 'class="item active"') ?> class="item">
      <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>

<script type="text/javascript">
  function toggleMenu(el){
    document.getElementById('mobile-menu').classList.toggle('active');
  }

</script>
