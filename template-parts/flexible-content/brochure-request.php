<?php if(get_row_layout() == 'brochure_request') : 
    $brImage = get_sub_field('br_image');

?>

<section class="bg-dashes">
  <div class="container">
    <div class="row justify-content-sm-center">
      <div id="form-brochure" class="col-md-10 form-box">
        <div class="row">
          <div class="col-md-3 hidden-sm-down">
            <img class="" src="<?php the_sub_field('br_image'); ?>" alt="Montperlier Joinery brochure">
          </div>
          <div class="col-md-9">
            <h3 class="title"><?php the_sub_field('br_title'); ?></h3>
            <?php the_sub_field('br_text', 120 ); ?>
            <?php gravity_form( 1, false, false, false, '', true ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>