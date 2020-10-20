<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="wrapper-footer">

	<footer class="site-footer" id="colophon">

		<div class="<?php echo esc_html( $container ); ?>">

			<div class="row">

				<div class="col-sm push-md-4 menu">
					<!-- <p class="footer-title">Our Services</p> -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer-products-menu',
							'container'				=> 'div',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-products-menu',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div><!--col end -->

				<div class="col-sm push-md-4 menu">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer-page-menu',
							'container'				=> 'div',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-page-menu',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div><!--col end -->

				<div class="col-sm text-center text-sm-left push-md-4">
					<a href="<?php echo get_site_url(); ?>/request-a-brochure/" class="btn btn-br btn-cr"><img src="<?php bloginfo('template_url'); ?>/img/book-icon-cream@2x.png"> Brochure</a>
					<a href="<?php echo get_site_url(); ?>/request-a-site-visit/" class="btn btn-sv btn-cr"><img src="<?php bloginfo('template_url'); ?>/img/house-icon-cream@2x.png"> Site Visit</a>
					<div class="social">
						<p>Follow us</p>
						<ul class="social-icons">
							<li><a href="https://twitter.com/MontpelierJ" target="_blank"><i class="fa fa-twitter fa-3" aria-hidden="true"></i></a></li>
							<li><a href="https://www.facebook.com/MontpelierJoinery" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.houzz.co.uk/pro/montpelierjoinery/montpelier-joinery-ltd" target="_blank"><i class="fa fa-houzz" aria-hidden="true"></i></a></li>
							<li><a href="https://www.pinterest.co.uk/montpelierjoinery/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div><!--col end -->

				<div class="col-md-4 text-center text-md-left pull-md-8">
					<img class="logo" src="<?php bloginfo('template_url'); ?>/img/logo@2x.png">
					<ul class="contact-details">
						<li><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i> <a href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></li>
						<li><i class="fa fa-phone fa-fw" aria-hidden="true"></i> <a href="tel:<?php the_field('telephone', 'option'); ?>"><?php the_field('telephone', 'option'); ?></a></li>
						<li><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> <?php the_field('address_1', 'option'); ?>, <?php the_field('town', 'option'); ?>, <?php the_field('county', 'option'); ?>, <?php the_field('postcode', 'option'); ?></li>
					</ul>

					<div class="site-info">
						<p class="copyright">© <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
					</div><!-- .site-info -->

				</div><!--col end -->

			</div><!-- row end -->

		</div><!-- container end -->
		
       <script type="text/javascript" src="https://www.montpelierjoinery.com/wp-content/themes/montpelier/js/image_carousel.js"></script>
       <script type="text/javascript" src="https://www.montpelierjoinery.com/wp-content/themes/montpelier/js//ekko-lightbox.js"></script>

	</footer><!-- #colophon -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
