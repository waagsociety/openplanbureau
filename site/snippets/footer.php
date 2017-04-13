<footer class="main__footer container">
  <ul>
    <li><a href="https://twitter.com/openplanbureau"><i class="fa fa-twitter" aria-hidden="true"></i> @Openplanbureau</a></li>
    <li><a href="https://www.facebook.com/Open-Planbureau-1133113386780648"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
    <li>Made with ♥ by <a href="http://www.waag.org">Waag Society</a>
        </p></li>
  </ul>
</footer>

<?php echo js('assets/js/main.min.js') ?>

<script>
  var bodyHeadroom = headroom(document.body)
  addEventListener('scroll', bodyHeadroom)
  addEventListener('load', bodyHeadroom)
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

<!-- Piwik -->
<script type="text/javascript">
var _paq = _paq || [];
_paq.push(["setDomains", ["*.openplanbureau.nl"]]);
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
var u="stats.waag.org";
_paq.push(['setTrackerUrl', u+'piwik.php']);
_paq.push(['setSiteId', '10']);
var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
})();
</script>
<noscript><p><img src="stats.waag.org/piwik.php?idsite=10" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
</html>
