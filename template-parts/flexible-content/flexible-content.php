<?php
//check if flexible content has rows of data
    if(have_rows('flexible_content') ) :
        $div_id = 1; 

            //loop through the rows of data
            while(have_rows('flexible_content') ) : the_row();

                echo '<div id="content-div-' . $div_id . '">';
                    include(locate_template('/template-parts/flexible-content/image_carousel.php'));

                    include(locate_template('/template-parts/flexible-content/image_gallery.php'));
                   
		            include(locate_template('/template-parts/flexible-content/jumbotron.php'));

                    include(locate_template('/template-parts/flexible-content/quote.php'));

                    include(locate_template('/template-parts/flexible-content/site-visit-form.php'));

                    include(locate_template('/template-parts/flexible-content/brochure-request.php'));
                
                    include(locate_template('/template-parts/flexible-content/text_area.php'));

                    include(locate_template('/template-parts/flexible-content/case_studies.php'));

                    include(locate_template('/template-parts/flexible-content/single_case_study.php'));

                    include(locate_template('/template-parts/flexible-content/warranty.php'));

                    include(locate_template('/template-parts/flexible-content/warranty_block.php'));

                    include(locate_template('/template-parts/flexible-content/text-and-brochure.php'));

                    include(locate_template('/template-parts/flexible-content/covid-19.php'));

                echo '</div>';

            $div_id++;

            endwhile;

        else :

            // no layouts found

    endif;

?>
