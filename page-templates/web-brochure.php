<?php 

    /** Template name: Web Brochure */ 
    
?>

<?php get_header(); ?>

    <section class="bg-dashes p-4 mt-4">

        <div class="container mt-5">
            
            <div class="row d-flex justify-content-center">

                <div class="web-brochure__wrapper p-3 d-flex flex-column">

                    <?php $image = get_field( 'image' ); ?>

                    <a href="<?php the_field( 'link' ); ?>" target="_blank" class="web-brochure__link">
                        <img src="<?=$image['url']; ?>" alt="<?=$image['alt']; ?>" class="web-brochure__link">
                    </a>
                    
                    <a href="<?php the_field('link'); ?>" target="_blank" class="btn mt-3 p-2">Click to Open</a>

                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>