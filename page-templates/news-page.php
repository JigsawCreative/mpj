<?php
/*
  Template Name: News & Events Page
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

		<!-- News & Events Navigation -->
		<section id="">
			<div class="container">
				<div class="row">

				</div> <!-- .row -->
			</div> <!-- .container -->
		</section>

		<!-- News & Events Articles -->
		<section id="news-articles">
			<div class="container">
				<div class="row">


				</div> <!-- .row -->
			</div> <!-- .container -->
		</section>

    <!-- Brochure Form -->
    <?php include(locate_template('form-brochure.php')); ?>

	</div><!-- Main -->

<?php get_footer(); ?>
