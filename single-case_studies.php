<?php
/**
 * Single Post Template: Case Study
 */
?>

<?php get_header(); ?>

	<div id="case-study" class="main">
        
        <!-- Add Flexible Content -->
        <?php get_template_part( 'template-parts/flexible-content/flexible-content', get_post_type() ); ?>  

	</div><!-- Main -->

<?php get_footer(); ?>
