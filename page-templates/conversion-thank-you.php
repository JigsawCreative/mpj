<?php
/*
  Template Name: Conversion - Thank You Page
*/

get_header();

?>

<div class="main" id="404-wrapper">

	<section class="bg-dashes">
		<div class="container">
			<div class="row">
				<div class="col-md-12 my-md-4 text-center">
					<h1 class="page-title"><?php the_field('conversion_header'); ?></h1>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
			</div><!-- .row -->
		</div><!-- Container -->
	</section><!-- Section -->
</div><!-- Main -->

<?php get_footer(); ?>
