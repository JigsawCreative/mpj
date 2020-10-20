<?php
/*
  Template Name: Case Studies Page
*/
?>

<?php get_header(); ?>

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
  		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
  		    <p>
            <a class="btn btn-br btn-cr btn-lg" href="<?php echo get_site_url(); ?>/request-a-brochure/" role="button">Request a Brochure <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </p>
        </div>
		  </div>
		</div>

		<!-- Case Studies -->
		<section id="case-studies">
			<div class="container-fluid">
				<div class="row no-gutters">

					<?php
						$args = array(
							'post_type' => 'case_studies',
						);
						$loop = new WP_Query( $args );
					?>

					<?php while($loop->have_posts() ) : $loop->the_post(); ?>
						<div class="col-md-6">

							<?php

								//// check if the flexible content field has rows of data
								//if( have_rows('case_study_content') ):
								//	// loop through the rows of data
								//		while ( have_rows('case_study_content') ) : the_row();
								//			// check current row layout
								//				if( get_row_layout() == 'case_images' ):
								//					$images = get_sub_field('case_study_images');
								//			 endif;

								//		endwhile;

								//endif;

								//$image = $images[0];
								$image = get_field('featured_background_image');
								$content = get_field('cs_preview_text');

							if( !empty($image) ): ?>
								<div class="case-box" style="background: linear-gradient(rgba(51,51,51,0.6), rgba(51,51,51,0.6)), url(<?php echo $image ?>); background-position: center;">
							<?php else: ?>
								<div class="case-box" style="background: linear-gradient(rgba(51,51,51,0.6), rgba(51,51,51,0.6)), url(<?php bloginfo('template_url'); ?>/img/coming-soon.gif); background-position: center;">
							<?php endif; ?>
								<div class="case-box-content">
									<div>
										<h2><?php the_title(); ?></h2>
										<?php
											$terms = get_field('product_category');
											foreach( $terms as $term ): ?>
												<span class="product-cat"><?php echo $term->name; ?></span>
											<?php endforeach; ?>
											<p><?php echo mb_strimwidth($content, 0, 440, '...');?></p>
											<a class="btn btn-cr btn-lg" href="<?php echo get_the_permalink(); ?>" role="button">Find out more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
									</div>
								</div><!-- .case-box-content -->
							</div><!-- .case-box -->
						</div> <!-- .col-md-6 -->

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div> <!-- .row -->
			</div> <!-- .container-fluid -->
		</section>

    <!-- Brochure Form -->
    <?php include(locate_template('form-brochure.php')); ?>

	</div><!-- Main -->

<?php get_footer(); ?>
