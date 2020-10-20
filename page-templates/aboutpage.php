<?php
/*
  Template Name: About Page
*/
?>

<?php get_header(); ?>

	<div id="about" class="main">

		<!-- Main jumbotron -->
		<div class="jumbotron bg-about">
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
  		    <p class="w-50"><?php the_field('header_text'); ?></p>
  		    <p>
            <a class="btn btn-br btn-lg" href="<?php echo get_site_url(); ?>/request-a-brochure/" role="button">Request a Brochure <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </p>
        </div>
		  </div>
		</div>

		<!-- Quote and Image Section -->
		<section id="about" class="bg-green">
			<div class="container text-center">
				<div class="content-box mx-4">
					<div class="row justify-content-sm-center">
						<div class="col-sm-11">
							<h3 class="quote"><?php the_field('about_quote'); ?></h3>
							<span class="quote-author"><?php the_field('about_quote_author'); ?></span>
						</div>
					</div>
				</div>
			</div>
		</section>

    <!-- Brochure Form -->
    <?php include(locate_template('form-brochure.php')); ?>

	</div><!-- Main -->

<?php get_footer(); ?>
