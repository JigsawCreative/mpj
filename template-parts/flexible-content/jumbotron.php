<?php if(get_row_layout() == 'jumbotron' ) : 
    $jumboImage = get_sub_field('jumbotron_image');
?>
    <!-- Main jumbotron -->
    <div class="jumbotron" style="background: linear-gradient(rgba(51,51,51,.6),rgba(51,51,51,.6)), url(<?php echo $jumboImage ?>)">
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
                <div class="jumbotron-inner-content w-75">
                    <p><?php the_sub_field('product_description'); ?></p>
                </div>
            <p>
                <a class="btn btn-br btn-cr btn-lg scroll" href="#form-brochure" role="button">Request a Brochure <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a class="btn btn-br btn-cr btn-lg scroll" href="/case-studies/" role="button">View our Case Studies <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </p>
        </div>
      </div>
    </div>
<?php endif; ?>