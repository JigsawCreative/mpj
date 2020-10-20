<?php
/*
  Template Name: Contact Page
*/
?>

<?php get_header(); ?>

	<div class="main">

    <!-- Contact Form -->
		<section class="bg-dashes">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-4">
						<h1><?php the_title(); ?></h1>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>

						<ul class="list-unstyled">
						  <li class="mb-3"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php the_field('telephone', 'option'); ?>"><span class="ml-2"><?php the_field('telephone', 'option'); ?></span></a></li>
						  <li class="mb-3"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="ml-2"><?php the_field('address_1', 'option'); ?></span>
							  <br><span class="ml-4"><?php the_field('town', 'option'); ?></span>
								<br><span class="ml-4"><?php the_field('county', 'option'); ?></span>
								<br><span class="ml-4"><?php the_field('postcode', 'option'); ?></span>
							</li>
						  <li class="mb-3"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:<?php the_field('email_address', 'option'); ?>"><span class="ml-2"><?php the_field('email_address', 'option'); ?></span></a></li>
							<?php
								// check if the repeater field has rows of data
								if( have_rows('office_hours', 'option') ): { $cnt = 0; ?>

									<li>
										<dl class="row">
											<dt class="col-1"><i class="fa fa-clock-o" aria-hidden="true"></i></dt>
										  <dd class="col-11">
										    <dl class="row">
													<?php
												 		// loop through the rows of data
												    while ( have_rows('office_hours', 'option') ) : the_row(); $cnt++;

															// vars
															$day = get_sub_field('day', 'option');
															$hours = get_sub_field('hours', 'option');

																echo '<dt class="col-2">' . $day . '</dt>';
																echo '<dd class="col-10">' . $hours . '</dd>';

												    endwhile;
													?>
												</dl>
											</dd>
										</dl>
									</li>
								<?php
									} endif;
									wp_reset_postdata();
								?>
						</ul>
				 </div>
					<div class="col-md-8">
						<div class="form-box">
							<?php gravity_form( 4, false, false, false, '', true ); ?>
						</div>
					</div>
		    </div>
		  </div>
		</section>

	</div><!-- Main -->

<?php get_footer(); ?>
