<?php if(get_row_layout() == 'text_and_brochure') : 
    $brImage = get_sub_field('br_image');
    $product_image = get_sub_field( 'product_image' );
?>

<section class="bg-dashes p-2 p-md-4">

    <div class="container product-container">

        <div class="row">

            <div class="product-content-wrapper">
            
                <div id="product-text" class="form-box">

                    <div class="product-content-container">
                    
                        <h3 class="title"><?php the_sub_field( 'product_title' ); ?></h3>

                        <img class="col-lg-6 pl-0 pb-2 float-left" src="<?=$product_image['url']; ?>" alt="">

                        <p><?php the_sub_field('product_text'); ?></p>


                        <?php if(get_sub_field( 'case_studies_button' ) || get_sub_field( 'brochure_button' )) : ?>

                            <?php if(get_sub_field('case_studies_button') ) :  ?>

                                <a class="btn ml-0 btn-lg btn-on-top w-100 col-md-5 col-lg-3" href="/case-studies/" role="button">
                                    View Our Case Studies                                
                                    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    
                                </a>

                            <?php endif; ?>

                            <?php if(get_sub_field('brochure_button') ) :  ?>

                                <a class="btn ml-0 btn-lg btn-on-top w-100 col-md-5 col-lg-3" href="/request-a-brochure/" role="button">
                                    Request a Brochure                               
                                    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    
                                </a>

                            <?php endif; ?>
                            
                        <?php endif; ?>    
            
                    </div>

                </div>
            
            </div>

        </div>

    </div>

</section>

<?php endif; ?>