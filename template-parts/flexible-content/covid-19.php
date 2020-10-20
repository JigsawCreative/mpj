<?php if(get_row_layout() == 'covid') : ?>

    <div class="covid19-update">

        <h5><?= the_sub_field( 'covid-19_title' ); ?></h5>

        <h5><a href="<?= the_sub_field( 'covid-19_link' ); ?>"><?= the_sub_field( 'covid-19_link_label' ); ?></a></h5>

    </div>

<?php endif; ?>