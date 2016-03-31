<footer>
  <div class="footerContainer">
  	<div class="logoContainer"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/mcLogo.svg" alt=""></div>
	<?php wp_nav_menu(array (
		'theme_location' => 'social_menu'
	)); ?>
  
    <p class="copyrightFooter">&copy; <?php echo date('Y'); ?> | <a href="http://www.halifornia.co">Halifornia Design Co.</a></p>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>