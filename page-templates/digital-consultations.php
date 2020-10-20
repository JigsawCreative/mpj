<?php
/*
  Template Name: Digital Consultations
*/
?>

<?php get_header(); ?>

	<div id="about" class="main">

		<!-- Main jumbotron -->
		<div class="jumbotron digital-consultations">
		    <div class="container titles-container">

                <!-- Breadcrumbs -->
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if(function_exists('bcn_display'))
                    {
                    bcn_display();
                    }
                ?>
                </div>

                <div class="dc-titles">
                    <h1 class="display-4 w-75"><?php the_title(); ?></h1>
                    <p class="w-50"><?php the_field('top_text'); ?></p>
                    <p>
                    <a class="btn btn-clear btn-lg" href="<?php echo get_site_url(); ?>/request-a-site-visit/" role="button">Request a Digital Consultation <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </p>
                </div>
		    </div>
        </div>
        
        <?php 
            $main_image = get_field( 'main_image' );
            $manufacture_image = get_field( 'manufacture_image' );
        ?>
        <section class="dc-section bg-dashes">
            <div class="centred">
            <div class="dc-container">
                <div class="main-image">
                    <img src="<?= $main_image['url']; ?>" alt="<?= $main_image['alt']; ?>">
                </div>
                <div class="contact-logos">
                    <?php 
                    
                    if(have_rows('contact_logos')) : ?>

                        <?php while(have_rows('contact_logos') ) : the_row();
                            $logo_image = get_sub_field('logo_image');
                        ?>
                            <div class="logo-container">
                                <img src="<?= $logo_image['url']; ?>" alt="" class="contact-method-logos">
                            </div>
                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
                <div class="dc-text-1">
                    <?php the_field( 'dc_text_1' ); ?>
                </div>
                <div class="manufacture-image">
                    <img src="<?= $manufacture_image['url']; ?>" alt="<?= $manufacture_image['alt']; ?>">
                </div>
                <div class="dc-text-2">
                    <?php the_field( 'dc_text_2' ); ?>
                </div>
            </div>
            </div>
        </section>



	</div><!-- Main -->

<?php get_footer(); ?>
