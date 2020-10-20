<? if(get_row_layout() == 'quote_block') : ?>
    <section id="product-quote" class="<?php the_sub_field('quote_background_colour'); ?>">
            <div class="container text-center">
                <div class="<?php the_sub_field('border_colour'); ?>">
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-9">
                           <?php if(get_sub_field('quote') ) : ?>
                                <p class="quote"><?php the_sub_field('quote'); ?></p>
                            <?php endif; ?>
                            <?php if(get_sub_field('bold_quote_text') ) : ?>
                                <h3 class="quote"><?php the_sub_field('bold_quote_text'); ?></h3>
                            <?php endif; ?>
                            <span class="quote-author"><?php the_sub_field('quote_author'); ?></span>
                        </div>
                    </div>
                         
                </div>
                        <?php if(get_sub_field('quote_button') ) : ?>
                            <div class="button-wrapper w-100 d-flex justify-content-center">
                                <a class="quote_block_button btn btn-lg btn-on-top <?php the_sub_field('quote_button_colour'); ?>" href="<?php the_sub_field('quote_button_link'); ?>" role="button"><?php the_sub_field('quote_button'); ?><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        <?php endif; ?>
            </div>
        </section>
<?php endif; ?>