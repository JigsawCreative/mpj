<?php if( get_row_layout() == 'image_carousel' ) : ?>
        <section class="bg-grey">

            <div class="container-fluid">
               
               <div class="row justify-content-center">

                    <?php if(get_sub_field( 'carousel_title' ) || get_sub_field( 'carousel_enlarge_text' )) : ?>

                        <div class="carousel__titles d-flex flex-column align-items-center">
                        
                            <?php if(get_sub_field('carousel_title')) : ?>
                            
                                <h2 class="carousel-title"><?php the_sub_field('carousel_title'); ?></h2>
                        
                            <?php endif ?>

                            <?php if(get_sub_field( 'carousel_enlarge_text' )) : ?>

                                <h5 class="carousel-image-enlarge"><?php the_sub_field( 'carousel_enlarge_text' ); ?></h5>

                            <?php endif; ?>
                        
                        </div>
                  
                    <?php endif; ?>

                        <div id="image_carousel" class="carousel slide" data-ride="carousel" data-interval="9000" data-toggle=”modal” data-target=”#exampleModal”>
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                              <?php 

                                $carouselImages = get_sub_field('carousel_images');
                                $slideCount = 1; 

                                ?>
                               <?php foreach( $carouselImages as $carouselImage ): ?>
                                   <?php 
                                        if ($slideCount == 1) {
                                            $slideActive = 'active';
                                        } else {
                                            $slideActive = '';
                                        }
                                        $slideCount++;
                                    ?>
                                    <div class="carousel-item col-md-3 <?php echo $slideActive; ?>">
                                       <a href="<?php echo $carouselImage ?>" data-toggle="lightbox" data-gallery="gallery">
                                        <img class="mx-auto d-block" src="<?php echo $carouselImage ?>">
                                        </a>
                                    </div> <!-- carousel image -->
                                <?php endforeach ?>
                            </div> <!-- carousel inner -->
                                <a class="carousel-control-prev" href="#image_carousel" role="button" data-slide="prev">
                                    <i class="fa fa-chevron-left fa-lg text-muted"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#image_carousel" role="button" data-slide="next">
                                    <i class="fa fa-chevron-right fa-lg text-muted"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div> <!-- image carousel -->
                </div>
            </div> <!-- Full width container -->
            
       </section> <!-- Section -->
       
<?php endif; ?>