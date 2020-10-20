    <?php if(get_row_layout() == 'image_gallery' ): 
        $block_images = get_sub_field('block_images');
    ?>            
        <section id="block-gal" class="bg-dashes">
            <div class="container">
               <div class="mobile-info">
                        <p><?php the_sub_field('block_images_mobile_info'); ?></p>
                    </div>
                <div class="row justify-content-sm-center">
                     <?php $counter = 1;  //this sets up the counter starting at 0 ?>
                      <?php foreach( $block_images as $block_image ): ?>
                            <?php 
                                if ($counter == 5) {
                                    $columnClass = 'col-lg-10';
                                } else {
                                    $columnClass = 'col-lg-5';
                                }
                            ?>
                            <div class="<?php echo $columnClass ?>">
                                <div class="product-box block-gallery-image bg-transparent" style="background: linear-gradient(rgba(51, 51, 51, 0.6), rgba(51, 51, 51, 0.6)), url('<?php echo $block_image['sizes']['large']; ?>');">  
                                   <div class="product-box-content">
                                       <div>
                                           <h2 class="image-title"><?php echo $block_image['title']; ?></h2>
                                           <p class="image-caption"><?php echo $block_image['caption']; ?></p>
                                           
                                                <?php if(get_sub_field('add_links') ) : ?>
                                                   <a href="/<?php echo $block_image['alt']; ?>/">
                                                   Find Out More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                   </a> 
                                                <?php endif; ?>   
                                       </div>
                                   </div>     <!-- gallery image content -->
                                </div>      <!-- gallery image -->    
                            </div> 
                            <?php $counter++; ?>
                        <?php endforeach; ?>
                    </div>     <!-- centered row -->  
                </div>     <!-- container -->
        </section>    <!-- section -->
    <?php endif; ?>