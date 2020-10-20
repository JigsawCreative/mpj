<?php
/*
  Template Name: Product Page
*/
?>

<?php get_header(); ?>
    
    <div class="main">
        
            <!-- Add Flexible Content -->
        <?php get_template_part( 'template-parts/flexible-content/flexible-content', get_post_type() ); ?>  

        
    </div><!-- Main -->

<?php get_footer(); ?>