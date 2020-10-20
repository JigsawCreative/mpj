<?php /** Template Name: Paint Options */ ?>

    <?php get_header(); ?>

        <main class="site-main main">
        
            <section class="paint-options bg-dashes">

                <div class="container">

                    <div class="row">

                        <div class="paint-title">

                            <h2 class="grey-title">

                                <?php the_field( 'paint_title' ); ?>

                            </h2>

                        </div>

                        <div class="paint-container">
                        
                            <div class="paint-colours">

                                <div class="paint-text"> 

                                    <?php the_field( 'paint_text' ); ?>

                                </div>

                                <?php $gallery = get_field('paint_options_gallery'); ?>

                                <ul>

                                    <?php foreach( $gallery as $gallery_img ): ?>

                                        <li>

                                            <img src="<?=$gallery_img['url']; ?>" alt="" />

                                        </li>

                                    <?php endforeach; ?>

                                </ul>

                            </div>

                                <div class="paint-image">

                                <?php $paint_img = get_field( 'paint_image' ); ?>

                                <img src="<?=$paint_img['url']; ?>" alt="">

                            </div>
                        
                        </div>

                        <div class="bottom-gallery">

                            <?php $bottom_gallery = get_field('bottom_gallery'); ?>

                            <ul>

                                <?php foreach( $bottom_gallery as $bottom_gallery_img ): ?>

                                    <li>

                                        <img src="<?=$bottom_gallery_img['url']; ?>" alt="" />

                                    </li>

                                <?php endforeach; ?>

                            </ul>


                        </div>
                    
                    </div>

                </div>

            </section>

        </main>

    <?php get_footer(); ?>    