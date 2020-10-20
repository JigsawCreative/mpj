<?php if( get_row_layout() == 'warranty') : ?>
    <section class="warranty">
        <div class="container mt-5">
           <div class="row justify-content-center p-2">
               <div class="warranties-text">
                   <h1>Written Warranties</h1>
                   <p>Click to view our latest standard and supply only warranty documents.</p>
               </div>
           </div>
            <div class="row justify-content-center p-2">
              <div class="warranty-img col-md-4">
                  <a href="<?php the_sub_field('img_one_link'); ?>"><img src="<?php the_sub_field('warranty_img_one'); ?>" /></a>
              </div>

              <div class="warranty-img col-md-4">
                  <a href="<?php the_sub_field('img_two_link'); ?>"><img src="<?php the_sub_field('warranty_img_two'); ?>" /></a>
              </div>
            </div>
        </div>
    </section>
<?php endif; ?>