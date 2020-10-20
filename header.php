<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Fav Icon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-dark.ico" />

	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-W8SXH69');
	</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar fixed-top" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md navbar-inverse">

		<?php if ( 'container' == $container ) : ?>
			<div class="container consultation-menu">
		<?php endif; ?>

					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img class="logo" src="<?php bloginfo('template_url'); ?>/img/logo@2x.png"></a>

				<div class="pull-left">
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
				</div>
				<div class="float-right ml-auto hidden-xs-down">
					<span class="navbar-text"><i class="fa fa-phone" aria-hidden="true"></i> <a style="color: #f9f8e9" href="tel:<?php the_field('telephone', 'option'); ?>"><?php the_field('telephone', 'option'); ?></a></span>
				</div>
			</div><!-- .container -->
			<?php endif; ?>

		</nav>

		<nav class="navbar navbar-toggleable-md navbar-light bg-faded sub-nav">

			<?php if ( 'container' == $container ) : ?>
				<div class="container consultation-menu text-center text-md-left">
			<?php endif; ?>
					<div class="pull-right nav-btn hidden-sm-down hidden-lg-up">
						<a href="<?php echo get_site_url(); ?>/request-a-brochure/" class="btn btn-br"><img src="<?php bloginfo('template_url'); ?>/img/book-icon@2x.png"> Brochure</a>
						<a href="<?php echo get_site_url(); ?>/request-a-site-visit/" class="btn btn-sv"><img src="<?php bloginfo('template_url'); ?>/img/house-icon@2x.png"> Design Consultation</a>
					</div>

					<button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#sub-menu" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars" aria-hidden="true"></i>Menu
					</button>

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'sub-menu',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'sub-menu',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'sub-menu',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					); ?>
				<?php if ( 'container' == $container ) : ?>
					<div class="pull-right nav-btn hidden-md-down">
						<a href="<?php echo get_site_url(); ?>/request-a-brochure/" class="btn btn-br"><img src="<?php bloginfo('template_url'); ?>/img/book-icon@2x.png"> Brochure</a>
						<a href="<?php echo get_site_url(); ?>/request-a-site-visit/" class="btn btn-sv"><img src="<?php bloginfo('template_url'); ?>/img/house-icon@2x.png"> Design Consultation</a>
					</div>
				</div><!-- .container -->
				<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
