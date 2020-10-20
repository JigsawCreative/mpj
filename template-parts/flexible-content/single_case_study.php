<?php if(get_row_layout() == 'single_case_study') : ?>
        
		<!-- Main jumbotron -->
		<?php
		$bk_image = get_field('featured_background_image');
		if( !empty($bk_image) ): ?>
			<div class="jumbotron" style="background: linear-gradient(rgba(51,51,51,0.6), rgba(51,51,51,0.6)), url('<?php echo $bk_image ?>'); background-size: cover; background-repeat: no-repeat; background-position: center;">
		<?php else: ?>
			<div class="jumbotron bg-about">
		<?php endif; ?>
		  <div class="container">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
          <?php if(function_exists('bcn_display'))
            {
              bcn_display();
            }
          ?>
        </div>

				<!-- Grab posts -->
				<?php if (have_posts() ) : while (have_posts()) : the_post(); ?>

				<!-- Next and Previous posts links -->
				<div class="d-none d-sm-inline">
					<?php
						$prev_post = get_previous_post();
						if($prev_post) {
						   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
						   echo "\t" . '<a rel="prev" class="btn btn-white btn-lg m-0 float-left" href="' . get_permalink($prev_post->ID) . '" role="button" title="' . $prev_title. '"><i class="fa fa-arrow-left" aria-hidden="true"></i> '. $prev_title . ' Case Study</a>' . "\n";
						}
					?>
					<?php
						$next_post = get_next_post();
						if($next_post) {
						   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
						   echo "\t" . '<a rel="next" class="btn btn-white btn-lg m-0 float-right" href="' . get_permalink($next_post->ID) . '" role="button" title="' . $next_title. '">'. $next_title . ' Case Study <i class="fa fa-arrow-right" aria-hidden="true"></i></a>' . "\n";
						}
					?>
				</div>
				<!-- Next and Previous posts links - mobile -->
				<div class="d-inline d-sm-none">
					<?php
						$prev_post = get_previous_post();
						if($prev_post) {
						   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
						   echo "\t" . '<a rel="prev" class="btn btn-white btn-lg m-0 float-left" href="' . get_permalink($prev_post->ID) . '" role="button" title="' . $prev_title. '"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>' . "\n";
						}
					?>
					<?php
						$next_post = get_next_post();
						if($next_post) {
						   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
						   echo "\t" . '<a rel="next" class="btn btn-white btn-lg m-0 float-right" href="' . get_permalink($next_post->ID) . '" role="button" title="' . $next_title. '"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>' . "\n";
						}
					?>

					<?php endwhile; endif; ?>
				</div>
				<div class="jumbotron-content m-0 py-4 bg-grey-overlay d-inline-block w-100">
					<div class="box-overlay text-center">
						<h1 class="display-3 mb-3"><?php the_title(); ?></h1>
					</div>
        </div>
		  </div>
		</div>

		<!-- Case Study Content -->
		<section class="">
			<div class="container text-center">
				<div class="main-content">
					<div class="row justify-content-sm-center">
						<div class="col-sm-10">

							<?php

								// check if the flexible content field has rows of data
								if( have_rows('case_study_content') ):

								 	// loop through the rows of data
								    while ( have_rows('case_study_content') ) : the_row();

											// check current row layout
												if( get_row_layout() == 'case_text' ):

													the_sub_field('case_study_text_1');

												elseif( get_row_layout() == 'case_images' ):

													$images = get_sub_field('case_study_images');
													?>

													<?php if( $images ) : ?>
														<div class="case-studies-carousel slick-dotted w-75 mx-auto">
															<?php foreach( $images as $image ) : ?>
																<div class="my-3">
																	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
																</div>
															<?php endforeach; ?>
														</div><!-- .case-studies-carousel -->
													<?php endif; ?>

											<?php endif;

								    endwhile;

									?>

										<a class="btn btn-lg mt-4" href="<?php echo get_site_url(); ?>/request-a-brochure/" role="button">Request a Brochure <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

								<?php else :
								    // no layouts found
								endif; ?>


						</div>
					</div>
				</div>
			</div>
		</section>
<?php endif; ?>		
