<?php
/*
  Site Visit Form
*/
?>

<section class="bg-dashes">
  <div class="container">
    <div class="row justify-content-sm-center">
      <div class="col-md-10 form-box">
        <div class="row">
          <div class="col-md-3 hidden-sm-down">
            <img class="" src="<?php bloginfo('template_url'); ?>/img/site-visit.png" alt="Montperlier Joinery brochure">
          </div>
          <div class="col-md-9">
            <h3 class="title">Request a Site Visit</h3>
            <?php the_field('sv_form_text', 122 ); ?>
            <?php gravity_form( 3, false, false, false, '', true ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
