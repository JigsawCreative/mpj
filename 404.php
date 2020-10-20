<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

?>

<div class="main" id="404-wrapper">

	<section class="bg-dashes">
		<div class="container">
			<div class="row">
				<div class="col-md-12 my-md-4">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.',
					'understrap' ); ?></h1>
					<p>Sorry, we couldn't find that page you were looking for. Maybe it's moved, or maybe the URL is incorrect.</p>
					<ul class="">
						<li>Check that the URL you entered is correct.</li>
						<li>Return to our home page by clicking <a href="<?php echo esc_url( home_url( '/' ) ); ?>">here</a></li>
						<li>Alternatively, use the navigation menu above to find what you need.</li>
					</ul>
				</div><!-- col-sm-12 -->
			</div><!-- .row -->
		</div><!-- Container -->
	</section><!-- Section -->
</div><!-- Main -->

<?php get_footer(); ?>
