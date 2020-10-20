<? if(get_row_layout() == 'flexible_text_area') : ?>
   <div class="container bg-dashes">
    <div class="row justify-content-sm-center">
        <div class="fc_text_area">
            <p><?php the_sub_field('fc_text_area'); ?></p>
        </div>
    </div>
</div>
<?php endif; ?>