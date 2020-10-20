<?php if(get_row_layout() == 'case_studies') : ?>
            
        <section id="case-studies" class="bg-dashes no-pad">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-12">
                        <div class="case-links">
                             <h3><?php the_sub_field('case_study_title'); ?></h3>
                            <?php $loop = new WP_Query( array( 'post_type' => 'case_studies', 'posts_per_page' => 6 ) ); ?>

                            <?php if($loop->have_posts()) { $cnt = 0;

                                echo '<ul class="d-sm-flex p-0 m-0" role="tablist">';

                                while($loop->have_posts()) { $loop->the_post(); $cnt++;

                                    $class = '';
                                    if(1 === $cnt)
                                        $class = 'active';

                                    echo '<li class="col-sm-2 nav-item"><a class="d-flex justify-content-center nav-link '. $class .'" data-toggle="tab" href="#tab-' . get_the_ID() . '">' . get_the_title() . '</a></li>';

                                }

                                echo '</ul>';

                            }
                            wp_reset_postdata();
                            ?>

                        </div>
                    </div>
                </div>
            </div>
			<div class="container">
				<div class="row no-gutters">
				   
					   <div class="col-lg-12 bg-white">
                        
                        <!-- Fetch 6 most recent case studies -->
                        <?php $loop = new WP_Query( array( 'post_type' => 'case_studies', 'posts_per_page' => 6 ) ); ?>
						<!-- Tab panes -->
						<?php if($loop->have_posts()) : $cnt = 0; ?>

							<div class="tab-content">
                                <?php while($loop->have_posts()) : $loop->the_post(); $cnt++; ?>

								<?php
								$class = '';
								if(1 === $cnt)
									$class = 'active';
								?>

								<div class="tab-pane <?php echo $class; ?>" id="tab-<?php echo get_the_ID(); ?>" role="tabpanel">

									<?php
									// check if the flexible content field has rows of data
									if( have_rows('case_study_content') ):
										// loop through the rows of data
											while ( have_rows('case_study_content') ) : the_row();
												// check current row layout
													if( get_row_layout() == 'case_images' ):
														$images = get_sub_field('case_study_images');
												 endif;

											endwhile;

									endif;
									?>

									<?php if( $images ) : ?>
										<div class="case-studies-carousel slick-dotted">
											<?php foreach( $images as $image ) : ?>
									    	<div>
									      	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
									      </div>
									    <?php endforeach; ?>
										</div><!-- .case-studies-carousel -->
									<?php endif; ?>

									<div class="container case-desc w-75">
										<h3><?php echo get_the_title(); ?></h3>
										<p><?php echo wp_trim_words( get_field('cs_preview_text'), 60 ); ?></p>
										<a class="btn btn-lg" href="<?php echo get_the_permalink(); ?>" role="button">View the Case Study <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
									</div><!-- .container -->

								</div><!-- tab-pane -->

							<?php endwhile; ?>

							</div><!-- .tab-content -->

						<?php endif; ?>
						<?php wp_reset_postdata(); ?>

					</div>
				</div>
			</div>
		</section>
<?php endif; ?>