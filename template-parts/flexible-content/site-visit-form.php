<?php if(get_row_layout() == 'site_visit_form') :
    $svImage = get_sub_field('sv_form_image');

?>

<section class="bg-dashes">
  <div class="container">
    <div class="row justify-content-sm-center">
      <div class="col-md-10 form-box">
        <div class="row">
          <div class="col-md-3 hidden-sm-down">
            <img class="" src="<?php echo $svImage; ?>" alt="Montperlier Joinery brochure">
          </div>
          <div class="col-md-9">
            <h3 class="title"><?php the_sub_field('sv_form_title'); ?></h3>
            <?php the_sub_field('visit_form_text', 122 ); ?>
            <?php gravity_form( 3, false, false, false, '', true ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>