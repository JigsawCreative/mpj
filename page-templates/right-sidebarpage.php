<?php
/**
 * Template Name: Right Sidebar Layout
 *
 * This template can be used to override the default template and sidebar setup
 */

get_header();
?>

<div class="main">

	<!-- Main jumbotron -->
	<div class="jumbotron bg-dark-dashes">
		<div class="container">

			<!-- Breadcrumbs -->
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}
				?>
			</div>

			<div class="jumbotron-content">
				<h1 class="display-3 w-75"><?php the_title(); ?></h1>
				<?php if( get_field('brief_description') ): ?>
					<p class="w-50"><?php the_field('brief_description'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<section>
		<div class="container">
			<div class="row">

				<div class="col-md-4 push-md-8">

					<?php if( get_field('hide_sidebar') ): ?>
						<div class="jump-to-menu">
							<h3>Jump to a section</h3>
							<?php
								if( have_rows('main_content') ): $i = 0;
									echo '<ul class="list-unstyled">';
									while( have_rows('main_content') ) : the_row(); $i++; ?>
										<li><a class="scroll" href="#<?php echo $i; ?>"><?php the_sub_field('title'); ?></a></li>
									<?php
									endwhile;
									echo '</ul>';
								endif;
							?>
						</div>
					<?php endif; ?>

					<div class="bg-cream contact-box text-center text-md-left hidden-md-down">
						<h3>Want to get in touch?</h3>
						<ul class="list-unstyled">
							<li><i class="fa fa-phone fa-fw" aria-hidden="true"></i> <a href="tel:<?php the_field('telephone', 'option'); ?>"><?php the_field('telephone', 'option'); ?></a></li>
							<li><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i> <a href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></li>
						</ul>
						<a class="btn btn-lg" href="<?php echo get_site_url(); ?>/contact-us/" role="button">Use the Contact Form <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>

				<div class="col-md-8 pull-md-4">
					<!-- Intro text -->
					<div class="pb-4">
					  <?php
							if( get_field('intro_text') ):
				    		echo the_field('intro_text');
						 	endif;
						?>
					</div>
					<?php
						if( have_rows('main_content') ): $i = 0;
						  while( have_rows('main_content') ) : the_row(); $i++; ?>
								<div class="pb-3">
									<h2 id="<?php echo $i; ?>" class="pb-1"><?php the_sub_field('title'); ?></h2>
									<?php the_sub_field('content'); ?>
								</div>
							<?php
					    endwhile;
						endif;
					?>
				</div><!-- col-md-8 -->
			</div><!-- .row -->
		</div><!-- Container end -->
	</section>

		<!-- Brochure Form -->
		<?php include(locate_template('form-brochure.php')); ?>

	</div><!-- Main -->

<?php get_footer(); ?>
