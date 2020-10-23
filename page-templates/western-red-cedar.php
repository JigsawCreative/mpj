<?php /** Template Name: Western Red Cedar **/ ?> 

<?php get_header(); ?>

    <main class="wrc-main main">

        <h2 class="grey-title top-right"><?php the_title();?></h2>

        <?php $timber_bg_image = get_field( 'timber_bg_image' ); ?>

        <div class="wrc-column-one" style="background: linear-gradient(90deg, rgba(2,0,36,0.9) 0%, rgba(0,212,255,0.9) 0%, rgba(255,255,255,0.9) 0%), url(<?=$timber_bg_image; ?>)">

            <h2><?php the_field( 'timber_title' ); ?></h2>

            <div class="timber-bullets__wrapper">

                <div class="timber-bullets-one">

                    <?php the_field( 'timber_bullets' ); ?>

                </div>

                <div class="timber-bullets-two">

                    <?php the_field( 'timber_bullets_two' ); ?>

                </div>

            </div>

            <div class="pefc">

                <?php the_field( 'pefc' ); ?>

            </div>

            <div class="co2">

                <div class="grey-title">

                    <h3>CO<sub>2</sub> neutral over the full life cycle, from cradle to cradle</h3>

                </div>

            </div>

            <div class="lifecycle-image">
                <?php $lifecycle_img = get_field( 'lifecycle' ); ?>
            
                <img src="<?=$lifecycle_img['url']; ?>" alt="<?=$lifecycle_img['alt']; ?>">
                <div class="lifecycle__titles">
                    <h5>Production Phase</h5>
                    <h5>Use Phase</h5>
                    <h5>End-of-life Phase</h5>
                </div>
            
            </div>

            <div class="timber-images">
            
            <?php 
                $images = get_field('timber_images');
                if( $images ): ?>
                <ul class="auto-columns">
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            
            </div>
        
        </div>
        
        <div class="wrc-column-two">

            <h2><?php the_field( 'red_cedar_title' ); ?></h2>

            <div class="red-cedar-bullets__wrapper">

                <div class="red-cedar-bullets-one">

                <?php if( have_rows('red_cedar_bullets') ): ?>

                    <?php while( have_rows('red_cedar_bullets') ): the_row(); 

                        $icon = get_sub_field('icon');

                        ?>

                        <div class="red-cedar-bullet__wrapper">
                            <div class="red-cedar__icon">

                                <img src="<?=$icon['url']; ?>" alt="<?=$icon['alt']; ?>">

                            </div>
                            <div class="red-cedar-bullet__text">

                                <p><?php the_sub_field( 'text' ); ?></p>

                            </div>
                        </div>

                    <?php endwhile; ?>
                    
                <?php endif; ?>

                </div>

                <div class="red-cedar-bullets-two">

                    <?php if( have_rows('red_cedar_bullets_two') ): ?>

                        <?php while( have_rows('red_cedar_bullets_two') ): the_row(); 

                            $icon_two = get_sub_field('icon_two');

                            ?>

                            <div class="red-cedar-bullet__wrapper">
                                <div class="red-cedar__icon">

                                    <img src="<?=$icon_two['url']; ?>" alt="<?=$icon_two['alt']; ?>">

                                </div>
                                <div class="red-cedar-bullet__text">

                                    <p><?php the_sub_field( 'text_two' ); ?></p>

                                </div>
                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>
                      
            <div class="trada-text">

                <?php the_field( 'trada_text' ); ?>  

            </div>
        
            <div class="red-cedar__image-wrapper">

                <div class="trada-trial-results">

                    <h4 class="grey-title"><?php the_field( 'trada_trial_title' ); ?></h4>

                    <div class="trada-trial__content">

                        <?php $trada_trial_image = get_field( 'trada_trial_image' ); ?>

                        <img class="trada-trial-image" src="<?=$trada_trial_image['url']; ?>" alt="<?=$trada_trial_image['alt']; ?>">

                        <div class="trada-trial-woods">

                            <?php the_field( 'trada_trial_woods' ); ?>

                        </div>

                    </div>

                </div>

             
                <div class="sawn-logs">
                    <?php $red_cedar_img = get_field( 'red_cedar_image' ); ?>
                    <img src="<?=$red_cedar_img['url']; ?>" alt="<?=$red_cedar_img['alt']; ?>">

                </div>

            </div>

        </div>
    
    </main>






<?php get_footer(); ?>