<?php

/*
 *  footer.php
 *  -------------------
 *  Global file that displays footers and the bottom
 *  <body> portion of a website.
 *
 */

?>

    <footer>
      <p>© <?php echo Date("Y"); ?> Benny's Bloody Mary Beef Straw. All rights reserved. Crafted by <a href="http://cramerdev.com">Cramer Dev</a>.</p>
    </footer>

  </div> <!-- close #container -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='<?php bloginfo('template_directory'); ?>/js/libs/jquery-1.6.min.js'>\x3C/script>")</script>

  <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

  <!--[if lt IE 7 ]>
    <script src="<?php bloginfo('template_directory'); ?>/js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->

  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"],["_trackPageLoadTime"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

  <?php wp_footer(); ?>

</body>
</html>