<?php
/*
  Brochure Form
*/
?>

<section class="bg-dashes">
  <div class="container">
    <div class="row justify-content-sm-center">
      <div id="form-brochure" class="col-md-10 form-box">
        <div class="row">
          <div class="col-md-3 hidden-sm-down">
            <img class="" src="<?php bloginfo('template_url'); ?>/img/temp/brochure.png" alt="Montperlier Joinery brochure">
          </div>
          <div class="col-md-9">
            <h3 class="title">Request a Brochure</h3>
            <?php the_field('bro_form_text', 120 ); ?>
            <?php gravity_form( 1, false, false, false, '', true ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
