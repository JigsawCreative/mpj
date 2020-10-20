<?php if(get_row_layout() == 'warranties_block' ): 
        $warranty_gallery = get_sub_field('warranty_gallery');
        $grey_title = get_sub_field('grey_title');
    ?>  
    <section class="warranties bg-dashes">

        <div class="container">
            
            <div class="row">

                <?php if($grey_title) : ?>

                    <h3 class="grey-title"><?=$grey_title; ?></h3>

                <?php endif; ?>

                <div class="warranty-block-wrapper">
                
                    <ul class="warranties-block">

                        <?php foreach( $warranty_gallery as $warranty_gallery_img ): ?>

                            <li>

                                <img src="<?php echo esc_url($warranty_gallery_img['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($warranty_gallery_img['alt']); ?>" />

                                <h3><?=$warranty_gallery_img['title']; ?></h3>

                                <p><?php echo esc_html($warranty_gallery_img['caption']); ?></p>

                            </li>

                        <?php endforeach; ?>

                    </ul>
                
                </div>

            </div>

        </div>
    
    </section> 
  
<?php endif; ?>    