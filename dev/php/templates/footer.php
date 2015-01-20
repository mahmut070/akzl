	<div class="Footer">
		<div class="u-gridContainer">

			<div class="u-gridCol3">
				<img class="logo-footer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.png"> <br>
			</div>

			<div class="u-gridCol3">
				<b>Adres</b>
				<p>
					D. Losstraat 24 <br>
					3201 EJ Spijkenisse <br>
					(nabij City Plaza)
				</p>
			</div>

			<div class="u-gridCol3">
				<b>Contact</b>
				<p>
				 <div class="footer-contact-row"> <img class="footer-icons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/telefoon.svg"> 0181-284140 </div>
				 <div class="footer-contact-row"> <img class="footer-icons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobiel.svg"> 06-15229522 </div>
				 <div class="footer-contact-row"> <img class="footer-icons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.svg"> info@akzl.nl </div>
				</p>
			</div>

			<div class="u-gridCol3">
				<b>Sitemap</b>
				<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
				<div class="Footer-inner u-gridRow">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">Lokaal<span class="oranje-link">Gevonden</span></a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
